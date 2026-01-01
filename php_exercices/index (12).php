<?php
$file = fopen("data.txt", "a+");
fwrite($file, "مرحبا\n");
rewind($file);
echo nl2br(fread($file, filesize("data.txt")));
fclose($file);
?>
