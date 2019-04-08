<?php
$conn=mysql_connect("localhost","root","");
if ($conn) 
{
mysql_select_db("ems_new",$conn);
}
else
{
	echo "error in connection";
}
?>