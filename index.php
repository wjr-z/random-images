<?php
function str_re($str){
    $str = str_replace(' ', "", $str);
    $str = str_replace("\n", "", $str);
    $str = str_replace("\t", "", $str);
    $str = str_replace("\r", "", $str);
    return $str;
}
$img=explode("\n",file_get_contents('img.txt'));
$i=rand(0,count($ing));
$rand_img=str_re($img[$i]);
$url='https://tvax3.sinaimg.cn/large/'.$rand_img.'.jpg';
$result=array("code"=>"200","imgurl"=>"$url");
$type=$_GET['return'];
switch ($type)
{
	//Json格式解析
	case 'json':
	$imageInfo = getimagesize($url);
	$result['width']="$imageInfo[0]";
	$result['height']="$imageInfo[1]";
	header('Content-type:text/json');
	echo json_encode($result);
	break;
	//IMG
	default:
	header("Location:".$result['imgurl']);
	break;
}
?>