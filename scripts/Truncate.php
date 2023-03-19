<?php require_once("../includes/connect.php");?>
<?php require_once("../includes/header.php");?>


//Добавление нового


<?php

/*
* Делаем запрос на добавление новой строки в таблицу
*/

mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a2`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a3`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a4`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a5`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a6`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a7`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a8`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a9`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`a10`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b2`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b3`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b4`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b5`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b6`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b7`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b8`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b9`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`b10`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`tablo1`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`g1`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`c2`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`c3`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`c4`;");
mysqli_query($conn,"TRUNCATE TABLE `baza2`.`c5`;");



/*
* Переадресация на главную страницу
*/

header("Location: /Lot_add.php?w=$w&g=$g&q=$q&z=$z");
