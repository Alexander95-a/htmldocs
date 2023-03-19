
<?php require_once("connect.php");
require_once("head.php");

//mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '1' ");
//mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '2' ");

$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];


$info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where $l$n.`cid` = '$z' and `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '$info_id' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')AND qid = '$z'");
$info = mysqli_fetch_assoc($info);
$info1 = mysqli_fetch_assoc($info1);

$id=$info["lot"];
$h1=$info["uid"];
$h2=$info["Team"];
$h3=$info["Name"];
$h6=$info["R$n"];

$id2=$info1["lot"];
$p1=$info1["uid"];
$p2=$info1["Team"];
$p3=$info1["Name"];
$p6=$info1["R$n"];



mysqli_query($conn,"INSERT INTO `cb` (`id`, `uid`, `fio`, `country`, `lot`, `cid`, `gender`, `weight`, `score`, `round`,  `sec`) SELECT NULL,'2', '$h3', '$h2', '$id', '$z', '$g', '$w', '$h6', '$n','121'  FROM `tablo1`  where `tablo1`.`lot` = '$id'  AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
mysqli_query($conn,"INSERT INTO `cb` (`id`, `uid`, `fio`, `country`, `lot`, `cid`, `gender`, `weight`, `score`, `round`, `sec`) SELECT NULL,'1', '$p3', '$p2', '$id2', '$z', '$g', '$w', '$p6', '$n','121' FROM `tablo1` where `tablo1`.`lot` = '$id2'  AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");


mysqli_query($conn, "UPDATE cb JOIN tablo1 ON tablo1.lot=cb.lot set cb.score=tablo1.`R$n` where qid = '$z'");
?>