#!/usr/bin/php
<?php
$i = 2;
while ($i <= $argc)
{
    $tmp = explode(":",$argv[$i]);
    if ($tmp[0] == $argv[1])
    {
        $var = $tmp[1];
    }
    $i++;
}
if ($var != NULL)
    echo $var . "\n";
?>