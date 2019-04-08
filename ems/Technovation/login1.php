<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
            
form {
  border: 3px solid #f1f1f1;
  margin-right: 411px;
    margin-left: 411px;
    margin-top: 41px;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


button {
  background-color:green; 
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


img.avatar {
  width: 20%;
  border-radius: 50%;
}


.container {
  padding: 16px;
}


span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
        </style>
    </head>

<body>
<form action="" method="POST">
        <div class="imgcontainer">
          <img src="../Aashlesha/images/tech.png" alt="Avatar" class="avatar">
        </div>
      
        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="uname" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" name="submit" >Login</button
          <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
        </div>
      
      </form>
<?php
if(isset($_POST['submit']))
{
    $uname=$_POST['uname'];
$password = $_POST['psw'];
$query = "SELECT * FROM `login_info` WHERE uname='$uname' && password='$password'";
$res = mysqli_query($con,$query);
$row = mysqli_num_rows($res);
if($row==1)
{
    header('location:login2.php');
}
else{
    echo " Login Failed";
}
}
?>
</body>
</html>