<?php 
session_start();
?>

<?php 
define('DB_HOST', 'localhost');
define('DB_USER', 'sese');
define('DB_PASS', '123456');
define('DB_NAME', 'appointment_sys');

//create a connection
$con_string = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection
if ($con_string ->connect_error) {
    die('Connection Failed ' . $con_string->connect_error);
}
?>