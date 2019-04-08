<?php
$conn=mysql_connect("localhost","root","");
if ($conn) 
{
mysql_select_db("ems",$conn);
}
else
{
	echo "error in connection";
}
?>
