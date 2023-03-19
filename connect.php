<?php
define('DB_HOST', 'mas');
define('DB_USERNAME', 'sasha');
define('DB_PASSWORD', '12345');
define('DB_NAME', 'baza2');

date_default_timezone_set('Asia/Yakutsk');

// Connect with the database
$conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Display error if failed to connect
if ($conn->connect_errno) {
    echo "Connection to database is failed: ".$conn->connect_error;
    exit();
}
