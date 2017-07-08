
<?php

/**
 * Database definations
 */

define ('dbhost', 'localhost');
define ('dbuser', 'root');
define ('dbpass', '');

	/*connect to myphpadmin db*/
function open_connection($dbname) {
	$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


mysql_connect($dbhost, $dbuser, $dbpass) OR DIE('Unable to connect to database! Please try again later.');
mysql_select_db($dbname);

	return $conn;

}

function close_connection($conn) {
	$conn -> close();
}


 ?>

