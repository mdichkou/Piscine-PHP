<?php
function    ft_split($str)
{
    $tmp = explode(" ",$str);
    sort($tmp);
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
?>