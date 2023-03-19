<?php require_once("../includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$t1=$_GET['t1'];
$t2=$_GET['t2'];
$sr=$_GET['sr'];

if($sr==1) {
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '1' ");
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '2' ");
}
if($sr==2) {
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '3' ");
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '4' ");
}
if($sr==3) {
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '5' ");
    mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '6' ");
}



header("Location:../Rounds/RB3.php?l=$l&n=$n&w=$w&g=$g&q=$q&z=$z&sr=$sr");
