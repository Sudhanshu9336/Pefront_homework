<?php
$conn = mysqli_connect("localhost", "root", "", "employees");
if(!$conn)
{
    die("Connection Failed");
}
else
{
    echo "Database Connected Successfully";
}

?>