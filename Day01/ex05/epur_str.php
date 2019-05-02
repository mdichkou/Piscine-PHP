#!/usr/bin/php
<?php
$tmp = explode(" ",$argv[1]);
$i = 0;
$j = 0;
while ($i < count($tmp))
{
    if ($tmp[$i] != NULL)
    {
        $spl[$j] = $tmp[$i];
        $j++;
    }
    $i++;
}
$i = 0;
while ($i < $j - 1)
{
    echo $spl[$i];
    echo " ";
    $i++;
}
echo $spl[$i] . "\n";
?>