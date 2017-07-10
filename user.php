<!DOCTYPE HTML>

<html lang="en">


<head>
  <link rel="stylesheet" type="text/css" href="styles/menubar.css">
  <link rel="stylesheet" type="text/css" href="styles/home.css">
  <link rel="stylesheet" type="text/css" href="styles/background.css">
  <link rel="stylesheet" type="text/css" href="styles/display_block.css">
  <link rel="stylesheet" type="text/css" href="styles/user.css">

  <meta charset="UTF-8">
  <title> USER.PHP</title>
</head>

<body>


<div class="menu_bar_top" id="menu_bar_top">
  <a href="#Home.html">EVA KUNG - Home</a>
  <a href="resume.html">Resume</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.php">Client (Log In)</a>
</div>



<?php
/*include 'db_connect.php';
 
$conn = OpenCon();
 
echo "Connected Successfully";
$query = "SELECT * FROM users";

ShowList($conn);

//CloseCon($conn);
 */


?>

<div class="display_block" id="display_block">

<?php

/*SELECT * FROM `addresses` WHERE `Date` < '2017-07-01' ORDER BY `StreetName` ASC
*/
    $con=mysqli_connect("localhost","root","","reports_database");
    // Check connection_aborted(oid)
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>


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
  }
}
</script>


<form id="form_items" name="form_items" action="" method="post" enctype="multipart/form-data">
<input type="button" value="UNPAID" onClick="formaction('unpaid')"/>
<input type="button" value="JUNE" onClick="formaction('june')"/>
<input type="button" value="JULY" onClick="formaction('july')"/>
</form>


<?php

    $result = mysqli_query($con,"SELECT * FROM addresses");

     echo "<table>";
     echo "<tr>";
     echo "<th> ID";
     echo "<th> Date";
     echo "<th> Address";
     echo "<th> Basic";
     echo "<th> Listing" ;
     echo "<th> Comps";
     echo "<th> Total";
     echo "<th> PAID ?";
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
         $total=$row['Total'];
         $paid= $row['Paid'];    

         /*echo "<td>">.$aid."|".$date."|".$street_num."|".$street_type."|".$dir."|".$unit."|".$city."|".$province."|".$postal_code."|".$basic."|".$listing."|".$comps."|".$paid;*/
         echo "</tr>";
         echo "<tr>";
         echo "<td>$aid";
         echo "<td>$date";
         echo "<td>".$unit." ".$street_num." ".$street_name." ".$street_type." ".$dir.", ".$city.", ".$province.", ".$postal_code;
         echo "<td>$basic";
         echo "<td>$listing";
         echo "<td>$comps";
         echo "<td>".'$'."$total";
         echo "<td>$paid";
         echo "</tr>";

      /*
      echo $row['AID'] . " " . $row['Date']. " " . $row['StreetNum']. " " . $row['StreetName']. " " . $row['StreetType']; //these are the fields that you have stored in your database table employee
      echo "<table>";
       echo "<tr><td>". $row['AID']."</td><td>". $row['Date'] ."</td><td>".$row['StreetNum'] ."</td></tr>";

        echo "<br />";*/
    }
  

  $sum= mysqli_query($con,"SELECT SUM(Total) FROM addresses WHERE Paid IS NULL"); 

  while($row = mysqli_fetch_array($sum)) {
    echo '<b style="color:white">$'; 
    echo $row['SUM(Total)'];
  }
  echo "CAD IS WHAT YOU CURRENTLY OWE <b>";
   
  echo "</table>";

mysqli_close($con);

?>

 <a href="user.php">BACK</a>


</div>

</body>
</html>

