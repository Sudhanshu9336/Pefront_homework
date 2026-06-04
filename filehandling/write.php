<?php
$file=fopen("notes.txt","w");
fwrite($file,  "Hello rinku sir");
fclose($file);
echo "data saved in file";
?>