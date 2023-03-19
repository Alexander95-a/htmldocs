<?php require_once("../includes/connect.php");
$id = $_POST['id'];
$id2 = $_POST['id2'];
$score = $_POST['score'];
$Time = $_POST['Time'];
$Tex = $_POST['Tex'];
$lose = $_POST['lose'];
$di = $_POST['di'];
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$r = $_POST['r'];
$T1 = $_POST['T1'];
$T2 = $_POST['T2'];
$l = $_POST['l'];
$q=$_POST['q'];
$z=$_POST['z'];
$g=$_POST['g'];
$w=$_POST['w'];



/*
 * Делаем запрос на изменение строки в таблице products
 */



mysqli_query($conn,"INSERT INTO `$l$r` (`id`, `Name`, `Team`, `Time`, `lot`, `cid`, `gendage`, `wc`) SELECT NULL,'$N1', '$T1', '$id', '$id', '$z', '$g', '$w' ");

/*
 * Переадресация на главную страницу
 */

header("Location:/Rounds/C$di.php?w=$w&g=$g&q=$q&z=$z");