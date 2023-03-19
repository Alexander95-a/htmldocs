<?php require_once("includes/connect.php");

//Добавление нового продукта

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$team = $_POST['team'];
$team2 = $_POST['team2'];
$ks = $_POST['ks'];
$trener = $_POST['trener'];
$w = $_POST['w'];
$g =$_POST['g'];
$q =$_POST['q'];
$z =$_POST['z'];
$ask =$_POST['ask'];
$tab =$_POST['tab'];


/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"INSERT INTO `person` (`id`, `Name`, `BD`, `Team`, `trener`, `cid`, `gendage`, `wc` , `ks`, `Team2` ) VALUES (NULL , '$title', '$price', '$team' , '$trener', '$z', '$g', '$w', '$ks', '$team2')");

$info1 = mysqli_query($conn,"SELECT * FROM `person` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND `Name` LIKE '$title';");
$info1 = mysqli_fetch_assoc($info1);
$id=$info1['id'];


mysqli_query($conn,"INSERT INTO tablo1 (`id`, `name2`, `qid`, `qwc`, `qga` , `lot`, `weight`) VALUES ('$id' , '$title', '$z', '$w', '$g', '0', '0')");



header("Location:/Person.php?w=$w&g=$g&q=$q&z=$z&title=$title&tab=$tab&ask=$ask");
