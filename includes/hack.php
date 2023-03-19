<?php require_once("connect.php");



$info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = `sec` - 1 WHERE `cb`.`id` = '$o1'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check1` = '$ch1' WHERE `cb`.`id` = '$o1'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check2` = '$ch2' WHERE `cb`.`id` = '$o1'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check1` = '$ch3'  WHERE `cb`.`id` = '$o2'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check2` = '$ch4' WHERE `cb`.`id` = '$o2'");

$inf = mysqli_query($conn, "SELECT * FROM `cb` where `cb`.`id` = '$o1' ");
$inf = mysqli_fetch_assoc($inf);
$s2 = $inf['sec'];

