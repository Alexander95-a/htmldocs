<?php require_once("includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$sr=$_GET['sr'];

mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");
usleep(50);
mysqli_query($conn, "INSERT INTO a ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `a$n`  where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE a$n LEFT JOIN a USING (lot) SET a$n.uid = COALESCE(a.id, 0) where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w'");


mysqli_query($conn, "TRUNCATE a");
mysqli_query($conn, "TRUNCATE b");
usleep(100);
$r=$n+1;
$info = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `uid`= (SELECT MAX(uid) FROM `a$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$i = $info['lot'];
usleep(50);
$valu1 = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
$valu2 = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
$v1 = mysqli_num_rows($valu1);
$v2 = mysqli_num_rows($valu2);
if($v2 - $v1 == 1) {
    mysqli_query($conn,"UPDATE `tablo1` SET `O$n` = 'Free' WHERE `tablo1`.`lot` = '$i' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
    mysqli_query($conn, "INSERT INTO `a$r` ( uid,Name, Team, cid, gendage, wc, lot, uidb) SELECT uid, Name, Team, cid, gendage, wc, lot, uidb FROM `a$n` where uid = (SELECT MAX(uid) FROM `a$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");
}

mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$r`  where `b$r`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$r`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE b$r LEFT JOIN b USING (lot) SET b$r.uid = COALESCE(b.id, 0) where `b$r`.`cid` = '$z' AND `b$r`.`gendage` LIKE '$g' AND `b$r`.`wc` = '$w'");
usleep(50);


mysqli_query($conn, "TRUNCATE b");

header("Location:../Rounds/RA2.php?l=$l&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");
