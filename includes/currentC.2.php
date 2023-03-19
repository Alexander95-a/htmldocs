
<?php require_once("connect.php");
require_once("header.php");


$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];


$info8 = mysqli_query($conn, "SELECT * FROM `c$n` INNER JOIN `tablo1` using (lot) WHERE `c$n`.`uid` = '$y' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");
$info9 = mysqli_query($conn, "SELECT * FROM `c$n`INNER JOIN `tablo1` using (lot) WHERE `c$n`.`uid` = '$x' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$info8 = mysqli_fetch_assoc($info8);
$info9 = mysqli_fetch_assoc($info9);


$id=$info8["lot"];
$h1=$info8["uid"];
$h2=$info8["Team"];
$h3=$info8["Name"];
$h6=$info8["R$n"];

$id2=$info9["lot"];
$p1=$info9["uid"];
$p2=$info9["Team"];
$p3=$info9["Name"];
$p6=$info9["R$n"];

//mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '3' ");
//mysqli_query($conn, "DELETE FROM `cb` WHERE `cb`.`uid` = '4' ");

mysqli_query($conn,"INSERT INTO `cb` (`id`, `uid`, `fio`, `country`, `lot`, `cid`, `gender`, `weight`, `score`, `round`,  `sec`) SELECT NULL,'4', '$h3', '$h2', '$id', '$z', '$g', '$w', '$h6', '$n','121'  FROM `tablo1`  where `tablo1`.`lot` = '$id'  AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
mysqli_query($conn,"INSERT INTO `cb` (`id`, `uid`, `fio`, `country`, `lot`, `cid`, `gender`, `weight`, `score`, `round`, `sec`) SELECT NULL,'3', '$p3', '$p2', '$id2', '$z', '$g', '$w', '$p6', '$n','121' FROM `tablo1` where `tablo1`.`lot` = '$id2'  AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");


mysqli_query($conn, "UPDATE cb JOIN tablo1 ON tablo1.lot=cb.lot set cb.score=tablo1.`R$n` where qid = '$z'");
?>