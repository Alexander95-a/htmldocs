<?php
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'baza2');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_NOTICE);
error_reporting(E_ALL);
$sr=$_GET['sr'];

date_default_timezone_set('Asia/Yakutsk');

// Connect with the database
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Display error if failed to connect
if ($conn->connect_errno) {
    echo "Connection to database is failed: ".$conn->connect_error;
    exit();
}
?>
<script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
