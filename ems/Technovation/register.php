<?php
       $fname = $_POST['fnm'];
       $lname = $_POST['lnm'];
       $contact = $_POST['contact'];
       $email = $_POST['email'];
       $dept = $_POST['dept'];
       $event = $_POST['event'];
       $gender = $_POST['radio'];
       
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
    
    $con = mysql_connect("localhost","root","");
    mysql_select_db("ems_new",$con);

    $r1=mysql_query("select * from event where name='$event'");
        $a=mysql_fetch_array($r1);
        $e=$a['e_id'];

    $sql = "INSERT INTO register_details(fname,lname,e_id,gender,email,contact) VALUES('$fname','$lname','$e','$gender','$email','$contact')" ;
    $res = mysql_query($sql , $con);
    if($res)
    {
        
        header("location:xy.php?status='Done'");
    }
    else{
        header("location:xy.php?status='Fail'");
    }
    // $query1 = "select * from stu_info";
    // $res = mysql_query($query1,$con);
    // $num = mysql_numrows($res);
    // echo "$num";
    // print"<table border size=1 > 
    //     <tr><th>FirstName</th>
    //     <th>LastName</th>
    //     <th>Email</th>
    //     <th>Contact</th>
    //     <th>College</th>
    //     <th>Teamname</th>
    //     <th>Gender</th>
    //     </tr>";
    //     $i=0;
    //     while($i<$num)
    //     {
    //         $fname = mysql_result($res,$i,"fname");
    //         $lname = mysql_result($res,$i,"lname");
    //         $email = mysql_result($res,$i,"email");
    //         $contact = mysql_result($res,$i,"contact");
    //         $clgname = mysql_result($res,$i,"clgname");
    //         $teamname = mysql_result($res,$i,"teamname");
    //         $gender = mysql_result($res,$i,"gender");
    //         echo"<tr><td>$fname</td>
    //         <td>$lname</td>
    //         <td>$email</td>
    //         <td>$contact</td>
    //         <td>$clgname</td>
    //         <td>$teamname</td>
    //         <td>$gender</td>
    //         </tr>";
    //         $i++;
    //     }   
    //     print"</table>";
    ?>
</body>
</html>