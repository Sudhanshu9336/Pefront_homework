<?php
$file=fopen("notes.txt","a");
fwrite($file,"\nI am working at pe front office");
fclose($file);
echo "data added";
?>