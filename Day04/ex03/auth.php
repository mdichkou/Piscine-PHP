<?php
function auth($login, $passwd)
{
    $file = unserialize(file_get_contents("../private/passwd"));
    $check = false;
    foreach($file as $key => $value)
    {
        foreach ($value as $index)
        {
            if ($index['login'] == $login && $index['password'] == hash('tiger192,3',$passwd))
            {
                $check = true;
                break;
            }
        }
    }
    if ($check)
    {
        return true;               
    }
    else
        return false;
}
?>