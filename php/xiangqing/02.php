<?php
header('content-type:text/html;charset=utf-8;');
$un = $_REQUEST['un'];
$price = $_REQUEST['price'];
$thing = $_REQUEST['thing'];
$num1 = $_REQUEST['num'];
$img = $_REQUEST['img'];
// $conn = mysqli_connect('localhost','root','root','taobao');
include './xiangqing/conect.php';

$sql2 = "SELECT * FROM `gwc` WHERE `username`='$un'";

$res2 = mysqli_query($conn,$sql2);        
$row = mysqli_fetch_assoc($res2);
$num2 = $row['num2'];
$num = $num1+$num2;

$sql = "UPDATE `gwc` SET `price2`='$price', `thing2`='$thing',`num2`='$num',`img2`='$img' WHERE `username`='$un'";
$res = mysqli_query($conn,$sql);

mysqli_close($conn);
if($res){
	echo json_encode(array("code"=>1));
}else{
	echo json_encode(array("code"=>0));
}
?>