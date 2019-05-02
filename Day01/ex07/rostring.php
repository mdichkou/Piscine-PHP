#!/usr/bin/php
<?php
$argv[1] = str_replace("\t"," ",$argv[1]);
$tmp = explode(" ",$argv[1]);
$i = 0;
$j = 0;
while ($i < count($tmp))
{
    if ($tmp[$i] != NULL)
    {
        $ros[$j] = $tmp[$i];
        $j++;
    }
    $i++;
}
$i = 1;
echo $ros[$j];
while ($i < $j)
{
    echo $ros[$i];
    echo " ";
    $i++;
}
echo $ros[0] . "\n";
?>