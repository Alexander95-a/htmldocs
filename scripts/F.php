<?php require_once("../includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$r1=$_GET['r1'];
$n1=$_GET['n1'];

mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot) SELECT  Name, Team, cid, gendage, wc, lot FROM `b$n` ");
mysqli_query($conn, "UPDATE `b$n` LEFT JOIN b USING (lot) SET `b$n`.uid = COALESCE(b.id, 0);");
mysqli_query($conn, "TRUNCATE b");
mysqli_query($conn, "INSERT INTO a ( Name, Team, cid, gendage, wc, lot) SELECT  Name, Team, cid, gendage, wc, lot FROM `a$n` ");
mysqli_query($conn, "UPDATE `a$n` LEFT JOIN a USING (lot) SET `a$n`.uid = COALESCE(a.id, 0);");

mysqli_query($conn, "TRUNCATE a");


header("Location:../scripts/lone1.php?r=$r1&w=$w&g=$g&q=$q&z=$z&n=$n1&sr=$sr");
