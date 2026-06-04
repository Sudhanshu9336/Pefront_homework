<?php
$file=fopen("notes.txt","r");
echo fread($file, filesize("notes.txt"));
fclose($file);
?>