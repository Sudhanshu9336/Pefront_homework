<?php
$n=153;
$temp=$n;
$sum=0;
while($n>0){
    $d=$n%10;
    $sum=$sum+($d*$d*$d);
    $n=(int)($n/10);
}
if($sum==$temp){
    echo "armstrong";
}
else{
    echo "not armstrong";
}