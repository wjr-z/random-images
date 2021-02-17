<?php
$img=explode("\n",file_get_contents('img.txt'));
$i=rand(0,count($ing));
$rand_img=str_re($img[$i]);
$url='https://tvax3.sinaimg.cn/large/'.$rand_img.'.jpg';
$result=array("code"=>"200","imgurl"=>"$url");
header("Location:".$result['imgurl']);
function str_re($str){
  $str = str_replace(' ', "", $str);
  $str = str_replace("\n", "", $str);
  $str = str_replace("\t", "", $str);
  $str = str_replace("\r", "", $str);
  return $str;
}
?>