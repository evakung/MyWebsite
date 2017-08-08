<!DOCTYPE HTML>

<html lang="en">


<head>
      <link rel="stylesheet" type="text/css" href="styles/menubar.css">
      <link rel="stylesheet" type="text/css" href="styles/home.css">
      <link rel="stylesheet" type="text/css" href="styles/background.css">
      <link rel="stylesheet" type="text/css" href="styles/display_block.css">
      <meta charset="UTF-8">

      <title> Log In  </title>
</head>


<body>

<div class="topnav">
      <a class="active" href="home.html">Home</a>
      <a href="about.html">About</a>
      <a href="resume.html">Resume</a>
      <a href="login.php">User Login</a>
</div>

<div class="display_block" id="display_block">


<?php
     /** if(!isset($_SESSION["Username"])){
            header("Location:login.php");
      }*/
/*

<?php
$con=mysqli_connect("localhost","evakun5","Ek101092","evakun5_addresses");
// Check connection_aborted(oid)
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
echo "U R CURRENTLY CONNECTED TO THE ADDRESSES TABLE DATABASE";
?>

*/

      $con=mysqli_connect("localhost","root","","test");
      // Check connection_aborted(oid)
      if (mysqli_connect_errno())
      {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();

      }
      //echo "connected to test db";
?>


<?php

      // session starts with the help of this function 
      session_start(); /*start the session */
      // to do: fiu9re out how to check for session user info 
      if  (isset($_POST["Username"]) and isset($_POST["password"]) ) {
           $name = $_POST["Username"]; 
           $password = $_POST["password"]; 
           $result = mysqli_query($con, "SELECT username, password FROM Users WHERE username = '".$name."' && password = '".$password."'");

            if ($result && mysqli_num_rows($result) > 0) {
                // Login 

                $_SESSION['Username'] = $name;
                //$_SESSION['Start'] = time(); 
                //Start session at current time
                header("Location: user.php");
                exit;  
            } else {
                echo 
                "ERROR ! <br/> This account does not exist.<br/> 
                Please check your username and password again <br/>";
                // Failed!
            }
                  
      }
      echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">'
?>


<form>
Username:
<br/>
<input type="text" name="Username" value="Username" required="">
<br/>
Password:
<br/>
<input type="password" name="password" value="" required="">
<br/>
<br/>
<input type="submit" name="sbmt" id="sbmt" value="Submit"    class="user_class"/> 
</form>


<div class="login_form" id="login_form">



</div>
</div>

</body>
</html>

