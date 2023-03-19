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



header("Location:../Rounds/RB2.php?l=$l&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");
