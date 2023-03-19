<?php require_once("../includes/connect.php");
require_once("../includes/header.php");


$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$r = $_GET['r'];
$q=$_GET['q'];
$di=$_GET['di'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];
/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `c$n`  WHERE uid = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");
$info = mysqli_fetch_assoc($info);
$lot = $info['lot'];
$q = $_GET['q'];
$N1 = $info['Name'];
$T1 = $info['Team'];
$uid1=$info['uid'];
$z = $info['cid'];
$g =$info['gendage'];
$w =$info['wc'];


mysqli_query($conn,"INSERT INTO `c$r` ( `uid`, `Name`, `Team`, `Time`, `lot`, `cid`, `gendage`, `wc`) SELECT '$uid1', '$N1', '$T1', '$lot', '$lot', '$z', '$g', '$w'");
header("Location:../Rounds/C$n.php?w=$w&g=$g&q=$q&z=$z&sr=$sr&cc=$cc");
?>

