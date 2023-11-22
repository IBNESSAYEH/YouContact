<?php


// Database Credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'youcontact');

// Create a connection to the database
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if(mysqli_connect_errno()) {
  exit("Database connection failed: (" . mysqli_connect_errno() . ")");
}








//close connection  
mysqli_close($conn);
?>