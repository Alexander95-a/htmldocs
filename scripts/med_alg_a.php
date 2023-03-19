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
$u1=$_POST['u1'];
$u2=$_POST['u2'];
$uw1=$_POST['uw1'];
$uw2=$_POST['uw2'];



/*
 * Делаем запрос на изменение строки в таблице products
 */


mysqli_query($conn,"UPDATE `tablo1` SET `para` = 'med', `m$di` = `para`  WHERE `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' " );
mysqli_query($conn,"DELETE FROM `a$di` WHERE `a$di`.`lot` = '$id'  AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");

/*
 * Переадресация на главную страницу
 */

header("Location:/../scripts/upd.php?w=$w&g=$g&q=$q&z=$z&n=$di&l=$l&id=$u1");