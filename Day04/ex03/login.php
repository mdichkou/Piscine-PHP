<?php
$login = $_GET["login"];
$passwd = $_GET["passwd"];
if ($login != NULL && $passwd != NULL)
{
    session_start();
    $_SESSION['loggued_on_user'] = $login;
    $_SESSION['passwd'] = $passwd;
    include('auth.php');
    if(auth($login,$passwd))
        echo "OK\n";
    else
        echo "ERROR\n";
}
else
    echo "ERROR\n";
?>