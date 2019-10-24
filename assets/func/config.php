<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'nighgvjt_ozy');
define('DB_PASSWORD', '$LTYMa%RQ?4Z');
define('DB_NAME', 'nighgvjt_ozy');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
	//echo "<h1>ERROR!</h1>";
} else { 
	//echo "<h1>SUCCESS!</h1>"; 
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>