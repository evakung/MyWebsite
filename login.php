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

<div class="menu_bar_top" id="menu_bar_top">
  <a href="#Home.html">EVA KUNG - Home</a>1
  <a href="resume.html">Resume</a>
  <a href="#contact">Contact</a>
  <a href="about.html">About</a>
  <a href="login.php">Client (Log In)</a>
</div>

<div class="display_block" id="display_block">

<?php
if  (isset($_POST["Username"]) and isset($_POST["password"]) ) {

    if ( ($_POST["Username"] == "1") and ($_POST["password"] == "1") ) {        
        header("Location: user.php");
        exit;   
    }
    else {
      echo "Error, Cannot login, Please check Username and Password <br/>";}
}



echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'">'
?>

Username:
<br/>
<input type="text" name="Username" value="Admin_Username">
<br/>
Password:
<br/>
<input type="text" name="password" value="">
<br/>
<br/>
<input type="submit" name="sbmt" id="sbmt" value="Submit"    class="user_class"/> 
</form>';


<div class="login_form" id="login_form">



</div>
</div>

</body>
</html>

