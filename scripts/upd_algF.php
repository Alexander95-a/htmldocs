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
$sr = $_POST['sr'];
$T1 = $_POST['T1'];
$T2 = $_POST['T2'];
$uid1 = $_POST['uid1'];
$uid2 = $_POST['uid2'];
$q=$_POST['q'];
$z=$_POST['z'];
$g=$_POST['g'];
$w=$_POST['w'];
$l=$_POST['l'];
$ui1 = $_POST['ui1'];
$ui2 = $_POST['ui2'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$o1=$_POST['o1'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$score',`O$di` = '$ui2' , `Scores` = `R1` + `R2` + `R3` + `R4` + `R5` + `R6` + `R7` + `R8` + `R9` + `R10`, `Wins` = `Scores`, `L$di` = '$lose', `lose` = `L1` + `L2` + `L3` + `L4` + `L5` + `L6` + `L7` + `L8` + `L9` + `L10`, `m$di` = `R$di`, `PB` = '$di'  WHERE `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$lose', `O$di` = '$ui1' , `Scores` = `R1` + `R2` + `R3` + `R4` + `R5` + `R6` + `R7` + `R8` + `R9` + `R10`, `Wins` = `Scores`, `L$di` = '$score', `lose` = `L1` + `L2` + `L3` + `L4` + `L5` + `L6` + `L7` + `L8` + `L9` + `L10`, `m$di` = `R$di`, `PB` = '$di'  WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");


mysqli_query($conn,"UPDATE `tablo1` SET `place` = '1', `PB` = '0' WHERE `R$di` = 2 and `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `place` = '1', `PB` = '0' WHERE `R$di` = 2 and `tablo1`.`lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `place` = '2', `PB` = '0' WHERE `L$di` = 2 and `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `place` = '2', `PB` = '0' WHERE `L$di` = 2 and `tablo1`.`lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
/*
 * Переадресация на главную страницу
 */

header("Location:../scripts/updF.php?w=$w&g=$g&q=$q&z=$z&n=$di&l=$l&id=$uid1&sr=$sr&t=1&ch1=$ch1&ch2=$ch2&ch3=$ch3&ch4=$ch4&o1=$o1");