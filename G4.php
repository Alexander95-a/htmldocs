<?php require_once("includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$k=$_GET['k'];
$k2=$_GET['k2'];
// mysqli_query($conn, "delete from person where `wc`='0'");
// mysqli_query($conn, "delete `p`from person as `p`, person as `pn` where `p`.`id`<`pn`.`id` and `p`.`Name`<=>`pn`.`Name` and `p`.`cid`<=>`pn`.`cid`");
// usleep(900);
// mysqli_query($conn, "delete `p`from tablo1 as `p`, tablo1 as `pn` where `p`.`id`<`pn`.`id` and `p`.`Name2`<=>`pn`.`Name2` and `p`.`qid`<=>`pn`.`qid`");
// usleep(900);


mysqli_query($conn, "INSERT INTO person1 (id, Name, BD, Team, trener, cid, gendage, wc, lot) SELECT id, person.Name, BD, Team, trener, cid, gendage, wc, lot FROM person INNER JOIN tablo1 using (id) where `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w'ORDER BY tablo1.lot ASC   ");
mysqli_query($conn, "INSERT INTO r1 ( Name, Team, cid, gendage, wc, lot) SELECT  person1.Name, Team, cid, gendage, wc, lot FROM person1 INNER JOIN tablo1 using (lot) where `lot` !=0 AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  ORDER BY tablo1.lot ASC  ");
mysqli_query($conn, "REPLACE INTO g1 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT id, Name, Team, cid, gendage, wc, lot,(`cid`+`lot`/'10000')  FROM r1 where `lot` !=0 AND `cid` = '$z'   AND `gendage` LIKE '$g' AND `wc` = '$w' ");
mysqli_query($conn, "UPDATE tablo1 JOIN g1 ON tablo1.lot=g1.lot and tablo1.qid=g1.cid  set tablo1.quid=g1.uid");
mysqli_query($conn, "UPDATE `g1` SET `uidb`= `cid`+`lot`/'10000' WHERE id =id");

mysqli_query($conn, "TRUNCATE person1");
mysqli_query($conn, "TRUNCATE r1");

usleep(900);

mysqli_query($conn, "INSERT INTO person1 (Name, Team, cid, gendage, wc, lot) SELECT Name, Team, cid, gendage, wc, lot  FROM g1 where `lot` !=0 AND  cid='$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`uid` DESC LIMIT $k");
mysqli_query($conn, "INSERT INTO r1 ( Name, Team, cid, gendage, wc, lot) SELECT  person1.Name, Team, cid, gendage, wc, lot FROM person1 INNER JOIN tablo1 using (lot) where `lot` !=0 AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  ORDER BY tablo1.lot ASC  ");
mysqli_query($conn, "INSERT INTO uc ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT id, Name, Team, cid, gendage, wc, lot,(`cid`+`lot`/'10000')  FROM r1 where `lot` !=0 AND `cid` = '$z'   AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

mysqli_query($conn, "TRUNCATE person1");
mysqli_query($conn, "TRUNCATE r1");
usleep(900);

mysqli_query($conn, "INSERT INTO person1 (Name, Team, cid, gendage, wc, lot) SELECT Name, Team, cid, gendage, wc, lot  FROM g1 where `lot` !=0 AND  cid='$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`uid` ASC LIMIT $k2");
mysqli_query($conn, "INSERT INTO r1 ( Name, Team, cid, gendage, wc, lot) SELECT  person1.Name, Team, cid, gendage, wc, lot FROM person1 INNER JOIN tablo1 using (lot) where `lot` !=0 AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' and  `qga` like '$g' and `qwc`= '$w'  ORDER BY tablo1.lot ASC  ");
mysqli_query($conn, "INSERT INTO u1 ( uid,Name, Team, cid, gendage, wc, lot,uidb) SELECT id, Name, Team, cid, gendage, wc, lot,(`cid`+`lot`/'10000')  FROM r1 where `lot` !=0 AND `cid` = '$z'   AND `gendage` LIKE '$g' AND `wc` = '$w'  ");


mysqli_query($conn, "TRUNCATE person1");
mysqli_query($conn, "TRUNCATE r1");


header("Location:../Rounds/RUC.php?w=$w&g=$g&q=$q&z=$z&sr=$sr&k=$k&k2=$k2&l=uc");
