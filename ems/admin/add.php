<?php
include "connection.php";
$fm=$_POST['fnm'];
$lm=$_POST['lnm'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$cno=$_POST['c_no'];
$x=$_POST['sesion'];

$s="select * from admin where id='$x'";
$r1=mysql_query($s);
$e1=mysql_fetch_array($r1);
$eid=$e1['e_id'];

								//	$sql="INSERT INTO `pts`.`bus` (`b_no`, `source_city`, `destination_city`, `b_nm`, `price`, `time`) VALUES ('1090', '2', '10', 'gujarnagari', '200', '7:00pm');";
									
									$sql="INSERT INTO `ems_new`.`register_details` (`id`, `fname`, `lname`, `e_id`, `gender`, `email`, `contact`) VALUES (NULL, '$fm', '$lm', '$eid', '$gender', '$email', '$cno')";

									echo $sql;
									$result=mysql_query($sql);
									echo $result;
									if($result)
									{
										header("location:upload.php");
								//	$message="Video Uploaded Successfully!";
								//	echo $message;
									echo $sql;
									}
									else{
										echo "error in uploading";
									}
								
?>
