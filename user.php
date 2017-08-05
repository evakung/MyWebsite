<!DOCTYPE HTML>

<html lang="en">

<head>
      <link rel="stylesheet" type="text/css" href="styles/menubar.css">
      <link rel="stylesheet" type="text/css" href="styles/home.css">
      <link rel="stylesheet" type="text/css" href="styles/background.css">
      <link rel="stylesheet" type="text/css" href="styles/display_block.css">
      <link rel="stylesheet" type="text/css" href="styles/user.css">
      <link rel="stylesheet" type="text/css" href="styles/client_user.css">

      <meta charset="UTF-8">
      <title> USER.PHP</title>

</head>

<body>


<div class="topnav">
      <a class="active" href="home.html">Home</a>
      <a href="about.html">About</a>
      <a href="resume.html">Resume</a>
      <a href="login.php">User Login</a>
</div>

<?php
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

      $con=mysqli_connect("localhost","root","","evakun5_addresses");
      // Check connection_aborted(oid)
      if (mysqli_connect_errno())
      {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();

      }
?>
<div class="display_block" id="display_block">

      <div class="display_block_container">
            CONTAINER


      <div class="display_block_fixed">


            <form id="unpaid_table" name="myform" action="unpaid_table.php">
                  <a href="javascript: submitform()">UNPAID</a>
            </form>

            <script type="text/javascript">
            function submitform()
            {
                  document.myform.submit();
            }
            </script>


            <script language="javascript">
            function formaction( str )
            {
                  switch( str )
                  { 
                  case "unpaid":
                  document.form_items.action = 'unpaid_table.php';
                  document.form_items.submit();
                  break;

                  case "june":
                  document.form_items.action = 'date_table_june.php';
                  document.form_items.submit();
                  break;

                  case "july":
                  document.form_items.action = 'date_table_july.php';
                  document.form_items.submit();
                  break;

                  case "august":
                  document.form_items.action = 'date_table_august.php';
                  document.form_items.submit();
                  break;
                  }
            }
            </script>


            <form id="form_items" name="form_items" action="" method="post" enctype="multipart/form-data">
                  <input type="button" value="UNPAID" onClick="formaction('unpaid')"/>
                  <input type="button" value="JUNE" onClick="formaction('june')"/>
                  <input type="button" value="JULY" onClick="formaction('july')"/>
                  <input type="button" value="AUGUST" onClick="formaction('august')"/>
            </form>

      </div>

      <div class="display_block_flex_item">

      <?php  
            /*CHECK FOR TOTAL*/
            $sql="SELECT SUM(Basic) + SUM(Listing) + SUM(Comps) AS 'SUM(Total)' FROM evakun5_addresses WHERE Date > '2017-07-01' AND Date <'2017-08-01'";
            $sum= mysqli_query($con,$sql); 

            while($row = mysqli_fetch_array($sum)) {
                  echo '<b "color:black; vertical-align:middle" >$'; 
                  echo $row['SUM(Total)'] * 10; 
            }

            /*CHECK IF EXTRA SECTIONS DONE EXISTS*/
            $sql2="SELECT SUM(Extra) AS 'SUM(Extra)' FROM evakun5_addresses WHERE Date > '2017-07-01' AND Date <'2017-08-01'";
            $sum= mysqli_query($con,$sql2); 

            while($row = mysqli_fetch_array($sum)) {
                  if ($row['SUM(Extra)'] != 0 ){
                     echo ' + $'; 
                  echo $row['SUM(Extra)'] * 5;   
                  } 
            }
            echo ".00 CAD</b>"; 
      ?>

      </div>
</div>

<body>

      <?php

      $result = mysqli_query($con,"SELECT * FROM evakun5_addresses");

      echo "<table>";
      echo "<tr>";
      echo "<th> ID";
      echo "<th> Date";
      echo "<th> Address";
      echo "<th> Basic";
      echo "<th> Listing" ;
      echo "<th> Comps";
      echo "<th> Extra";
      echo "<th> Paid";
      while($row = mysqli_fetch_array($result)){

            $aid=$row['AID']; 
            $date=$row['Date']; 
            $street_num=$row['StreetNum'];
            $street_name=$row['StreetName'];
            $street_type=$row['StreetType']; 
            $dir=$row['Direction'];
            $unit=$row['UnitNum']; 
            $city= $row['City']; 
            $province= $row['Province'];
            $postal_code= $row['PostalCode']; 
            $basic= $row['Basic']; 
            $listing= $row['Listing'];
            $comps=$row['Comps']; 
            $extra=$row['Extra'];
            $paid= $row['Paid'];    

            echo "</tr>";
            echo "<tr>";
            echo "<td>$aid";
            echo "<td>$date";
            echo "<td>".$unit." ".$street_num." ".$street_name." ".$street_type." ".$dir.", ".$city.", ".$province.", ".$postal_code;
            echo "<td>$basic";
            echo "<td>$listing";
            echo "<td>$comps";
            echo "<td>$extra";
            echo "<td>$paid";
            echo "</tr>";
      }

      echo "</table>";

      mysqli_close($con);

      ?>


      <form action="insert.php" method="post">
            FROM ID # <input type="text" name="name">
            TO ID # <input type="text" name="last">
            <input type="submit" name="submit" value="Send">

      </form>

      <a href="user.php"><br>BACK</a>

</div>
</body>
</html>