 <!-- <?php
$fruits = array("apple", "banana", "orange");
echo $fruits[0]; 
echo "<br>";
echo $fruits[1];
echo "<br>";
echo $fruits[2];

?>
<?php
function greet(){
    echo "hello sudhanshu gupta";
}
greet();


//function 
echo "<br>";
function add($a ,$b){
    echo $a+$b;
}
add(5,6);
add(56,8);


//function with return result
echo "<br>";
function ad($c ,$d){
    return $c+$d;
}
 $hi =ad(8,6);


 //index array




$user=["anil","kumar","35","gupta","india"];
for($i=0;$i<count($user);$i++){
    echo $user[$i];
    echo "<br>";
}
?> -->
<?php
$user=["I ","am","sudhanshu","gupta","persuing","btech","class12"];
foreach($user as $u){
    echo $u;
    echo "<br>";
}


// associative array in php 
$userinfo =[
    "name"=>"sudhanshu gupta",
    "age"=>21,
    "address"=>"rajepur ambedkarnagar up",
    "interest"=>"chess playing",
    "working at"=>"pe front office"
];
// ec"ho $userinfo["age"];
echo "<br>";
echo "<br>";
// print_r($userinfo);
foreach($userinfo as $data){
    echo $data;
    echo "<br>";
}


echo "<br>";echo "<br>";echo "<br>";
// echo "<pre>";


//multidimensinal arrray in php;
$multipleuser=[
    [1,"ram","shyam","shubham"],
    [2,"geeta","sheeta","reeta"],
    [3,"delhi","lucknow","banarash"]
];
for($i=0;$i<count($multipleuser);$i++){
print_r($multipleuser[$i]);
echo"<br>";
}
echo "<br>";
echo "<br>";
//multidimensinal associative arrray in php;
$multipleuser=[
    ["name"=>"ram","age"=>29,"email"=>"ram211@gmail.com"],
    ["name"=>"ram","age"=>29,"email"=>"ram211@gmail.com"],
   ["name"=>"ram","age"=>29,"email"=>"ram211@gmail.com"],
];
echo "<table border='1'>";
foreach($multipleuser as $user){
    echo "<tr>";
    foreach($user as $item){
        echo "<td>";
        echo $item;
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

$admin=["sanjay","sunny","sunil","salman"];
array_push($admin,"katrina");
array_pop($admin);
array_push($admin,"katrina","shruti","priyanka","khushbu");
//for removing the multile itmes i can do :
 array_splice($admin,-3);
print_r($admin);


echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";

//type casting in php
$num = "123";
$result = (int)$num;
echo var_dump($result);
echo "<br>";
$num = "123";
echo var_dump($num);


echo "<br>";
$num = 100;
$result = (string)$num;
echo $result;

echo "<br>";
$num = 1;
$result = (bool)$num;
var_dump($result);
//

echo "<br>";
$name="sudhanshu";
function fun(){
    // $name="anul";
    echo "<br>";
    echo "<br>";
    global $name;
    echo $name;
    echo "<br>";
}
echo "<br>";
fun();
echo $name;

include "header.php";
//include gives only warning if the files does not gives any error
require "header.php";

//exclude gives only fatal error if the files does not gives any error
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color:black;
            color:white;
        }
        </style>
</head>
<body >
    <h2>Hello K Yadav </H2>
</body>
</html>

