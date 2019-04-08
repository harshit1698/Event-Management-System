<?php
session_start();$x=$_SESSION['admin'];
     /*  if(empty($_SESSION['admin']))
       header("location:login.php");
if(isset($_SESSION['admin']))
{ */
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
						<div class="col-sm-12 page-heading">
							<div class="page-heading-content">
								<h3>Notifications</h3>
								
							</div>
						</div>
						<div class="col-sm-12">
							
								<div class="ibox">
									<div class="ibox-heading">
										<h3>Add New Msg For Participants..</h3>

									</div>
									<form action="add2.php" method="post">
								<div class="row" style="margin:10px 0px;">
					<label class="col-sm-2 control-label" style="margin-top:10px; ">Message:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="msg" value="<?php if(isset($_GET['id'])){echo $title;}?>" required>
					</div>
				</div>	
			<div class="row" style="margin:10px 0px;">
					
					<div class="col-sm-offset-5 col-sm-7">
						<input type="submit" value="Add" />
						
					</div>
				</div>
				<input type="hidden" name="sesion" value="<?php  echo $x; ?>">
			</form >
									<hr />
									
									<div class="ibox-table">
										<table class="table table-hover">
											<tr>
												<th>Id</th>
												<th>Message</th>												
												<th>Event Name</th>														
											</tr>
										<?php
											
											$s="select e_id from admin where id='$x'";
											$res=mysql_query($s);
											$arr1=mysql_fetch_array($res);
											$eid=$arr1['e_id'];
											$sql_uvideo="select * from noti where e_id='$eid'";
											$res_uvideo=mysql_query($sql_uvideo);
											while ($arr=mysql_fetch_array($res_uvideo))
												{																								 
										?>	
											<tr>
												<td><?php echo $arr['n_id'];?></td>
												<td><?php echo $arr['msg'];?></td>
												<?php $q="select * from event where e_id='$eid'";
													$re=mysql_query($q);
											$arr2=mysql_fetch_array($re);
												?>

												<td><?php echo $arr2['name'];?></td>
												
										
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
</script>
<?php
//}
?>
</html>