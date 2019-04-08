<?php 
$con=mysql_connect("localhost","root");
	mysql_select_db("ems");
$b=false;
if(isset($_POST['dept'])&&isset($_POST['type']))
{
	$b=true;
	$d=$_POST['dept'];
	$t=$_POST['type'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function x()
		{
			location.reload();

		}
	</script>
</head>
<body>
	<form action="x1.php" method="POST">
		<?php 
		$r=mysql_query("select * from noti");
		if((mysql_num_rows($r)>0))
		{
		?>
		<marquee behavior="scroll" direction="" style="height:25px" bgcolor="red">
			<?php while($q=mysql_fetch_array($r))
			{?>
				<?php
					$val=$q['e_id'];
					$r2=mysql_query("select name from event where e_id='$val'");
					$q1=mysql_fetch_array($r2);
				 ?>
			<a href="x2.php"><font size="5px" color="white"><?php echo $q1['name']." ".$q['msg']; ?>&nbsp;&nbsp;</font></a>
		<?php } ?>
		</marquee>

		<?php }
		?>

	<select name="dept">
		<option value="mech" onclick="x();">MEch</option>
		<option value="Civil" onclick="x();">Civil</option>
		<option value="Environment" onclick="x();">Environment</option>
	</select>
	<br>
		<select name="type"> 
			<option value="tech">Tech</option>
			<option value="non tech">Non Tech</option>
		</select>
	<br>
		<input type="submit" value="Ok">
		<?php if ($b) {
			echo "<br> Department --- ".$d."<br> Type ---- ".$t;
 }?>
</form>

<?php

	
	if($b)
	{
	$res=mysql_query("select * from event where dept='$d'and type='$t'");

	while ($arr=mysql_fetch_array($res)) {
		echo "Event Name ".$arr['name'];
		# code...
	}

	}
 ?>

</body>
</html>