<?php
$uname=$_POST['uname'];
$password = $_POST['psw'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<?php

 $con=mysql_connect("localhost","root","");
 mysql_select_db("logintech");
 
 $res = mysql_query("SELECT * FROM `login_info` WHERE uname='$uname' && password='$password'",$con);
/*while($arr=mysql_fetch_array($res))
{
   
    echo $arr['uname'];
    echo $arr['password'];
}
*/
$arr = mysql_fetch_array($res);

$username = $arr['uname'];
$paswd = $arr['password'];

if($uname == $username && $password == $paswd)
{
    echo "You have Successfully login";
    
}
else
{
    header('Location : login.html');
}


 

?>
</body>
</html>