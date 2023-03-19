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
$ask =$_POST['ask'];
$tab =$_POST['tab'];
/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"DELETE FROM `person` WHERE `person`.`id` = '$id'");

mysqli_query($conn, "DELETE FROM `tablo1` WHERE `tablo1`.`id` = '$id'");


header("Location:../Person.php?w=$w&g=$g&q=$q&z=$z&id=$id&tab=$tab&ask=$ask");
