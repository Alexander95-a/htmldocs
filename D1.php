<?php require_once("includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$sr=$_GET['sr'];

mysqli_query($conn, "INSERT INTO d ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `d$n`  where `d$n`.`cid` = '$z' AND `d$n`.`gendage` LIKE '$g' AND `d$n`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE d$n LEFT JOIN d USING (lot) SET d$n.uid = COALESCE(d.id, 0) where `d$n`.`cid` = '$z' AND `d$n`.`gendage` LIKE '$g' AND `d$n`.`wc` = '$w'");
usleep(50);

mysqli_query($conn, "TRUNCATE d");



header("Location:../Rounds/RD2.php?l=$l&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");
