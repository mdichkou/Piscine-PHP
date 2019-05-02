#!/usr/bin/php
<?php
function    ft_split($str)
{
    $str = str_replace("\t"," ",$str);
    $tmp = explode(" ",$str);
    $j = 0;
    $i = 0;
    $spl = array();
    while ($i < count($tmp))
    {
        if ($tmp[$i] != NULL)
        {
            $spl[$j] = $tmp[$i];
            $j++;
        }
        $i++;
    }
    return $spl;
}
$i = 1;
$sap = array();
while ($i < count($argv))
{
    $tmp = ft_split($argv[$i]);
    $j = 0;
    while ($j < count($tmp))
    {
        array_push($sap,$tmp[$j]);
        $j++;
    }
    $i++;
}
sort($sap, SORT_STRING);
$i = 0;
while ($i < count($sap))
{
    echo $sap[$i] . "\n";
    $i++;
}
?>