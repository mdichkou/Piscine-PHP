#!/usr/bin/php
<?php
if ($argc == 4)
{
    $num1 = (int)trim($argv[1]);
    $num2 = (int)trim($argv[3]);
    $op = trim($argv[2]);
    if ($op == "+")
    $var = $num1 + $num2;
    else if ($op == "-")
        $var = $num1 - $num2;
    else if ($op == "%")
        $var = $num1 % $num2;
    else if ($op == "/")
        $var = $num1 / $num2;
    else if ($op == "*")
        $var = $num1 * $num2;
    echo "$var\n";
}
else
    echo "Incorrect Parameters\n";
?>