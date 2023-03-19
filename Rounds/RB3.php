<?php require_once("../includes/connect.php");
$sr=$_GET['sr'];
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$cc=$_GET['cc'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];
$e1=$info2['mrc'];
$f1=$info2['msc'];
$e2=$info2['rc'];
$f2=$info2['sc'];

$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

$info30 = mysqli_query($conn, "SELECT * FROM `person`" );

$info30= mysqli_fetch_assoc($info30);

$p3=$info30['Team2'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Поединок за 3е место</title>
</head>
<header>

    <?php require_once ("../includes/header.php");

    $ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
    $ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '2' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
    $ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '2' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

    $ino = mysqli_fetch_assoc($ino);
    $ino1 = mysqli_fetch_assoc($ino1);
    $ino2 = mysqli_fetch_assoc($ino2);

    $gi = $ino["O$n"] ;

    if ($gi== 0) {
        $j1=$ino['quid'];
        $j1=$ino['quid'];
        $y1=$ino['uid'];
        $y2=$ino1['uid'];
        $y3=$ino2['uid'];

        $j2=$ino1['quid'];
        $j3=$ino2['quid'];

        $in = mysqli_query($conn, "SELECT id FROM `$l$n`  WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
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

            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j21==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j31==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j41==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j51==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j61==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j71==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j81==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j91==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }
        if ($j101==$j2) {
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '99' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i2' WHERE  `$l$n`.`uid`= '$y1' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            $ino = mysqli_query($conn, "UPDATE `$l$n` SET `$l$n`.`id` = '$i1' WHERE  `$l$n`.`uid`= '$y3' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
        }

        mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot) SELECT  Name, Team, cid, gendage, wc, lot FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
        mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");

        mysqli_query($conn, "INSERT INTO a ( Name, Team, cid, gendage, wc, lot) SELECT  Name, Team, cid, gendage, wc, lot FROM `a$n`  where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w' ");
        mysqli_query($conn, "UPDATE a$n LEFT JOIN a USING (lot) SET a$n.uid = COALESCE(a.id, 0) where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w'");


        mysqli_query($conn, "TRUNCATE a");
        mysqli_query($conn, "TRUNCATE b");
    }

    $info = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `uid`= (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
    $info = mysqli_fetch_assoc($info);
    $s = $info['lot'];

    $value1 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
    $value2 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
    $val1 = mysqli_num_rows($value1);
    $val2 = mysqli_num_rows($value2);


    if($val1 - $val2 == 1)


        {
            mysqli_query($conn,"UPDATE `tablo1` SET `place` = '3', `PB` = '0' WHERE `tablo1`.`lot` = '$s' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
        }
    $info6 = mysqli_query($conn, "SELECT count(DISTINCT place) as count FROM tablo1 WHERE qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
    $info6 = mysqli_fetch_assoc($info6);
    $kk = $info6 ['count'];

    ?>


    <h> Matches for 3rd place  </h>
</header>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }
    td:nth-child(9){background: #696969;color: #fff;}
    td:nth-child(-n+8){background: #919191;color: #fff;}
    /*.link {color: white;text-decoration: none}*/



</style>
<body>
<form action="R.php" method="Get">


    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">
    <input type="text" hidden name="l" value="<?= $l ?>">
    <input type="text" hidden name="n" value="<?= $n ?>">

    <p>весовая категория</p>
    <select name="g">
        <option value="<?= $g ?>"><?= $p?></option>
        <option value="M">Mужчины</option>
        <option value="W">Женщины</option>
        <option value="JU">Юноши (12-13 лет)</option>
        <option value="JU-15B">Юноши (14-15 лет)</option>
        <option value="JU-17B">Юноши (16-17 лет)</option>
        <option value="JU-15G">Девушки (14-15 лет)</option>
        <option value="JU-17G">Девушки (16-17 лет)</option>
        <option value="JUN">Юниоры</option>
        <option value="JUR">Юниорки</option>
        <option value="VMI">Ветераны-мужчины </option>
        <option value="VW">Ветераны-женщины</option>
    </select>

    <?php
    if ($sr== 0){?>
        <select class="empty" name="sr">
            <option value="0">Выберите секретаря</option>
            <option value="1">Секретарь 1</option>
            <option value="2">Секретарь 2</option>
            <option value="3">Секретарь 3</option>
        </select>
        <?php
    }
    ?>

    <?php
    if ($sr!= 0){?>
        <select class="confirm" name="sr">
            <option value="<?= $sr ?>">Секретарь<?= $sr?></option>
            <option value="1">Секретарь 1</option>
            <option value="2">Секретарь 2</option>
            <option value="3">Секретарь 3</option>
        </select>
        <?php
    }
    ?>



    <select name="w">
        <option value="<?= $w ?>"><?php
            if($w==66){?> 65+
                <?php
            }
            ?>

            <?php
            if($w==71){?> 70+
                <?php
            }
            ?>
            <?php
            if($w==76){?> 75+
                <?php
            }
            ?>
            <?php
            if($w==81){?> 80+
                <?php
            }
            ?>
            <?php
            if($w==86){?> 85+
                <?php
            }
            ?>
            <?php
            if($w==96){?> 90+
                <?php
            }
            ?>
            <?php
            if($w==106){?> 105+
                <?php
            }
            ?>
            <?php
            if($w==126){?> 125+
                <?php
            }
            ?>
            <?php
            if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
                <?=$w?>
                <?php
            }
            ?></option>

        <option value="40">40</option>
        <option value="45">45</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="66">65+</option>
        <option value="70">70</option>
        <option value="71">70+</option>
        <option value="75">75</option>
        <option value="80">80</option>
        <option value="81">80+</option>
        <option value="85">85</option>
        <option value="86">85+</option>
        <option value="90">90</option>
        <option value="105">105</option>
        <option value="106">105+</option>
        <option value="125">125</option>
        <option value="126">125+</option>
        <option value="130">Абсолютная</option>

    </select>
    <select class="group" name="l">
        <option value="b">B Group</option>
        <option value="g">Round 1</option>
        <option value="a">A Group</option>
        
    </select>



    <select class="round" name="n" disabled>
        <option value="<?= $n ?>">Round <?= $n?></option>
        <option class="g" value="1">Round 1</option>

        <option class="a" value="2">Round 2</option>
        <option class="a" value="3">Round 3</option>
        <option class="a" value="4">Round 4</option>
        <option class="a" value="5">Round 5</option>
        <option class="a" value="6">Round 6</option>
        <option class="a" value="7">Round 7</option>
        <option class="a" value="8">Round 8</option>
        <option class="a" value="9">Round 9</option>
        <option class="a" value="10">Round 10</option>

        <option class="b" value="2">Round 2</option>
        <option class="b" value="3">Round 3</option>
        <option class="b" value="4">Round 4</option>
        <option class="b" value="5">Round 5</option>
        <option class="b" value="6">Round 6</option>
        <option class="b" value="7">Round 7</option>
        <option class="b" value="8">Round 8</option>
        <option class="b" value="9">Round 9</option>
        <option class="b" value="10">Round 10</option>
    </select>
    <script>
        $('.group').change(function(){
            $('.round').prop('selectedIndex', 0); //ощищаем select с моделями при каждом изменении select'а с марками
            var group = $(this).val(); //получаем value выбранной марки
            if(group != '') { //проверяем, выбрана ли хоть какая-то марка
                $('.round').attr('disabled',false); //открываем select с моделями
                $('.round option').css('display','none'); //сначала скрываем все модели
                $('.round option.'+group).css('display','inline'); //затем открываем те, которые нам нужны
            }
            else {
                $('.round').attr('disabled',true); //если не выбрана ни одна марка, скрываем select с моделями
            }
        });
    </script>
    <?php
    if ($sr!= 0){?>
        <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
        <?php
    }
    ?>
    <br> <br>
    <button class="button" type="submit">Enter</button>
</form>
<div style="float:left;">

    <p><?= $d ?>, <?= $p ?>:<?php
        if($w==66){?> 65+
            <?php
        }
        ?>

        <?php
        if($w==71){?> 70+
            <?php
        }
        ?>
        <?php
        if($w==76){?> 75+
            <?php
        }
        ?>
        <?php
        if($w==81){?> 80+
            <?php
        }
        ?>
        <?php
        if($w==86){?> 85+
            <?php
        }
        ?>
        <?php
        if($w==96){?> 90+
            <?php
        }
        ?>
        <?php
        if($w==106){?> 105+
            <?php
        }
        ?>
        <?php
        if($w==126){?> 125+
            <?php
        }
        ?>
        <?php
        if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=91&$w!=96&$w!=106&$w!=126){?>
            <?=$w?>
            <?php
        }
        ?> kg</p>
    <!-- <p><?= $j11 ?><?= $j2 ?></p> -->
<div style="text-align: center;">
    <table width="100%" border="0" cellpadding="5" cellspacing="0"  style="text-align: center;" >
        <col width="300" valign="top">
        <col width="300" valign="top">
        
        <tr>
            <div class="container">
            <div>
                <td  style="background: #ffffff; vertical-align: top; padding: 1px;">
                    <table width="600" style="float: right;">
                            <tr>
                                <th colspan="5">Date:<?= $a ?>- <?= $a2 ?></th>
                            </tr>

                            <tr>
                                <th colspan="5">Red side</th>
                            </tr>
                            <tr>
                                <th>№</th>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Win</th>
                                <th>Lose</th>
                            </tr>
                        <?php
                        $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");

                        foreach ($info as $info){
                        ?>
                        <tr>
                            <td><?=$info['uid']?></td>
                            <td><?= $info['Name']?></td>
                            <td><?=$info['Team']?></td> <!-- команда-->
                            <td><?=$info["R$n"]?></td><!-- победа-->
                            <td><?=$info["L$n"]?></td><!-- поражение-->
                           
                            <?php
                            }
                            ?>
                    </table>
                </td>
            </div>
                <div> 
                <td style="background: #ffffff; vertical-align: top ; padding: 1px;">   

                    <table width="700" style="float: left;"> 
                        <tr>
                            <th style="background: #fff; color: #fff"></th>
                            <th colspan="6"> Venue: <?= $c ?>, <?= $b ?></th>

                        </tr>
                        <tr>
                            <th style="background: #fff; color: #fff" ></th>
                            <th colspan="6">Blue side</th>
                        </tr>
                        <tr>
                            <th>VS</th>
                            <th>Win</th>
                            <th>Lose</th>
                            <th>Name</th>
                            <th>Team</th>
                            <th>№</th>
                        </tr>

                        <?php
                        $info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1`  using (lot) WHERE `$l$n`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

                        foreach ($info1 as $info1){
                            ?>
                            <?php
                                    if ($sr==0) {
                                    ?>
                                <td>Выберите № секретаря</td>
                                <?php
                                    }
                                ?>
                                <?php
                                    if ($sr>0) {
                                    ?>
                                <td <?php
                                 $jr = $info1['lot'];
                                 $info2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`lot`= '$jr' AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                 $info2 = mysqli_fetch_assoc($info2);
                                 $jq = $info2["R$n"];
                                 $cn = $info2["L$n"];
                                ?>

                                style="text-align: center; 
                                <?php
                                    if($cn == 2 || $jq == 2 )
                                    {
                                    ?>
                                        background-color: #28c536;
                                        <?php
                                        }
                                        else {?>
                                            background-color: red;
                                            <?php
                                                }                                 
                                                ?>"><a href="../scripts/updB.php?l=<?=$l?>&id=<?= $info1["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3" class="link">Update</a></td>
                                                  <?php
                                            }
                                ?>
                            <td><?=$info1["R$n"]?></td><!-- победа-->
                            <td><?=$info1["L$n"]?></td><!-- поражение-->
                            <td><?=$info1['Name']?></td>
                            <td><?=$info1['Team']?></td> <!-- команда-->
                            <td><?=$info1['uid']?></td>

                             
                            </tr>

                            <?php
                        }
                        ?>
                       
                    </table>
                </td>
            </div> 
            </div> 
        </tr>
    </table>
</div>
        <br>
        <br>
        <h4>
            Chief secretary,
            <?= $f2 ?>: ____________________\ <?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4>
            
            Chief Referee,
            <?= $e2 ?>: ____________________\ <?= $e ?> (<?= $e1 ?>)
        </h4>
    <a href="../Rounds/RA3.php?l=a&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?=$sr?>" class="button">Завершить раунд</a>
<!--    <p>--><?//= $l ?><!--</p>-->
<!--    <p>--><?//= $cc ?><!--</p>-->
<!--    <p>--><?//= $kk ?><!--</p>-->


</div>
</body>
</html>
