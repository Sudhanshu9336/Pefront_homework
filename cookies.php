<?php
// $fruit="apple";
// setcookie("fruit","apple",time()+(8600));
// if(isset($_COOKIE)){
//  print_r($_COOKIE);
//  echo "hi";
//  echo "<br>";
//  echo $_COOKIE['fruit'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <form action="" method="post">
 <input type="text" name="user" placeholder="enter the name">
 <br>
 <button name="button" value="set" >set cookies</button>
 <br><br>

 <button name="button" value="display">Display cookies</button>
 <br><br>

 <button name="button" value="delete" >Delete cookies</button>

</form>

</body>
</html>

<?php
if(isset($_POST['button'])){

if($_POST['button']=="set"){
    $val=$_POST['user'];
    setcookie("user",$val,time()+(3600));
    echo "cookie is set";
}

if($_POST['button']=="display"){
     if(isset($_COOKIE['user'])){
        echo $_COOKIE['user'];
     }
}

if($_POST['button']=="delete")
{
    if(isset($_COOKIE['user']))
    { setcookie("user","",-1);
        echo "Cookie Deleted";
    }
}

}


?>