<?php
//encode array to json

// $user=["name"=>"anil","age"=>"38","email"=>"anil432@gmail.com"];
// $usejson=json_encode($user);
// print_r($user);
// print_r($usejson);




//decode json to array
$data='{"name":"anil","age":"38","email":"anil432@gmail.com"}';
$arraymai=json_decode($data,true);
print_r($arraymai);
echo "<br>";





date_default_timezone_set("Asia/kolkata");
echo date("D M Y");
echo "<br>";
echo date("d m y");
echo "<br>";
echo date("h:i:sa");

//string to array
echo"<br>";
$user="my name is sudhanshu gupta working at pe front office";
print_r(explode("s",$user));
//jaha jaha s rahega waha se break ho jayega


//  array to string using impload
echo"<br>";
$array=["my","name","is","sudhanshu","gupta"];
print_r(implode(" ",$array));
//jaha jaha separator aayega wahi se yeh gap ho jayega;


echo"<br>";
$new =["hi"=>"vishal","surname"=>"yadav"];
$mergi=(array_merge($array,$new));
print_r($mergi);




?>