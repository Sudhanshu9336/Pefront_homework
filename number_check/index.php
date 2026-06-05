<?php
error_reporting(E_ERROR);
include "functions.php";
$message = "";

if(isset($_POST['check']))
{
    $number = $_POST['number'];
    $operation = isset($_POST['operation']) ? $_POST['operation']: "" ;

    switch($operation)
    {
 case "prime":

            if(checkPrime($number))
          {
         $message = "Number is a prima number;";
            }
            else
            {
          $message = "Number is not a prima number;";
            }

        break;

 case "palindrome":

            if(checkPalindrome($number))
           {
        $message = "Number is a palndrome number;";
   }
            else
            {
              $message = "Number is not a palndrome number;";
            }

        break;

 case "armstrong":

     if(checkArmstrong($number))
            {
         $message = "Number is a Armstrong number;";
            }
            else
            {
               $message = "Number is not a Armstrong number;";
            }
        break;
        default:
   $message = "Please Select Any Option";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Number Checker</title>
</head>
<body>
<h2>Number Check using Switch Case</h2>

<form method="POST">

    <label>Enter Number</label>

    <br><br>
    <input type="number" name="number" required>
    

    <br><br>

    <label>Select Operation</label>
    <br><br>

    <select name="operation">
        <!-- <option >Select</option> -->
          <option value="">Select</option>
        <option value="prime">  Prime Number </option>
        <option value="palindrome"> Palindrome Number </option>
        <option value="armstrong"> Armstrong Number </option>
    </select>


    <br><br>

    <button type="submit"  name="check"> Check </button>

</form>

<br>
<h3>

    <?php echo $_POST['number'] . ": " . $message; ?>
</h3>

</body>
</html>