<?php
include "connection.php";
$msg=$_POST['msg'];
$x=$_POST['sesion'];
											$s="select e_id from admin where id='$x'";
											$res=mysql_query($s);
											$arr1=mysql_fetch_array($res);
											$eid=$arr1['e_id'];

								
								$sql="INSERT INTO `ems_new`.`noti` (`n_id`, `e_id`, `msg`) VALUES (NULL, '$eid', '$msg')";
									echo $sql;
									$result=mysql_query($sql);
									echo $result;
									if($result)
									{
										header("location:noti.php");
									echo $sql;
									}
									else{
										echo "error in uploading";
									}
								
?>
