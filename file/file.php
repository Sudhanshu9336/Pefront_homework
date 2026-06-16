
<?php
// print_r($_FILES);
// if($_FILES) {
//     echo "<br>";
//         echo "files uploaded sussfully";
//     }
if(isset($_POST['upaload'])){
    echo "good";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="file.php" method="post" enctype="multipart/form-data"> 
        <input type="file" name="file" id="file" value="upload file">
        <br><br>
        <button name="upaload" >Upload</upload>
        
</form>

</body>
</html>