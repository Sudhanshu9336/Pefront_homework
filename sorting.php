<?php
$numbers = [50,20,10,40,30];
$n=count($numbers);
for($i=0;$i<$n-1;$i++){
    for($j=0;$j<$n-$i-1;$j++){
       if($numbers[$j]>$numbers[$j+1]){
         $temp = $numbers[$j];
         $numbers[$j]=$numbers[$j+1];
         $numbers[$j+1]=$temp;
       }
    }

}
foreach($numbers as $n){
    echo $n."<br>";
}
?>
<br><br><br>
<?php
$numbers = [50,2,1,80,30];
rsort($numbers);
foreach($numbers as $n){
    echo $n."<br>";
}
?>

<br><br>
<?php
$numbers = ["Mango","Apple","Banana","Orange"];
sort($numbers);
foreach($numbers as $n){
    echo $n."<br>";
}
?>



<?php

$marks = [
    "Rahul" => 80,
    "Aman" => 60,
    "Vikas" => 90
];
asort($marks);
print_r($marks);

?>
<br><br>
<?php
$fruits = ["Apple","Banana","Mango"];
echo count($fruits);
?>

<br><br>
<?php
$numbers = [50,2,1,80,30];
array_pop($numbers);
print_r($numbers);

?>