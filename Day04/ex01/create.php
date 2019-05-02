<?php
$login = $_POST['login'];
$passwd = $_POST['passwd'];
$submit = $_POST['submit'];
if ($submit !== "OK")
    echo "ERROR\n";
else 
{
    if ($login === "" || $passwd === "")
        echo "ERROR\n";
    else
    {
        $compte[] = array($login => array("login" => $login,"password" => hash('tiger192,3',$passwd)));
        $data = serialize($compte);
        if (file_exists("../private/passwd"))
        {
            $file = array();
            $file = unserialize(file_get_contents("../private/passwd"));
            $check = false;
            foreach($file as $key => $value)
            {
                foreach ($value as $index)
                {
                    if ($index['login'] == $login)
                    {
                        $check = true;
                        break;
                    }
                }
            }
            if ($check)
                echo "ERROR\n";
            else
            {
                echo "OK\n";
                file_put_contents("../private/passwd",$data,FILE_APPEND);
            }
        }
        else
        {
            mkdir("../private");
            file_put_contents("../private/passwd",$data);
            echo "OK\n";
        }
    }
}
?>