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


<div class="topnav">
  <a class="active" href="home.html">Home</a>
  <a href="about.html">About</a>
  <a href="resume.html">Resume</a>
  <a href="login.php">User Login</a>
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
/*SELECT * FROM `evakun5_addresses` WHERE `Date` < '2017-07-01' ORDER BY `StreetName` ASC
*/
    $con=mysqli_connect("localhost","root","","evakun5_addresses");
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


<button type="button">Click Me</button>
<p></p>


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","test2.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a Table: (currently  not working)</option>
  <option value="1"> C U R R E N T  </option>
  <option value="2">J U N E </option>
  <option value="3">J U L Y </option>
  <option value="4">A U G U S T </option>
  </select>
</form>
<br>
<div id="txtHint"><b>Corresponding Table will be listed here...</b></div>




 <a href="user.php">BACK</a>


</div>

</body>
</html>

