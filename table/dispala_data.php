<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>S.no</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>sudhanshu</td>
            <td>sudhanshu@gmail.com</td>
        </tr><tr>
            <td>2</td>
            <td>khushbu</td>
            <td>khushbu@gamil.com</td>
        </tr><tr>
            <td>3</td>
            <td>Upma Gupta</td>
            <td>upma@gmail.com</td>
        </tr>
   
</table>

</body>
</html>
<?php

$user=[
    [1,"sudhanshu gupta","sudhanshu@gmail.com"],
    [2,"mayank yadav","mayankyadav@gmail.com"],
    [3,"upma gupta","upmagupta@gmail.com"]
];

// echo "<br>";
echo "<table border='1>";
for($i=0;$i<count($user);$i++){
    echo "<tr>";
    for($j=0;$j<count($user[$i]);$j++){
   echo "<td>";
      echo $user[$i][$j];
      echo "</td>";
      echo "<br>";
    }
    echo "</tr>";
}
echo "</table>";




?>