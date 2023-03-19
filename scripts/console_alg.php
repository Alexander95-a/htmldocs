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
$uid1 = $_POST['uid1'];
$qd1 = $_POST['quid1'];
$uid2 = $_POST['uid2'];
$ui1 = $_POST['ui1'];
$ui2 = $_POST['ui2'];
$q=$_POST['q'];
$z=$_POST['z'];
$g=$_POST['g'];
$w=$_POST['w'];
$l=$_POST['l'];
$n=$_POST['n'];
$gi=$_POST['gi'];
$sr = $_POST['sr'];

/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$score', `L$di` = '$lose', `quid`='$qd1', `Name` = '$N1'  WHERE `tablo1`.`lot` = $id AND `qid` = '$z' and `qga` = '$g' and `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `$l$n` SET `uid` = '$uid1', `Team` = '$T1', `Name` = '$N1' WHERE `$l$n`.`lot` = $id AND `cid` = '$z' and `gendage` = '$g' and `wc` = '$w' ");



header("Location:../scripts/console.php?w=$w&g=$g&q=$q&z=$z&n=$di&l=$l&id=$uid1&gi=$gi&sr=$sr");