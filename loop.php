<?php
for($i=0; $i<10; $i++){
    echo "The value of i is: " . $i . "<br>";
}


$j=0;
while($j<10){
    echo "the value of j is:".$j."<br>:";
    $j++;
}
?> 

<?php

$i = 1;
do
{
    echo $i;
    echo "<br>";
    $i++;
}
while($i <= 5);

?>




<?php
$names = array("Sudhanshu","Rahul","Aman");

foreach($names as $n)
{
    echo $n."<br>";
}

?>


<?php

$student = array(
"name"=>"Sudhanshu",
"course"=>"BTech",
"city"=>"Noida"
);

foreach($student as $key=>$value)
{
    echo $key." ".$value."<br>";
}

?>