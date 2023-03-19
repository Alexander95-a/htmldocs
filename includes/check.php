<?php require_once("connect.php");

$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '2' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '1' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);

$gi = $ino["O$n"] ;
$j1=$ino['quid'];
$j1=$ino['quid'];
$y1=$ino['uid'];
$y2=$ino1['uid'];
$y3=$ino2['uid'];
$j2=$ino1['quid'];
$j3=$ino2['quid'];

$in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in2 = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in = mysqli_fetch_assoc($in);
$in2 = mysqli_fetch_assoc($in2);
$i1=$in['id'];
$i2=$in2['id'];

$j11=$ino['O1'];
$j21=$ino['O2'];
$j31=$ino['O3'];
$j41=$ino['O4'];
$j51=$ino['O5'];
$j61=$ino['O6'];
$j71=$ino['O7'];
$j81=$ino['O8'];
$j91=$ino['O9'];
$j101=$ino['O10'];
if ($j11==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;

    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
exit;
}
if ($j21==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j31==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j41==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j51==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j61==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j71==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j81==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j91==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}
if ($j101==$j2) {
    $check = 1;
    $name1 = 3;
    $name2 = 1;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");

}


$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '4' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '4' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '4' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);

$j1=$ino['quid'];
$y1=$ino['uid'];
$y2=$ino1['uid'];
$y3=$ino2['uid'];
$j2=$ino1['quid'];
$j3=$ino2['quid'];

$in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '4' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in2 = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in = mysqli_fetch_assoc($in);
$in2 = mysqli_fetch_assoc($in2);
$i1=$in['id'];
$i2=$in2['id'];
$j11=$ino['O1'];
$j21=$ino['O2'];
$j31=$ino['O3'];
$j41=$ino['O4'];
$j51=$ino['O5'];
$j61=$ino['O6'];
$j71=$ino['O7'];
$j81=$ino['O8'];
$j91=$ino['O9'];
$j101=$ino['O10'];
if ($j11==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;

}
if ($j21==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j31==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j41==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j51==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j61==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j71==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j81==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j91==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j101==$j2) {
    $check = 1;
    $name1 = 5;
    $name2 = 3;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}


$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '6' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '6' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '6' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);

$j1=$ino['quid'];
$y1=$ino['uid'];
$y2=$ino1['uid'];
$y3=$ino2['uid'];
$j2=$ino1['quid'];
$j3=$ino2['quid'];

$in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '6' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in2 = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in = mysqli_fetch_assoc($in);
$in2 = mysqli_fetch_assoc($in2);
$i1=$in['id'];
$i2=$in2['id'];

$j11=$ino['O1'];
$j21=$ino['O2'];
$j31=$ino['O3'];
$j41=$ino['O4'];
$j51=$ino['O5'];
$j61=$ino['O6'];
$j71=$ino['O7'];
$j81=$ino['O8'];
$j91=$ino['O9'];
$j101=$ino['O10'];
if ($j11==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;

}
if ($j21==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j31==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j41==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j51==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j61==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j71==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j81==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j91==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j101==$j2) {
    $check = 1;
    $name1 = 7;
    $name2 = 5;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}


$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '8' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '8' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '8' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);

$j1=$ino['quid'];
$y1=$ino['uid'];
$y2=$ino1['uid'];
$y3=$ino2['uid'];
$j2=$ino1['quid'];
$j3=$ino2['quid'];

$in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '8' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in2 = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in = mysqli_fetch_assoc($in);
$in2 = mysqli_fetch_assoc($in2);
$i1=$in['id'];
$i2=$in2['id'];

$j11=$ino['O1'];
$j21=$ino['O2'];
$j31=$ino['O3'];
$j41=$ino['O4'];
$j51=$ino['O5'];
$j61=$ino['O6'];
$j71=$ino['O7'];
$j81=$ino['O8'];
$j91=$ino['O9'];
$j101=$ino['O10'];
if ($j11==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;

    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;

}
if ($j21==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j31==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j41==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j51==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j61==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j71==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j81==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j91==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j101==$j2) {
    $check = 1;
    $name1 = 9;
    $name2 = 7;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}


$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '10' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '10' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '10' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);

$j1=$ino['quid'];
$y1=$ino['uid'];
$y2=$ino1['uid'];
$y3=$ino2['uid'];


$j2=$ino1['quid'];
$j3=$ino2['quid'];

$in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '10' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in2 = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$in = mysqli_fetch_assoc($in);
$in2 = mysqli_fetch_assoc($in2);
$i1=$in['id'];
$i2=$in2['id'];

$j11=$ino['O1'];
$j21=$ino['O2'];
$j31=$ino['O3'];
$j41=$ino['O4'];
$j51=$ino['O5'];
$j61=$ino['O6'];
$j71=$ino['O7'];
$j81=$ino['O8'];
$j91=$ino['O9'];
$j101=$ino['O10'];
if ($j11==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;

    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;

}
if ($j21==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j31==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j41==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j51==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;}
if ($j61==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;
}
if ($j71==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;}
if ($j81==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;}
if ($j91==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;}
if ($j101==$j2) {
    $check = 1;
    $name1 = 11;
    $name2 = 9;
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $check = 1;}