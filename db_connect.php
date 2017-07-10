
<?php

/**
 * Database definations
 */

define ('dbhost', 'localhost');
define ('dbuser', 'root');
define ('dbpass', '');

	/*connect to myphpadmin db*/
function open_connection($dbname) {
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname);
	if($conn->connect_error){
		die("Connect failed: ".$conn -> error); 
	}

	return $conn;

}

function close_connection($conn) {
	$conn -> close();
}


 ?>
