<?php require_once("../includes/connect.php");

//Добавление нового продукта

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$team = $_POST['team'];
$ks = $_POST['ks'];
$trener = $_POST['trener'];
$w = $_POST['w'];
$g =$_POST['g'];
$q =$_POST['q'];
$z =$_POST['z'];
$id =$_POST['id'];
/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"DELETE FROM `comp` WHERE `comp`.`id` = '$id'");
mysqli_query($conn,"DELETE FROM `person` WHERE `person`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `tablo1` WHERE `tablo1`.`qid` = '$z'");
mysqli_query($conn,"DELETE FROM `a2` WHERE `a2`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a3` WHERE `a3`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a4` WHERE `a4`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a5` WHERE `a5`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a6` WHERE `a6`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a7` WHERE `a7`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a8` WHERE `a8`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a9` WHERE `a9`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `a10` WHERE `a10`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b2` WHERE `b2`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b3` WHERE `b3`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b4` WHERE `b4`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b5` WHERE `b5`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b6` WHERE `b6`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b7` WHERE `b7`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b8` WHERE `b8`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b9` WHERE `b9`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `b10` WHERE `b10`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `c2` WHERE `c2`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `c3` WHERE `c3`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `c4` WHERE `c4`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `c5` WHERE `c5`.`cid` = '$z'");
mysqli_query($conn,"DELETE FROM `g1` WHERE `g1`.`cid` = '$z'");
header("Location:../index.php?w=$w&g=$g&q=$q&z=$z&id=$id");
