<!-- <?php
$file=fopen("notes.txt","r");
echo fread($file, filesize("notes.txt"));
fclose($file);
?> -->

<!DOCTYPE html>
<html>
<head>
    <title>Upload File</title>
</head>
<body>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="myfile">
    <button type="submit" name="upload">Upload</button>
</form>

</body>
</html>
<?php

if(isset($_POST['upload']))
{
    $filename = $_FILES['myfile']['name'];
    $tempname = $_FILES['myfile']['tmp_name'];

    move_uploaded_file($tempname, $filename);

    echo "<h3>File Content:</h3>";

    $file = fopen($filename,"r");

    echo "<pre>";
    echo fread($file, filesize($filename));
    echo "</pre>";
    fclose($file);
}
?>