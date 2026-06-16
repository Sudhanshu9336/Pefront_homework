<?php
if(isset($_POST['button'])){
$file=fopen("notes.txt","a");
fwrite($file,"\nI am working in gurgaon delhi");
fclose($file);
echo "data added";
// header("Location: ".$_SERVER['PHP_SELF']);
    exit();
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
    <form action="" method="post">
        <button name="button">want to add</button>
</form>
</body>
</html>