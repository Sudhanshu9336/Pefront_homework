
<?php

// echo "<pre>";
// print_r($_POST);
// DIE();

// $error="";
if(isset($_POST['save'])){
     $message = trim($_POST['message']);
    
     if(empty($message)){
         $error= "Please Enter Message";
     }

     else{
         $file = fopen("notes.txt","a");
         fwrite($file,$message."\n");
         fclose($file);
         echo "message added";
     }
}
?>




<!DOCTYPE html>
<html>
<head> 

    <title>Textarea Save</title>
</head>
<body>

<form method="POST">

    <textarea name="message" rows="5"
              cols="40"></textarea>

    <br><br>
    <?php 
if(isset($error)){
    echo "<p class='error'>$error</p>"; 
}
?>
    <button type="submit" name="save"> Save
    </button>

</form>

</body>
<style>
    .error{
        color:red;
        font-size:12px;
    }
    </style>
</html>