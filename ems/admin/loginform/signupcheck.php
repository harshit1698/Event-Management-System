<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("ems");
$name=$_POST['uname'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phn=$_POST['number'];
$phone=(int)$phn;
$e=$_POST['event'];
echo $phone;


$rest=mysql_query("select e_id from event where name='$e'");
$arr=mysql_fetch_array($rest);
$event=$arr['e_id'];

$q="INSERT INTO `ems`.`admin` (`id`, `name`, `email`, `pwd`,`e_id`,`contact no`) VALUES (' ', '$name', '$email', '$pass','$event', '$phone')";

$r=mysql_query($q);
echo $r;
if ($r) {
	echo "successfully";
	// header("location:index.php");
	
}
else{
	echo "Not successfully";
}
?>