
<?php
$conn=mysql_connect("localhost","root","");
if ($conn) 
{
mysql_select_db("ems_new",$conn);



// echo "Yop";
}
else
{
	echo "error in connection";
}
?>
  <?php
if(isset($_GET['status']))
{
  $st=$_GET['status'];
  
  echo "<h1>Registration Status: $st </h1>";



  
}

  ?>


        <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
    /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: ;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: white;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
  background-color: #4CAF50;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #4CAF50;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

</style>
</head>
<body>

<form action="register.php" method="post">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    
    <label for="Department"><b>Select Department</b></label>
    <br>
    &nbsp;
    <div class="custom-select" style="width:200px;">
                <select name="dept">
                  <option value="0">Select Department</option>
                  <option value="tech">Technical</option>
                  <option value="non tech">Non Technical</option>
                  <option value="sports">Sports</option>
                  </select>
              </div>
              <br>
              <label for="Event"><b>Select Event</b></label>
    <br>
    &nbsp;
    <div class="custom-select" style="width:200px;">
                <select name="event">
                  <option value="0">Select Event</option>
                  <?php 
        
        $res=mysql_query("select * from event");
        while($arr=mysql_fetch_array($res))
        {

        ?>
        <option value="<?php echo $arr['name']; ?>"><?php echo $arr['name']; ?></option>
        <?php }?>

                  <!-- <option value="0">Select Event</option> -->
                               
                 
                </select>
              </div>
              <br>
          <script>
          var x, i, j, selElmnt, a, b, c;
          /*look for any elements with the class "custom-select":*/
          x = document.getElementsByClassName("custom-select");
          for (i = 0; i < x.length; i++) {
            selElmnt = x[i].getElementsByTagName("select")[0];
            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);
            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");
            for (j = 1; j < selElmnt.length; j++) {
              /*for each option in the original select element,
              create a new DIV that will act as an option item:*/
              c = document.createElement("DIV");
              c.innerHTML = selElmnt.options[j].innerHTML;
              c.addEventListener("click", function(e) {
                  /*when an item is clicked, update the original select box,
                  and the selected item:*/
                  var y, i, k, s, h;
                  s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                  h = this.parentNode.previousSibling;
                  for (i = 0; i < s.length; i++) {
                    if (s.options[i].innerHTML == this.innerHTML) {
                      s.selectedIndex = i;
                      h.innerHTML = this.innerHTML;
                      y = this.parentNode.getElementsByClassName("same-as-selected");
                      for (k = 0; k < y.length; k++) {
                        y[k].removeAttribute("class");
                      }
                      this.setAttribute("class", "same-as-selected");
                      break;
                    }
                  }
                  h.click();
              });
              b.appendChild(c);
            }
            x[i].appendChild(b);
            a.addEventListener("click", function(e) {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
              });
          }
          function closeAllSelect(elmnt) {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            for (i = 0; i < y.length; i++) {
              if (elmnt == y[i]) {
                arrNo.push(i)
              } else {
                y[i].classList.remove("select-arrow-active");
              }
            }
            for (i = 0; i < x.length; i++) {
              if (arrNo.indexOf(i)) {
                x[i].classList.add("select-hide");
              }
            }
          }
          /*if the user clicks anywhere outside the select box,
          then close all select boxes:*/
          document.addEventListener("click", closeAllSelect);
          </script>
        <label for="First Name"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fnm" required>
    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lnm" required>
    <br>
    <label for="email"><b>Gender</b></label>
    <label class="container">Male
  <input type="radio" checked="checked" name="radio" value="male">
  <span class="checkmark"></span>
</label>
<label class="container">Female
  <input type="radio" checked="checked" name="radio" value="female">
  <span class="checkmark"></span>
</label><br><br>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="email"><b>Contact No:</b></label>
    <input type="text" placeholder="Enter contact No" name="contact" required>
    
    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  
</form>



</body>
</html>
