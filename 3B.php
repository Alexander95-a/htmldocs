<?php require_once("includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];

$info = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `uid`= (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$s = $info['lot'];

$value1 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
$value2 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
$val1 = mysqli_num_rows($value1);
$val2 = mysqli_num_rows($value2);


if($val1 - $val2 == 1)


{
    mysqli_query($conn,"UPDATE `tablo1` SET `place` = '3' WHERE `tablo1`.`lot` = '$s' AND `qid` = '$z' and  `qga` like '$w' and `qwc`= '$w'");
}

