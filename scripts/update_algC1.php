<?php require_once("../includes/connect.php");

$id = $_POST['id'];
$id2 = $_POST['id2'];
$score = $_POST['score'];

$Tex = $_POST['Tex'];
$lose = $_POST['lose'];
$di = $_POST['di'];
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$T1 = $_POST['T1'];
$T2 = $_POST['T2'];
$uid1 = $_POST['uid1'];
$uid2 = $_POST['uid2'];
$r = $_POST['r'];
$q=$_POST['q'];
$z=$_POST['z'];
$g=$_POST['g'];
$w=$_POST['w'];
$l=$_POST['l'];
$cc=$_POST['cc'];
$sr=$_POST['sr'];
/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$score', `O` = '$id2' , `Scores` = `R1`, `Wins` = `Scores`, `L$di` = '$lose', `lose` = `L1`, `m$di` = `R$di` WHERE `tablo1`.`lot` = $id AND `qid` = '$z'AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$lose', `O` = '$id' , `Scores` = `R1`, `Wins` = `Scores`, `L$di` = '$score', `lose` = `L1`, `m$di` = `R$di` WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z'AND `qga` LIKE '$g' AND `qwc` = '$w'");

mysqli_query($conn,"INSERT INTO `c$r` ( `uid`, `Name`, `Team`, `Time`, `lot`, `cid`, `gendage`, `wc`) SELECT '$uid1', '$N1', '$T1', '$id', '$id', '$z', '$g', '$w' FROM `tablo1` WHERE `R$di`= 2 AND `lot` = $id  AND `qid` = '$z'AND `qga` LIKE '$g' AND `qwc` = '$w'" );
mysqli_query($conn,"INSERT INTO `c$r` ( `uid`, `Name`, `Team`, `Time`, `lot`, `cid`, `gendage`, `wc`) SELECT '$uid2','$N2', '$T2', '$id2', '$id2', '$z', '$g', '$w' FROM `tablo1` WHERE `L$di`= 2 AND `lot` = $id2 AND `qid` = '$z'AND `qga` LIKE '$g' AND `qwc` = '$w'");
/*
 * Переадресация на главную страницу
 */

header("Location:../scripts/updC.php?w=$w&g=$g&q=$q&z=$z&id=$id&cc=$cc&sr=$sr");