<?php require_once("../includes/connect.php");

//Добавление нового продукта

$name = $_POST['name'];
$weight = $_POST['weight'];
$BD = $_POST['BD'];


/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"INSERT INTO `a2` SELECT * FROM `tablo1` WHERE `R1` = 2;");

/*
* Переадресация на главную страницу
*/

header('Location:/Rounds/RA2.php');
