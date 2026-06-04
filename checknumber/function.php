<?php
function checkpalindrome($num)
{
    $reverse = strrev($num);
    if($num == $reverse)
    {
        return true;
    }

    return false;
}

function checkarmstrong($num)
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

function checkeven($num){
    if($num%2==0){
        return true;
    }
    else{
        return false;
    }
}

?>