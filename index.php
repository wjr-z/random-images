<?php
$img=file('img.txt');
$url=array_rand($img,1);
header('Content-Type: image/png');
echo(file_get_contents($img[$url]));
exit;
?>