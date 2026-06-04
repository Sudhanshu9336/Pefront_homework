<?php
include "function.php";
$mess="";
if(isset($_POST['check'])){
    $number = $_POST['number'];
    $operation = $_POST['operation'];
    switch($operation){
        case "palindrome":
            if(checkpalindrome($number)){
                $mess="number is a palindrome number";
            }
            else{
                $mess="number is not a palindrome number";
            }
            break;



     case "armstrong":
        if(checkarmstrong($number)){
            $mess="number is a armstrong number";
        }
        else{
            $mess="number is not a armstrong number";
        }
        break;



     case "even_odd":
        if(checkeven($number)){
            $mess="number is a even number";
        }
        else{
            $mess="number is a odd number";
        }
        break;


    default:
    $mess="please select any operation";

     
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Number</title>
</head>
<body>
    <h2>Check the number</h2>

    <form class="form" method="POST">
    <label>Enter The Nummber</label>
    <input type="number" name="number">
    <br><br>
   
    <h4>Select the option</h4>
    <input type="radio"  name="operation" value="palindrome">
    <label>Palindrome</label>
 
   <input type="radio"  name="operation" value="armstrong">
    <label>Armstrong</label>
   
    <input type="radio"  name="operation" value="even_odd">
    <label>Even_Odd</label>
    <br><br>
    <input type="submit" value="Check" name="check">

</form>
<?php
echo "$number"."$mess";
?>

</body>
</html>