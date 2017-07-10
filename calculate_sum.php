<!DOCTYPE HTML>

<html lang="en">


<head>
  <link rel="stylesheet" type="text/css" href="styles/menubar.css">
  <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/background.css">
  <link rel="stylesheet" type="text/css" href="styles/display_block.css">
  <link rel="stylesheet" type="text/css" href="styles/user.css">

  <meta charset="UTF-8">
  <title> SORT DATE</title>
</head>

<body>


<div class="menu_bar_top" id="menu_bar_top">
  <a href="#Home.html">EVA KUNG - Home</a>
  <a href="resume.html">Resume</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.html">Client (Log In)</a>
</div>


<?php

/* ESTABLISH CONNECTION
*/
    $con=mysqli_connect("localhost","root","","reports_database");
    // Check connection_aborted(oid)
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>


<?php

/*SELECT * FROM `addresses` WHERE `Date` < '2017-07-01' ORDER BY `StreetName` ASC
*/
    $sum= mysqli_query($con,"SELECT SUM(Total) FROM addresses WHERE Paid IS NULL"); 

 while($row = mysqli_fetch_array($sum)) {
    echo '<b style="color:white">$'; 
    echo $row['SUM(Total)'];
  }
  echo "CAD IS WHAT YOU CURRENTLY OWE <b>";
    mysqli_close($con);
?>


</div>

</body>
</html>

