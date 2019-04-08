<?php
session_start();
       if(empty($_SESSION['admin']))
       header("location:login.php");
if(isset($_SESSION['admin']))
{
	$x=$_SESSION['admin'];
include("connection.php");


?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section id="wrapper">
	<div class="row">
			<div class="col-sm-2 dashboard">
				<div class="row">
					<div class="col-sm-12">
						<a href="upload.php"><h2 style="color: white;">Technovation</h2></a>
					</div>
					<nav class="col-sm-12">
						
							
							<ul style="text-align: center;">
							<li ><a href="upload.php">Participants</a></li>
							<li><a href="noti.php">Notification</a></li>
						</ul>	
					</nav>
				</div>
			</div>
			<div class="col-sm-10 content">
				<div class="wrapper-top">
					<div class="row">
						<div class="col-sm-10">
							<div class="top-heading">
								<h3>Welcome to Admin Panel</h3>
							</div>
						</div>
						<div class="col-sm-2">
							<div class="logout">
								<i class="fa fa-sign-out"></i><a href="./loginform/logout.php">Log Out</a>
							</div>
						</div>
                      <!-- <?php if($nik==0)
                        { ?>
						<div class="col-sm-12 page-heading">
							<div class="page-heading-content">
								<h3>Videos</h3>
								<p>Home / <a href="#"> Videos </a></p>
							</div>
						</div>
		<?php } ?>-->
						<div class="col-sm-12">
							
								<div class="ibox">
									<div class="ibox-heading">
										<h3>Participants Details</h3>
									</div>
									<hr/>
									<div class="col-sm-10" style="background-color: #fff;padding: 20px 0; margin-top: 10px;">
	
		<div class="upload-form ibox-content" style="padding: 20px;">
												<form action="add.php" method="post">
								<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">First Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="fnm" value="<?php if(isset($_GET['id'])){echo $title;}?>" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Last Name:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="lnm" value="<?php if(isset($_GET['id'])){echo $title;}?>" required>
					</div>
				</div>
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Gender:</label>
					<div class="col-sm-10">
						<select class="form-control" name="gender">
							<option value="male">Male</option>
							<option value="femail">Female</option>
						</select>
						</div>
				</div>	
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Email:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="email" value="<?php if(isset($_GET['id'])){echo $title;}?>" required>
					</div>
				</div>	
				<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Contact no:</label>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="c_no" value="<?php if(isset($_GET['id'])){echo $title;}?>" required>
					</div>
				</div>	
			<div class="row" style="margin:10px 0px;">
					
					<div class="col-sm-offset-5 col-sm-7">
						<input type="submit" value="Add" />
						
					</div>
				</div>
				<input type="hidden" name="sesion" value="<?php echo $x; ?>">
			</form >
		</div>
	</div>

	
					
						
									<div class="ibox-table">
										<table class="table table-hover">
											<tr>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Gender</th>
												<th>Email</th>
												<th>Contact</th>
											
												<th>Delete</th>
																							
											</tr>
											
										<?php
											$s1="SELECT * FROM `register_details` WHERE `e_id`=$x ";
											//echo $s1;
											$data=mysql_query($s1);
											//echo $data;
											while($arr=mysql_fetch_array($data)) {		
										?>	
										<tr>							
												<td><?php echo $arr[1];?></td>
												<td><?php echo $arr[2];?></td>
												<td><?php echo $arr['gender'];?></td>
												<td><?php echo $arr[5];?></td>
												<td><?php echo $arr[6];?></td>
											
												<td><a href="del.php?id=<?=$arr[0]?>"onclick="return confirm('Are you sure you want to delete?');"> <span class="fa fa-trash" style="font-size: 27px;color: #c01417;"></a></td>
													</tr>
											<?php
												}
										?>
									
										</table>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</div>
	</div>

</section>
</body>
<script src="js/jquery.js"></script>
<script>
	$("#dropdown").hover(function(){
		$(".dropdown").css("display","block");
		$("#dropdown").css("background-color","rgba(10,10,10,0.7)");
	});
	$(".dropdown").hover(function(){
		$(".dropdown").css("display","block");
	});
	$("#dropdown").mouseleave(function(){
		$(".dropdown").css("display","none");
	});
	$(".dropdown").mouseleave(function(){
		$(".dropdown").css("display","none");
	});
</script><?php
}
?>
</html>