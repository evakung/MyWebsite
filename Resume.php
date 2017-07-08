<!DOCTYPE HTML>

<html lang="en">


<head>
  <link rel="stylesheet" type="text/css" href="styles/menubar.css">
  <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/background.css">
  <meta charset="UTF-8">
  <title> RESUME - Eva Kung </title>
</head>

<body>


<div class="menu_bar_top" id="menu_bar_top">
  <a href="#home">Home</a>
  <a href="resume.html">Resume</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="#client">Client (Log In)</a>
</div>
<div class="myname" id="myname">
Eva Kung 
</div>


<?php

   $filedisplay="relevant_files/Resume.pdf";
   $filename="Resume.pdf";
   header('Content-type:application/pdf');
   header('Content-disposition: inline; filename="'.$filename.'"');
   header('content-Transfer-Encoding:binary');
   header('Accept-Ranges:bytes');
  @ readfile($filedisplay);``
?>




</body>
</html>

