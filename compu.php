<?php require_once("includes/connect.php");


$a=$_GET['1'];
$b=$_GET['2'];
$c=$_GET['3'];
$d=$_GET['4'];
$e=$_GET['5'];
$f=$_GET['6'];
$q=$_GET['q'];

mysqli_query($conn,"UPDATE `comp` SET `cid` = `id` * 10 WHERE `comp`.`id` = '$q';");
$info1 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q';");
$info1 = mysqli_fetch_assoc($info1);
$z=$info1['cid'];

header("Location:/Person.php?a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&q=$q&z=$z");
