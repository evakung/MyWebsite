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
  <a href="login.html">Client (Log In)</a>
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
<form action="/action_page.php">
  <select name="sortby">
    <option value="date">DATE</option>
    <option value="report_num">REPORT NUM</option>
    <option value="month">MONTH</option>
    <option value="unpaid">UNPAID</option>
  </select>
  <br><br>
  <input type="submit">
</form>


<?php
    $con=mysqli_connect("localhost","root","","reports_database");
    // Check connection_aborted(oid)
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $result = mysqli_query($con,"SELECT * FROM addresses");

     echo "<table>";
     echo "<tr>";
     echo "<th> Report Number";
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
         echo "<td>$total";
         echo "<td>$paid";
         echo "</tr>";

      /*
      echo $row['AID'] . " " . $row['Date']. " " . $row['StreetNum']. " " . $row['StreetName']. " " . $row['StreetType']; //these are the fields that you have stored in your database table employee
      echo "<table>";
       echo "<tr><td>". $row['AID']."</td><td>". $row['Date'] ."</td><td>".$row['StreetNum'] ."</td></tr>";

        echo "<br />";*/
    }

    mysqli_close($con);
    echo "</table>";
?>



</div>

</body>
</html>

