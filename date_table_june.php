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



<div class="menu_bar_top" id="menu_bar_top">
  <a href="#Home.html">EVA KUNG - Home</a>
  <a href="resume.html">Resume</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a href="login.html">Client (Log In)</a>
</div>

<div class="display_block" id="display_block">
<?php

/* ESTABLISH CONNECTION
*/
    $con=mysqli_connect("localhost","root","","evakun5_addresses");
    // Check connection_aborted(oid)
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

?>


<?php

/*SELECT * FROM `evakun5_addresses` WHERE `Date` < '2017-07-01' ORDER BY `StreetName` ASC
*/
    $result = mysqli_query($con,"SELECT * FROM `evakun5_addresses` WHERE `Date` < '2017-07-01'");

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

      /*echo "<td>">.$aid."|".$date."|".$street_num."|".$street_type."|".$dir."|".$unit."|".$city."|".$province."|".$postal_code."|".$basic."|".$listing."|".$comps."|".$paid;*/
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

    mysqli_close($con);
    echo "</table>";
?>

 <a href="user.php">BACK</a>


</div>

</body>
</html>

