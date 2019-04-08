<?php
include "connection.php";

$id=$_GET['id'];
											$s="DELETE FROM `ems_new`.`register_details` WHERE `register_details`.`id` =$id ";
											$res=mysql_query($s);
																					
									if($res)
									{
										header("location:upload.php");
									echo $s;
									}
									else{
										echo "error in uploading";
									}
								
?>
