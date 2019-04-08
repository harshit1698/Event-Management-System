<?php
    include"connection.php";
  if(!isset($_GET['flag']))
{
  $flg=0;
}
else
{
  $flg=$_GET['flag'];
}
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet prefetch' href='css/font-awesome.min.css'>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">  
</head>
<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Sing Up</div>
  </div>
  <div class="form">
    <h2>Login to your account</h2>
    <form action="login_check.php" method="POST">
      <input type="text" placeholder="Username" name="email"/>
      <input type="password" placeholder="Password" name="password"/>
      <button>Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form method="post" action="signupcheck.php">
    <label id="err_name">Please enter name</label>
      <input type="text" placeholder="Username" id="name" name="uname" required/> 
     
                      <label id="err_name">Please enter event name</label>
        <input type="text" placeholder="Event Name" id="event" name="event" /> 
         <label id="err_email">Please enter email</label>
      <input type="email" placeholder="Email Address" id="email" name="email" placeholder="<?php if($flg==2)
               {echo 'Username Already Exist';}
                else
                {
                  echo 'Email';
                }?>" required />
             

        <input type="password" id="password" name="password" placeholder="password" />          
        <label id="err_pass">Please enter password</label>
       <input type="password" id="cpassword" name="cpassword" placeholder="confirmPassword" />
       <label id="err_cpass">Please enter confirm password</label>
       <label id="conf_pass">Password don't match.</label>

       <input type="text" id="num" placeholder="Enter your number" name="number" maxlength="10" />
        <label id="err_num">Please enter number</label>
      <button id="signup" type="submit">Register</button>
    </form>
  </div>
  
</div>
<script src='js/jquery.min.js'></script>
<script src='js/jquery.validate.min.js'></script>

    <script src="js/index.js"></script>

<script>
  $(document).ready(function (){
      $("#err_name").hide();
      $("#err_email").hide();
      $("#err_pass").hide();
      $("#err_cpass").hide();
      $("#err_num").hide();
      $("#conf_pass").hide();
      $("#name").blur(function (){
        if ($("#name").val()=="") {
          $("#err_name").show();
        }
        else{
          $("#err_name").hide();
        }
      });
      $("#email").blur(function (){
        if ($("#email").val()=="") {

          $("#err_email").show();
        }
        else{
          $("#err_email").hide();
        }
        
      
      });
      
      $("#password").blur(function (){
        if ($("#password").val()=="") {
          $("#err_pass").show();
        }
        else{
          $("#err_pass").hide();
        }
      });
      $("#cpassword").blur(function (){
        if ($("#cpassword").val()=="") {
          $("#err_cpass").show();
        }
        else{
          $("#err_cpass").hide();
        }
        if ($("#cpassword").val()==$("#password").val()) {
          $("#conf_pass").hide();

        }
        else{
          $("#conf_pass").show();
        }
      });
      $("#num").keyup(function (e) {
       //if the letter is not digit then display error and don't type anything
       if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          //display error message
          document.getElementById("num").value = "";
          $("#err_num").show();
        }
        else{
          $("#err_num").hide();
        }
      });      
  });

</script>



</body>
</html>
