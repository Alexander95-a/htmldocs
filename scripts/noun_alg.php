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

mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '2', `O$di` = '$uw1' , `Scores` = `R1` + `R2` + `R3` + `R4` + `R5` + `R6` + `R7` + `R8` + `R9` + `R10`, `Wins` = `Scores`, `L$di` = '0', `lose` = `L1` + `L2` + `L3` + `L4` + `L5` + `L6` + `L7` + `L8` + `L9` + `L10`  WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
mysqli_query($conn,"UPDATE `tablo1` SET `para` = 'noun',  `m$di` = `para`,  `O$di` = '$uw2'  WHERE `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"INSERT INTO `$l$r` (`uid`, `Name`, `Team`, `lot2`, `lot`, `cid`, `gendage`, `wc`) SELECT '$u2','$N2', '$T2', '$id2', '$id2', '$z', '$g', '$w' ");

/*
 * Переадресация на главную страницу
 */

header("Location:../scripts/upd.php?w=$w&g=$g&q=$q&z=$z&n=$di&l=$l&id=$u1");