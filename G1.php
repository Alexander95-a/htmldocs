<?php require_once("includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];

// mysqli_query($conn, "delete from person where `wc`='0'");
// mysqli_query($conn, "delete `p`from person as `p`, person as `pn` where `p`.`id`<`pn`.`id` and `p`.`Name`<=>`pn`.`Name` and `p`.`cid`<=>`pn`.`cid`");
// usleep(900);
// mysqli_query($conn, "delete `p`from tablo1 as `p`, tablo1 as `pn` where `p`.`id`<`pn`.`id` and `p`.`Name2`<=>`pn`.`Name2` and `p`.`qid`<=>`pn`.`qid`");
usleep(900);

mysqli_query($conn, "INSERT INTO person1 (id, Name, BD, Team, trener, cid, gendage, wc, lot) SELECT id, person.Name, BD, Team, trener, cid, gendage, wc, lot FROM person INNER JOIN tablo1 using (id) where `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w'ORDER BY tablo1.lot ASC   ");
mysqli_query($conn, "INSERT INTO r1 ( Name, Team, cid, gendage, wc, lot) SELECT  person1.Name, Team, cid, gendage, wc, lot FROM person1 INNER JOIN tablo1 using (lot) where `lot` !=0 AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  ORDER BY tablo1.lot ASC  ");
mysqli_query($conn, "REPLACE INTO g1 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT id, Name, Team, cid, gendage, wc, lot,(`cid`+`lot`/'10000')  FROM r1 where `lot` !=0 AND `cid` = '$z'   AND `gendage` LIKE '$g' AND `wc` = '$w'");
mysqli_query($conn, "UPDATE g1 JOIN r1 ON r1.lot=g1.lot and r1.cid=g1.cid  set r1.id=g1.uid");
mysqli_query($conn, "UPDATE tablo1 JOIN g1 ON tablo1.lot=g1.lot and tablo1.qid=g1.cid  set tablo1.quid=g1.uid");
mysqli_query($conn, "UPDATE `g1` SET `uidb`= `cid`+`lot`/'10000' WHERE id =id");


$info = mysqli_query($conn, "SELECT * FROM `g1` WHERE `uid`= (SELECT MAX(uid) FROM `g1`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
$info = mysqli_fetch_assoc($info);
$s = $info['lot'];

$value1 = mysqli_query($conn, "SELECT * FROM g1 WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
$value2 = mysqli_query($conn, "SELECT * FROM g1 WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
$val1 = mysqli_num_rows($value1);
$val2 = mysqli_num_rows($value2);

if($val1 - $val2 == 1)


        {
            mysqli_query($conn,"UPDATE `tablo1` SET `O1` = 'Free' WHERE `tablo1`.`lot` = '$s' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w' ");
            mysqli_query($conn, "INSERT INTO a2 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT uid, Name, Team, cid, gendage, wc, lot,uidb FROM g1 where uid = (SELECT MAX(uid) FROM g1  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

        }

mysqli_query($conn, "TRUNCATE person1");
mysqli_query($conn, "TRUNCATE r1");

header("Location:../Rounds/RG.php?w=$w&g=$g&q=$q&z=$z&sr=$sr&l=g&n=1");
