<?php
function checkPrime($num)
{
    if($num < 2)
    {
        return false;
    }
    for($i=2;$i<$num;$i++)
    {
        if($num % $i == 0)
        {
            return false;
        }
    }
    return true;
}

function checkPalindrome($num)
{
    $reverse = strrev($num);
    if($num == $reverse)
    {
        return true;
    }

    return false;
}

function checkArmstrong($num)
{
    $sum = 0;
    $temp = $num;

    while($temp > 0)
    {
        $d = $temp % 10;
        $sum = $sum + ($d * $d * $d);
        $temp = (int)($temp / 10);
    }

    if($sum == $num)
    {
        return true;
    }

    return false;
}

?>