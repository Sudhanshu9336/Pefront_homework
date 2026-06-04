<?php
$n = 121121;
$temp = $n;
$reverse = 0;

while($n > 0)
{
    $digit = $n % 10;
    $reverse = ($reverse * 10) + $digit;
    $n = (int)($n / 10);
}
if($temp == $reverse){
    echo "Palindrome Number";
}
else{
    echo "Not Palindrome Number";
}

?>