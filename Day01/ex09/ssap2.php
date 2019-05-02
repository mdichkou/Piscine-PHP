#!/usr/bin/php
<?php
function check_place($a)
{
    $tab = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
    if ($a != NULL)
        $i = strpos($tab,$a);
    return $i;
}
function    my_sort($a, $b)
{
    $i = 0;
    while ($i < ft_strlen($a))
    {
        if (ft_strlen($b[$i]) < $i)
            return 1;
        if ($a[$i] != $b[$i])
        {
            if (check_place(strtolower($a[$i])) > check_place(strtolower($b[$i])))
                return 1;
            else if (check_place(strtolower($a[$i])) < check_place(strtolower($b[$i])))
                return -1;
        }
        $i++;
    }
    return -1;
}
function ft_strlen($str)
{
    $i = 0;
    while ($str[$i] != "")
    {
        $i++;
    }
    return $i;
}
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
usort($sap,'my_sort');
$i = 0;
while ($i < count($sap))
{
    echo $sap[$i] . "\n";
    $i++;
}
?>