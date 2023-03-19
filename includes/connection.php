<?php
    require("constants.php");

    $conn = mysqli_connect(DB_SERVER,DB_USER, DB_PASS);
if (!$conn) {
    die('error database');
}
?>