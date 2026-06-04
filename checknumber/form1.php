
<?php
include "function.php";
$mess="";

if(isset($_POST['check'])){
    $num=$_POST['number'];
    $operation=isset($_POST['operation'])?$_POST['operation']:"";
    switch($operation){
        case "palindrome":
            if(checkpalindrome($num)){
                $mess="number is a palindrome number";
            }
            else{
                $mess="number is not a palindrome number";
            }
            break;



     case "arm":
        if(checkarmstrong($num)){
            $mess="number is a armstrong number";
        }
        else{
            $mess="number is not a armstrong number";
        }
        break;



     case "even_odd":
        if(checkeven($num)){
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
    <title>form</title>
</head>
<body>
    <h2>Number Check using Switch Case </h2>
        <form class="form" method="POST">
            <label for="num">Enter the Number</label>
            <input type="text" name="number" id="num">
            <br><br>
            <select name="operation">
                <option value="">select options</option>
                <option value="palindrome" >palindrome</option>
                <option value="arm">Armstrong</option>
                <option value="even_odd">Even/Odd</option>
       </select>
       <br>
       <br>
       <input type="submit" value="check" name="check"></input>
</form>


   <h3>
    <?php echo $_POST['number'] . ": " . $mess; ?>
</h3>

</body>
</html>