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
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Протокол соревнования <?= $p ?>: <?= $w ?>кг</title>



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
        html, body {
		font-size: 14px;
        }
        h1 {
            font-size: 24px;
        }
        h2 {
            font-size: 20px;
        }
        h3 {
            font-size: 18px;
        }
        td {
            font-size: 14px;
        }
        th {
            font-size: 14px;
            color: black;
        }
        
        
        html, body{
		height: 297mm;
		width: 210mm;
	    }
        *, *:before, *:after { 
		color: #000;
		box-shadow: none;
		text-shadow: none;
	    }

    }

</style>

<script>
    function printDiv() {
        window.frames["print_frame"].document.body.innerHTML = document.getElementById("printableTable").innerHTML;
        window.frames["print_frame"].window.focus();
        window.frames["print_frame"].window.print();
    }
</script>
<form action="protocol.php" method="Get">




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
    <br> <br>
    <button type="submit" class="add">Enter</button>
</form>
<body>
<div id="printableTable" >
    <table >
    <h3><?= $d ?></h3>

    <tr>
        <th colspan="7">Дата : <?= $a ?> - <?= $a2 ?></th>
        <th colspan="30"> <?= $p ?> : <?= $w ?>кг</th>
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
        <th colspan="30">Раунды</th>
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


</div>
<iframe name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>

<a href="#" onclick="window.print();return false;">Распечатать</a>



</body>
</html>

