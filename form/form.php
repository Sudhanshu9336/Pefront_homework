<?php

$conn = mysqli_connect("localhost","root","","homework");

if(!$conn)
{
    die("Connection Failed");
}

if(isset($_POST['submit']))
{
    $n = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['phone'];
    $s = $_POST['salary'];
    $sql = "INSERT INTO form(name,email,phone,salary)
            VALUES('$n','$e','$p','$s')";
    $query = mysqli_query($conn,$sql);

    if($query)
    {
        echo "Successfully Added";
    }
    else
    {
        echo "Error : " ;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form making</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2> add employee</h2>
<form method="post" action="form.php">
    <div class="row">
        <div class="group">
            <label>Name</label>
            <input type="text" name="name" required> 
        </div>
        <div class="group">
            <label>Email</label>
            <input type="text" name="email"> 
        </div>

</div>
<div class="row">
        <div class="group">
            <label>Phone number</label>
            <input type="text" name="phone"> 
        </div>
        <div class="group">
            <label>Salary</label>
            <input type="number" name="salary" value="50000">
        </div>
</div>
<button type="submit" name="submit">Click me</button>
</form>


</body>
</html>
