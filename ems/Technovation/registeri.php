
<!DOCTYPE html>
<!--
<html>
    <head>
        <title>Register Page</title>
        
    </head>
    <body >
            <p align="right"><a href="login1.php">Login As a Admin...</a></p>

        <div align="center">
                <h2 align="center">Event Selection</h2>
            <form action="register1.html" >
                <table border="0" align="center">
                    <tr>
                        <td >Select Department*&nbsp;: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;</td>
                        
                        <td><select style="height:22px;width: 200px;">
                            <option>Select Department</option>
                            <option>TECH</option>
                            <option>NON TECH</option>
                            <option>WorkShop</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Select Event* &nbsp;:</td>
                        <td><select style="height:22px;width: 200px;">
                            <option>Select Event</option>
                            <option>C kida</option>
                            <option>Code War in java</option>
                            <option>Static Web Page</option>
                        </select></td>
                    </tr>
                    <tr>
                            <td>Select Team Members* &nbsp;:</td>
                            <td><select  style="height:22px;width: 200px;">
                                <option>Select Team Member</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select></td>
                        </tr>
                    <tr>
                            <td>Enter Fees &nbsp;: </td>
                            <td><input type="text" value="" name="fees" style="height:22px;width: 200px;"/></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Next" /></td>
                    </tr>

                </table>
            </form>
            
        </div>
    </body>
</html>
-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    /*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: #4CAF50;
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
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
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
  color: #4CAF50;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<form action="/action_page.php">
  <div class="container">
    <h1>Event Registration</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Select Type</b></label>
    <br>
    &nbsp;
    <div class="custom-select" style="width:200px;">
            <select name="type">
              <option value="0">Select Type:</option>
              <option value="tech">Technical</option>
              <option value="non tech">Non Technical</option>
              <option value="sports">Sports</option>
             
            </select>
          </div>
          <br>
          <label for="email"><b>Select Event</b></label>
          <br>
          &nbsp;
        
          <div class="custom-select" style="width:200px;">
                <select name="event">
                  <option value="0">Select Event</option>
                  <?php
$conn=mysql_connect("localhost","root","");
if ($conn) 
{
mysql_select_db("ems_new",$conn);
echo "<h1>Hello World</h1>";
}
else
{
	echo "error in connection";
}
?>  
                  <option value="sports">Sports</option>
                 
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
          

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>

</body>
</html>