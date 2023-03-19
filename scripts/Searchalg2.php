<?php require_once("../includes/connect.php");

//Добавление нового продукта

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$team = $_POST['team'];
$ks = $_POST['ks'];
$trener = $_POST['trener'];
$w = $_POST['w'];
$wc = $_POST['wc'];
$g =$_POST['g'];
$q =$_POST['q'];
$z =$_POST['z'];
$id =$_POST['id'];
$lot = $_POST['lot'];
$weight = $_POST['weight'];
$ask =$_POST['ask'];
$tab =$_POST['tab'];
/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"UPDATE `person` SET `Name` = '$title', `BD` = '$price', `Team` = '$team', `trener` = '$trener', `ks` = '$ks' , `wc` = '$wc' WHERE `person`.`id` = '$id'");

mysqli_query($conn,"UPDATE `tablo1` SET `qwc`  = '$wc', `lot`  = '$lot', `weight` = '$weight', `qid` = '$z'  WHERE `tablo1`.`id` = '$id';");




header("Location:../Person.php?w=$w&g=$g&q=$q&z=$z&id=$id&tab=$tab&ask=$ask");
