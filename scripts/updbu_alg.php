<?php require_once("../includes/connect.php");
$id = $_POST['id'];
$id2 = $_POST['id2'];
$score = $_POST['score'];
$Time = $_POST['Time'];
$Tex = $_POST['Tex'];
$lose = $_POST['lose'];
$di = $_POST['di'];
$N1 = $_POST['N1'];
$sr = $_POST['sr'];
$N2 = $_POST['N2'];
$r = $_POST['r'];
$T1 = $_POST['T1'];
$T2 = $_POST['T2'];
$uid1 = $_POST['uid1'];
$uid2 = $_POST['uid2'];
$ui1 = $_POST['ui1'];
$ui2 = $_POST['ui2'];
$uidb1 = $_POST['uidb1'];
$uidb2 = $_POST['uidb2'];
$q=$_POST['q'];
$z=$_POST['z'];
$g=$_POST['g'];
$w=$_POST['w'];
$l=$_POST['l'];
$gi=$_POST['gi'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$o1=$_POST['o1'];
$para1=$_POST['para1'];
$para=$_POST['para'];
/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn,"UPDATE `tablo1` SET `R$di` ='$score',`O$di` = '$ui2' , `Scores` = `R1` + `R2` + `R3` + `R4` + `R5` + `R6` + `R7` + `R8` + `R9` + `R10`, `Wins` = `Scores`, `L$di` = '$lose', `lose` = `L1` + `L2` + `L3` + `L4` + `L5` + `L6` + `L7` + `L8` + `L9` + `L10`, `m$di` = `R$di`, `PB`= '$di' WHERE `tablo1`.`lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
mysqli_query($conn,"UPDATE `tablo1` SET `R$di` = '$lose', `O$di` = '$ui1' , `Scores` = `R1` + `R2` + `R3` + `R4` + `R5` + `R6` + `R7` + `R8` + `R9` + `R10`, `Wins` = `Scores`, `L$di` = '$score', `lose` = `L1` + `L2` + `L3` + `L4` + `L5` + `L6` + `L7` + `L8` + `L9` + `L10`, `m$di` = `R$di`, `PB`= '$di' WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");


if($para==1){
    mysqli_query($conn,"UPDATE `tablo1` SET `para` = '$para',`O$di` = '$uid2' , `m$di` = 'неявка', `PB`= '$di' WHERE `tablo1`.`lot` = $id AND `qid` = '$z' and `qga` = '$g' and `qwc` = '$w' ");
}
if($para==2){
    mysqli_query($conn,"UPDATE `tablo1` SET `para` = '$para',`O$di` = '$uid2' , `m$di` = 'сн врачом', `PB`= '$di' WHERE `tablo1`.`lot` = $id AND `qid` = '$z' and `qga` = '$g' and `qwc` = '$w' ");
}
if($para1==1){
    mysqli_query($conn,"UPDATE `tablo1` SET `para` = '$para1',`O$di` = '$uid1' , `m$di` = 'неявка', `PB`= '$di' WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z' and `qga` = '$g' and `qwc` = '$w' ");
}
if($para1==2){
    mysqli_query($conn,"UPDATE `tablo1` SET `para` = '$para1',`O$di` = '$uid1' , `m$di` = 'сн врачом', `PB`= '$di' WHERE `tablo1`.`lot` = $id2 AND `qid` = '$z' and `qga` = '$g' and `qwc` = '$w' ");
}
if($para==0){
    mysqli_query($conn,"INSERT INTO `u$r` (`id`, `uid`, `Name`, `Team`, `lot2`, `lot`, `cid`, `gendage`, `wc`, `uidb`) SELECT NULL,'$uid1', '$N1', '$T1', '$id', '$id', '$z', '$g', '$w','$uidb1' FROM `tablo1` WHERE `R$di`= 2 AND `lot` = $id AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
}
if($para1==0){
    mysqli_query($conn,"INSERT INTO `u$r` (`id`, `uid`, `Name`, `Team`, `lot2`, `lot`, `cid`, `gendage`, `wc`, `uidb`) SELECT NULL,'$uid2', '$N2', '$T2', '$id2', '$id2', '$z', '$g', '$w','$uidb2' FROM `tablo1` WHERE `R$di`= 2 AND `lot` = $id2 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");

}



/*
 * Переадресация на главную страницу
 */

header("Location:../scripts/updu.php?w=$w&g=$g&q=$q&z=$z&n=$di&l=$l&id=$uid1&gi=$gi&sr=$sr&t=1&ch1=$ch1&ch2=$ch2&ch3=$ch3&ch4=$ch4&o1=$o1");