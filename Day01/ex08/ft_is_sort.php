<?php
function    ft_is_sort($tab)
{
    $i = 0;
    while ($i < count($tab) - 1)
    {
        if ($tab[$i + 1] < $tab[$i])
            return false;
        $i++;
    }
    return true;
} 
?>