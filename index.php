<?php
$img=file('img.txt');
$url=array_rand($img);
echo $img[$url];
?>