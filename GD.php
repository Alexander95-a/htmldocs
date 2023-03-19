<?php require_once("includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];



mysqli_query($conn, "INSERT INTO person1 (id, Name, BD, Team, trener, cid, gendage, wc, lot) SELECT id, person.Name, BD, Team, trener, cid, gendage, wc, lot FROM person INNER JOIN tablo1 using (id) where `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w'ORDER BY tablo1.lot ASC   ");
mysqli_query($conn, "INSERT INTO r1 ( Name, Team, cid, gendage, wc, lot) SELECT  person1.Name, Team, cid, gendage, wc, lot FROM person1 INNER JOIN tablo1 using (lot) where `lot` !=0 AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  ORDER BY tablo1.lot ASC  ");
mysqli_query($conn, "INSERT INTO d1 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT id, Name, Team, cid, gendage, wc, lot,(`cid`+`lot`/'10000')  FROM r1 where `lot` !=0 AND `cid` = '$z'   AND `gendage` LIKE '$g' AND `wc` = '$w' ");
mysqli_query($conn, "UPDATE tablo1 JOIN d1 ON tablo1.lot=d1.lot and tablo1.qid=d1.cid  set tablo1.quid=d1.uid");
mysqli_query($conn, "UPDATE `d1` SET `uidb`= `cid`+`lot`/'10000' WHERE id =id");


$info = mysqli_query($conn, "SELECT * FROM `d1` WHERE `uid`= (SELECT MAX(uid) FROM `d1`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$s = $info['lot'];

$value1 = mysqli_query($conn, "SELECT * FROM d1 WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
$value2 = mysqli_query($conn, "SELECT * FROM d1 WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
$val1 = mysqli_num_rows($value1);
$val2 = mysqli_num_rows($value2);


if($val1 - $val2 == 1)


        {
            mysqli_query($conn,"UPDATE `tablo1` SET `O1` = 'Free' WHERE `tablo1`.`lot` = '$s' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w' ");
            mysqli_query($conn, "INSERT INTO d2 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT uid, Name, Team, cid, gendage, wc, lot,uidb FROM d1 where uid = (SELECT MAX(uid) FROM d1  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

        }


mysqli_query($conn, "TRUNCATE person1");
mysqli_query($conn, "TRUNCATE r1");


header("Location:../Rounds/DM.php?w=$w&g=$g&q=$q&z=$z&sr=$sr");
