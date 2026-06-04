<?php
$employee= array(
    array("sudhanshu","it",2300),
    array("ravi","mechanical",5000),
    array("shubham","civil",60000)
    );

    echo $employee[0][2];
    echo $employee[1][0];
    echo "<br>";
   for($i=0;$i<count($employee);$i++){
   echo $employee[$i][0];
   echo "<br>";
   }
?>



<?php 
$matrix=array(
    array(1,2,3,4),
    array(5,6,7,8),
    array(9,10,11,12)
);
echo $matrix[2][3];
for($i=0;$i<count($matrix);$i++){
    echo "<br>";
    for($j=0;$j<count($matrix[$i]);$j++){
        echo $matrix[$i][$j];
        echo " ";
    }

}
?>