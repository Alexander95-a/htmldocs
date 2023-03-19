<?php require_once("../includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
error_reporting(E_ALL);
ini_set("display_errors", 1);
$info = mysqli_query($conn, "SELECT * FROM `comp` WHERE `cid`='$z';");

$info = mysqli_fetch_assoc($info);
$st = $info["mesto"];
if ($st==1){
    $qt=3;
}
if ($st==2){
    
    $qt=4;
}
mysqli_query($conn, "SELECT * FROM `tablo1` WHERE `lot` != 0 and `qwc` = '$w' and `qid`='$z' AND `qga` LIKE '$g' and `para`='0' and `place`='0';");
mysqli_query($conn, "UPDATE `tablo1` SET `Scores`= (`Wins`-`lose`)  WHERE `lot` != 0 and `qwc` = '$w' and `qid`='$z' AND `qga` LIKE '$g' and id =id");
mysqli_query($conn, "UPDATE `tablo1` SET `schet`= `Scores` - (`weight`/100)+(`PB`*5)  WHERE `lot` != 0 and `qwc` = '$w' and `qid`='$z' AND `qga` LIKE '$g' and id =id and `para`='0' and `para`!='1' AND `place`='0'");

//mysqli_query($conn, "UPDATE tablo1 set `schet`=('300'-`weight`-`lose`+`Wins`+`PB`) WHERE id=id and `qwc` = '$w' AND `qga` LIKE '$g' and `para`='0' AND `place`='0' and `qid`='$z'");
mysqli_query($conn, "INSERT INTO `mest1` (`id`, `lot`, `schet`) SELECT '', tablo1.lot, tablo1.schet FROM tablo1 WHERE `lot` != 0 and `para`!='1' AND `place` = '0' and `qid`= '$z' and  `qga` like '$g' and `qwc`= '$w' ORDER BY tablo1.schet desc ");
mysqli_query($conn, "INSERT INTO mest2 (  lot, schet) SELECT  lot, schet FROM mest1  ORDER BY `mest1`.`schet` DESC, `mest1`.`lot` DESC");
mysqli_query($conn, "INSERT INTO mest3 ( uid, lot, schet, place) SELECT id, lot, schet, (id+'$qt')  FROM mest2");

mysqli_query($conn, "UPDATE tablo1 JOIN mest3 ON tablo1.schet=mest3.schet and tablo1.qid='$z' and tablo1.qga LIKE '$g' and tablo1.qwc = '$w'  set tablo1.place=mest3.place where tablo1.lot=mest3.lot ");
//mysqli_query($conn, "UPDATE tablo1 JOIN mest3 ON tablo1.schet=mest3.schet  set tablo1.place=mest3.place ");

usleep(500);
mysqli_query($conn, "Truncate mest1");
mysqli_query($conn, "Truncate mest2");
mysqli_query($conn, "Truncate mest3");


?>

   <?php

header("Location:../protocol.php?w=$w&g=$g&q=$q&z=$z");
