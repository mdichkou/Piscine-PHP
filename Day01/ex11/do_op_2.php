#!/usr/bin/php
<?php
$argv[1] = str_replace("\t"," ",$argv[1]);
$str = trim($argv[1]);
list($num1,$op,$num2,$dch) = sscanf($str,"%d %c %d %s");
if ($argc == 2)
{
    if (($op == "*" || $op == "+" || $op == "-" || $op == "%" || $op == "/") 
    && is_numeric($num1) && is_numeric($num2) && !$dch)
    {
        if ($op == "*")
            $var = $num1 * $num2;
        if ($op == "+")
            $var = $num1 + $num2;
        if ( $op == "-")
            $var = $num1 - $num2;
        if ($op == "/")
            $var = $num1 / $num2;
        if ($op == "%")
            $var = $num1 % $num2;
        echo $var . "\n";
    }
    else
        echo "Syntax Error";
}
else
    echo "Incorrect Parameters";
?>