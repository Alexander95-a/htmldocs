<?php require_once("includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
require_once("includes/header.php");
$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$a2=$info2['date2'];
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

$info5 = mysqli_query($conn, "SELECT count(*) FROM `u3` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$info5 = mysqli_fetch_assoc($info5);
    $c1 = $info5 ['count(*)'];
    if ($c1==2) {
      
        $info6 = mysqli_query($conn, "SELECT * FROM `u3` INNER JOIN `tablo1` using (lot) WHERE `u3`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'   AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u3`.`uid` ASC ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u3` INNER JOIN `tablo1`  using (lot) WHERE `u3`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u3`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u4` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c2 = $info5 ['count(*)'];
    if ($c2==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u4` INNER JOIN `tablo1` using (lot) WHERE `u4`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'   AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u4`.`uid` ASC ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u4` INNER JOIN `tablo1`  using (lot) WHERE `u4`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u4`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u5` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c3 = $info5 ['count(*)'];
    if ($c3==2) {
        
        $info6 = mysqli_query($conn, "SELECT * FROM `u5` INNER JOIN `tablo1`  using (lot) WHERE `u5`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u5`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u5` INNER JOIN `tablo1`  using (lot) WHERE `u5`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u5`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u6` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c4 = $info5 ['count(*)'];
    if ($c4==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u6` INNER JOIN `tablo1`  using (lot) WHERE `u6`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u6`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u6` INNER JOIN `tablo1`  using (lot) WHERE `u6`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u6`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u7` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c5 = $info5 ['count(*)'];
    if ($c5==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u7` INNER JOIN `tablo1`  using (lot) WHERE `u7`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u7`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u7` INNER JOIN `tablo1`  using (lot) WHERE `u7`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u7`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u8` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c6 = $info5 ['count(*)'];
    if ($c6==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u8` INNER JOIN `tablo1`  using (lot) WHERE `u8`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u8`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u8` INNER JOIN `tablo1`  using (lot) WHERE `u8`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u8`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u9` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c7 = $info5 ['count(*)'];
    if ($c7==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u9` INNER JOIN `tablo1`  using (lot) WHERE `u9`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u9`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u9` INNER JOIN `tablo1`  using (lot) WHERE `u9`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u9`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `u10` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c8 = $info5 ['count(*)'];
    if ($c8==2) {
       
        $info6 = mysqli_query($conn, "SELECT * FROM `u10` INNER JOIN `tablo1`  using (lot) WHERE `u10`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u10`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot1=$info6['quid'];
        $info6 = mysqli_query($conn, "SELECT * FROM `u10` INNER JOIN `tablo1`  using (lot) WHERE `u10`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `u10`.`uid` ASC  ");
        $info6 = mysqli_fetch_assoc($info6);
        $lot2=$info6['quid'];
        $ww=2;
    }
    

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Протокол соревнования <?= $p ?>: <?= $w ?>кг </title>



</head>

<style>
    table {

        width: 1400px;
        height: 800px;
        border-collapse: collapse;
        font-size: 8pt;
        border: 2px solid black;

    }



    th {
        background: #606060;
        color: #fff;
        border-collapse: collapse;
        padding: 8px 11px 2px;
        text-align: center;
        border: 2px solid black
    }





    td {


        padding: 2px 4px 2px;

        border: 1px solid ;

        text-align: center;

    }

    @media print {


        #head {
            display: flex;
        }
        #printableTable {
            display: block;
            visibility: visible;
            margin-top: -180px;

        }
        body{
            visibility: hidden;
        }
        .pagebreak { page-break-before: always; } /* page-break-after works, as well */
    }

</style>

<script>
    function printDiv() {
        window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();

    }
</script>
<form action="protocolB.php" method="Get">




    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">

    <h3>Выберите весовую категорию.</h3>

    <!--    <select name="z">-->
    <!--        --><?php
    //
    //        $info1 = mysqli_query($conn,  "SELECT * FROM `comp` ");
    //        $info1 = mysqli_fetch_assoc($info1);
    //        foreach ($info1 as $info1)
    //        {
    //            ?>
    <!---->
    <!--            <option value="--><?//=$info1['cid']?><!--">--><?//=$info1['Name']?><!--</option>-->
    <!---->
    <!---->
    <!--            --><?php
    //        }
    //        ?>


    </select>
    <select name="g">
        <option value="<?= $g ?>"><?= $p?></option>
        <option value="M">Mужчины</option>
        <option value="W">Женщины</option>
        <option value="JU">Юноши (12-13 лет)</option>
        <option value="JU-1B">Юноши (14-15 лет)</option>
        <option value="JU-2B">Юноши (16-17 лет)</option>
        <option value="JU-1G">Девушки (14-15 лет)</option>
        <option value="JU-2G">Девушки (16-17 лет)</option>
        <option value="JUN">Юниоры</option>
        <option value="JUR">Юниорки</option>
        <option value="VMI">Ветераны-мужчины (I мастер) </option>
        <option value="VMII">Ветераны-мужчины (II мастер)</option>
        <option value="VW">Ветераны-женщины</option>
    </select>



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
    <br> <br>
    <button type="submit" class="add">Enter</button>
</form>
<body>
<div id="printableTable" >
    <table >
    <h3><?= $d ?> </h3>

    <tr>
        <th colspan="7">Дата : <?= $a ?> - <?= $a2 ?></th>
        <th colspan="33"> <?= $p ?> : <?= $w ?>кг</th>
        <th colspan="5"><?= $c ?>:<?= $b ?></th>
    </tr>

    <tr>
        <th rowspan="2">№</th>
        <th rowspan="2">Жребий</th>
        <th rowspan="2">ФИО</th>
        <th rowspan="2">Вес</th>
        <th rowspan="2">Дата рождения</th>
        <th rowspan="2">Команда</th>
        <th rowspan="2">Разряд</th>
        <th colspan="33">Rounds</th>
        <th rowspan="2">Выбытие</th>
        <th rowspan="2">побед</th>
        <th rowspan="2">поражений</th>
        <th rowspan="2">очков</th>
        <th rowspan="2">Место</th>
    </tr>
    <tr>
        <th colspan="3">CP</th>
        <th colspan="3">1</th>
        <th colspan="3">2</th>
        <th colspan="3">3</th>
        <th colspan="3">4</th>
        <th colspan="3">5</th>
        <th colspan="3">6</th>
        <th colspan="3">7</th>
        <th colspan="3">8</th>
        <th colspan="3">9</th>
        <th colspan="3">10</th>

    </tr>
    <?php
   
    $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  ORDER BY `tablo1`.`lot` ASC ");



    foreach ($info as $info) {
        ?>
        <tr>
            <td rowspan="2"><?= $info["quid"]?></td> <!-- id-->
            <td rowspan="2"><?= $info["lot"]?></td> <!-- id-->
            <td rowspan="2"><?=$info['Name']?></td> <!-- Фио-->
            <td rowspan="2"><?=$info['weight']?></td> <!-- вес-->
            <td rowspan="2"><?=$info['BD']?></td> <!-- год рождения-->
            <td rowspan="2"><?= $info['Team']?></td>
            <td rowspan="2"><?= $info['ks']?></td><!-- команда-->
            <td rowspan="2"><?= $info['OC']?></td> <!-- противник-->
            <td ><?=$info['RC']?></td> <!-- победа-->
            <td ><?=$info["LC"]?></td> <!-- поражение-->
            <td rowspan="2"><?= $info['O1']?></td> <!-- противник-->
            <td ><?=$info['R1']?></td> <!-- победа-->
            <td ><?=$info["L1"]?></td> <!-- поражение-->
            <td rowspan="2"><?=$info['O2']?></td>
            <td ><?=$info['R2']?></td>
            <td ><?=$info['L2']?></td>
            <td rowspan="2"><?= $info['O3']?></td>
            <td ><?=$info['R3']?></td>
            <td ><?=$info['L3']?></td>
            <td rowspan="2"><?=$info['O4']?></td>
            <td ><?=$info['R4']?></td>
            <td ><?=$info['L4']?></td>
            <td rowspan="2"><?=$info['O5']?></td>
            <td ><?=$info['R5']?></td>
            <td ><?=$info['L5']?></td>
            <td rowspan="2"><?=$info['O6']?></td>
            <td ><?=$info['R6']?></td>
            <td ><?=$info['L6']?></td>
            <td rowspan="2"><?=$info['O7']?></td>
            <td ><?=$info['R7']?></td>
            <td ><?=$info['L7']?></td>
            <td rowspan="2"><?=$info['O8']?></td>
            <td ><?=$info['R8']?></td>
            <td ><?=$info['L8']?></td>
            <td rowspan="2"><?=$info['O9']?></td>
            <td ><?=$info['R9']?></td>
            <td ><?=$info['L9']?></td>
            <td rowspan="2"><?=$info['O10']?></td>
            <td ><?=$info['R10']?></td>
            <td ><?=$info['L10']?></td>
            <td rowspan="2"><?=$info['PB']?></td> <!-- выбытие-->
            <td rowspan="2"><?=$info['Wins']?></td> <!-- Побед-->
            <td rowspan="2"><?= $info["lose"]?></td> <!-- Поражений-->
            <td rowspan="2"><?= $info['Wins'] - $info['lose']?></td> <!-- Очков-->
            <td rowspan="2"><?= $info['place']?></td> <!-- Очков-->




        </tr>
        <tr>
            <td colspan="2"><?=$info['mc']?></td>
            <td colspan="2"><?=$info['m1']?></td> <!-- счет-->
            <td colspan="2"><?=$info['m2']?></td>
            <td colspan="2"><?=$info['m3']?></td>
            <td colspan="2"><?=$info['m4']?></td>
            <td colspan="2"><?=$info['m5']?></td>
            <td colspan="2"><?=$info['m6']?></td>
            <td colspan="2"><?=$info['m7']?></td>
            <td colspan="2"><?=$info['m8']?></td>
            <td colspan="2"><?=$info['m9']?></td>
            <td colspan="2"><?=$info['m10']?></td>



        </tr>
        <?php
    }
    ?>

    

    </table>
    <br>
    <h4>
        Главный секретарь <?= $f2 ?>) : ____________________\<?= $f ?> (<?= $f1 ?>)
    </h4>
    <h4>
        Главный судья <?= $e2 ?> : _____________________\<?= $e ?> (<?= $e1 ?>/)
    </h4>
    <div class="pagebreak" style="visibility: 
            <?php

                if($ww == 2){?>
                    visible;
                <?php
                    }
                else
                    {?>
                    hidden;
                <?php
                }
            ?>"> 
        <table>
            <tr>
                <th colspan="42"> Утещительные</th>
            </tr>

            <tr>
                <th rowspan="2">№</th>
                <th rowspan="2">Жребий</th>
                <th rowspan="2">ФИО</th>
                <th rowspan="2">Вес</th>
                <th rowspan="2">Дата рождения</th>
                <th rowspan="2">Команда</th>
                <th rowspan="2">Разряд</th>
                <th colspan="30">Rounds</th>
                <th rowspan="2">Выбытие</th>
                <th rowspan="2">побед</th>
                <th rowspan="2">поражений</th>
                <th rowspan="2">очков</th>
                <th rowspan="2">Место</th>
            </tr>
            <tr>
                <th colspan="3">1</th>
                <th colspan="3">2</th>
                <th colspan="3">3</th>
                <th colspan="3">4</th>
                <th colspan="3">5</th>
                <th colspan="3">6</th>
                <th colspan="3">7</th>
                <th colspan="3">8</th>
                <th colspan="3">9</th>
                <th colspan="3">10</th>

            </tr>
            <?php
            $info7 = mysqli_query($conn, "SELECT * FROM `g1`  where `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  ORDER BY `tablo1`.`lot` ASC ");

            $info1 = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE qwc='$w' AND qga like '$g' and `quid`!= '$lot2'   AND (O1='$lot1' or O2='$lot1' or O2='$lot1' or O3='$lot1' or O4='$lot1' or O5='$lot1' or O6='$lot1' or O7='$lot1' or O8='$lot1' or O9='$lot1' or O10='$lot1' ) or qwc='$w' AND qga like '$g' and `quid`!= '$lot1' AND (O1='$lot2' or O2='$lot2' or O2='$lot2' or O3='$lot2' or O4='$lot2' or O5='$lot2' or O6='$lot2' or O7='$lot2' or O8='$lot2' or O9='$lot2' or O10='$lot2')  and `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  ORDER BY `tablo1`.`lot` ASC ");



            foreach ($info1 as $info1) {
                ?>
                <tr>
                    <td rowspan="2"><?= $info1["quid"]?></td> <!-- id-->
                    <td rowspan="2"><?= $info1["lot"]?></td> <!-- id-->
                    <td rowspan="2"><?=$info1['Name']?></td> <!-- Фио-->
                    <td rowspan="2"><?=$info1['weight']?></td> <!-- вес-->
                    <td rowspan="2"><?=$info1['BD']?></td> <!-- год рождения-->
                    <td rowspan="2"><?= $info1['Team']?></td>
                    <td rowspan="2"><?= $info1['ks']?></td><!-- команда-->
                    <td rowspan="2"><?= $info1['UO1']?></td> <!-- противник-->
                    <td ><?=$info1['UR1']?></td> <!-- победа-->
                    <td ><?=$info1["UL1"]?></td> <!-- поражение-->
                    <td rowspan="2"><?=$info1['UO2']?></td>
                    <td ><?=$info1['UR2']?></td>
                    <td ><?=$info1['UL2']?></td>
                    <td rowspan="2"><?= $info1['UO3']?></td>
                    <td ><?=$info1['UR3']?></td>
                    <td ><?=$info1['UL3']?></td>
                    <td rowspan="2"><?=$info1['UO4']?></td>
                    <td ><?=$info1['UR4']?></td>
                    <td ><?=$info1['UL4']?></td>
                    <td rowspan="2"><?=$info1['UO5']?></td>
                    <td ><?=$info1['UR5']?></td>
                    <td ><?=$info1['UL5']?></td>
                    <td rowspan="2"><?=$info1['UO6']?></td>
                    <td ><?=$info1['UR6']?></td>
                    <td ><?=$info1['UL6']?></td>
                    <td rowspan="2"><?=$info1['UO7']?></td>
                    <td ><?=$info1['UR7']?></td>
                    <td ><?=$info1['UL7']?></td>
                    <td rowspan="2"><?=$info1['UO8']?></td>
                    <td ><?=$info1['UR8']?></td>
                    <td ><?=$info1['UL8']?></td>
                    <td rowspan="2"><?=$info1['UO9']?></td>
                    <td ><?=$info1['UR9']?></td>
                    <td ><?=$info1['UL9']?></td>
                    <td rowspan="2"><?=$info1['UO10']?></td>
                    <td ><?=$info1['UR10']?></td>
                    <td ><?=$info1['UL10']?></td>
                    <td rowspan="2"><?=$info1['PB']?></td> <!-- выбытие-->
                    <td rowspan="2"><?=$info1['Wins']?></td> <!-- Побед-->
                    <td rowspan="2"><?= $info1["lose"]?></td> <!-- Поражений-->
                    <td rowspan="2"><?= $info1['Wins'] - $info1['lose']?></td> <!-- Очков-->
                    <td rowspan="2"><?= $info1['place']?></td> <!-- Очков-->
                </tr>
                <tr>
                    <td colspan="2"><?=$info1['um1']?></td> <!-- счет-->
                    <td colspan="2"><?=$info1['um2']?></td>
                    <td colspan="2"><?=$info1['um3']?></td>
                    <td colspan="2"><?=$info1['um4']?></td>
                    <td colspan="2"><?=$info1['um5']?></td>
                    <td colspan="2"><?=$info1['um6']?></td>
                    <td colspan="2"><?=$info1['um7']?></td>
                    <td colspan="2"><?=$info1['um8']?></td>
                    <td colspan="2"><?=$info1['um9']?></td>
                    <td colspan="2"><?=$info1['um10']?></td>



                </tr>
                <?php
            }
            ?>
        </table>
    </div>
    <h4>
        Главный секретарь <?= $f2 ?>) : ____________________\<?= $f ?> (<?= $f1 ?>)
    </h4>
    <h4>
        Главный судья <?= $e2 ?> : _____________________\<?= $e ?> (<?= $e1 ?>/)
    </h4>


</div>
<iframe name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>

<a href="#" onclick="window.print();return false;">Распечатать</a>