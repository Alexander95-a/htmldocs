<?php require_once("../includes/connect.php");
//require_once("../includes/header.php");


$info_id = $_GET['id'];
$n = $_GET['n'];
$r = $_GET['r'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$sr=$_GET['sr'];
/*
 * Делаем выборку строки с полученным ID выше
 */


$info = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `uid`= (SELECT MAX(uid) FROM `a$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$i = $info['lot'];
usleep(50);

$info = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `uid`= (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$s = $info['lot'];
usleep(50);


if($val1 - $val2 == 1){
    mysqli_query($conn,"UPDATE `tablo1` SET `O$n` = 'Free' WHERE `tablo1`.`lot` = '$s' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
    mysqli_query($conn, "INSERT INTO `b$r` ( uid,Name, Team, cid, gendage, wc, lot, uidb) SELECT uid, Name, Team, cid, gendage, wc, lot, uidb FROM `b$n` where uid = (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

}

header("Location:../B.php?l=b&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");

