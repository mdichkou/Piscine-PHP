<?php
$value = $_GET["value"];
$action = $_GET["action"];
$name = $_GET["name"];
if ($action == "set")
    setcookie($name , $value, time()+3600);
else if ($action == "get" && $_COOKIE[$name] != NULL)
    echo $_COOKIE[$name] . "\n";
else if ($action == "del")
    setcookie($name);
?>