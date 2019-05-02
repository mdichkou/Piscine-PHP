<?php
$login = $_POST['login'];
$oldpasswd = $_POST['oldpw'];
$newpasswd = $_POST['newpw'];
$submit = $_POST['submit'];
if ($submit !== "OK")
    echo "ERROR\n";
else
{
    if ($login === "" || $oldpasswd === "" || $newpasswd === "")
    echo "ERROR\n";
    else
    {
        $file = unserialize(file_get_contents("../private/passwd"));
        $check = false;
        foreach($file as $key => $value)
        {
            foreach ($value as $index)
            {
                if ($index['login'] === $login && $index['password'] === hash('tiger192,3',$oldpasswd))
                {
                    $file[$key][$login]['password'] = hash('tiger192,3',$newpasswd);
                    $check = true;
                    $data = serialize($file);
                    file_put_contents("../private/passwd",$data);   
                    echo "OK\n";
                    break;
                }
            }
        }
        if (!$check)
            echo "ERROR\n";        
    }
}
?>