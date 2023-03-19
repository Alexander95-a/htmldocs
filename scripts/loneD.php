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


$info = mysqli_query($conn, "SELECT * FROM `d$n` WHERE `uid`= (SELECT MAX(uid) FROM `d$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$i = $info['lot'];
usleep(50);
$valu1 = mysqli_query($conn, "SELECT * FROM `d$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
$valu2 = mysqli_query($conn, "SELECT * FROM `d$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
$v1 = mysqli_num_rows($valu1);
$v2 = mysqli_num_rows($valu2);
if($v2 - $v1 == 1) {
    mysqli_query($conn,"UPDATE `tablo1` SET `O$n` = 'Free' WHERE `tablo1`.`lot` = '$i' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
    mysqli_query($conn, "INSERT INTO `d$r` ( uid,Name, Team, cid, gendage, wc, lot, uidb) SELECT uid, Name, Team, cid, gendage, wc, lot, uidb FROM `d$n` where uid = (SELECT MAX(uid) FROM `d$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");
}
usleep(50);


header("Location:../scripts/D.php?l=d&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");

