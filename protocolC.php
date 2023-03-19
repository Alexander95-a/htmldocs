<?php require_once("includes/connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$a2=$info2['date2'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];

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

        width: 1000px;

        border-collapse: collapse;

        border: 2px solid black;

    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #606060;
        color: #fff;
        border-collapse: collapse;

        border: 2px solid black
    }




    td {


        padding: 3px;

        border: 1px solid ;

        text-align: center;

    }

    @media print {

        #head {
            display: flex;
        }
        #printableTable {
            display: block;
        }
        #no {
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
<body>

<div id="printableTable">
    <table >
    <p><?= $d ?></p>

    <tr>
        <th colspan="5">Дата:<?= $a ?>- <?= $a2 ?></th>
        <th colspan="15"> <?= $p ?> : <?= $w ?>кг</th>
        <th colspan="4"><?= $c ?>:<?= $b ?></th>
    </tr>

    <tr>
        <th rowspan="2">id</th>
        <th rowspan="2">ФИО</th>
        <th rowspan="2">Вес</th>
        <th rowspan="2">Дата рождения</th>
        <th rowspan="2">Команда</th>
        <th colspan="15">Раунды</th>
        <th rowspan="2">побед</th>
        <th rowspan="2">поражений</th>
        <th rowspan="2">очков</th>
        <th rowspan="2">место</th>




    </tr>
    <tr>

        <th colspan="3">1</th>
        <th colspan="3">2</th>
        <th colspan="3">3</th>
        <th colspan="3">4</th>
        <th colspan="3">5</th>


    </tr>
    <?php
    $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  ORDER BY `tablo1`.`lot` ASC ");


    foreach ($info as $info){
        ?>
        <tr>
            <td rowspan="2"><?= $info['quid']?></td> <!-- id-->
            <td rowspan="2"><?=$info['Name']?></td> <!-- Фио-->
            <td rowspan="2"><?=$info["qwc"]?></td> <!-- вес-->
            <td rowspan="2"><?=$info["BD"]?></td> <!-- год рождения-->
            <td rowspan="2"><?= $info["Team"]?></td> <!-- команда-->
            <td rowspan="2"><?= $info["O1"]?></td> <!-- противник-->
            <td ><?=$info["R1"]?></td> <!-- победа-->
            <td ><?=$info["L1"]?></td> <!-- поражение-->
            <td rowspan="2"><?= $info["O2"]?></td> <!-- противник-->
            <td ><?=$info["R2"]?></td> <!-- победа-->
            <td ><?=$info["L2"]?></td> <!-- поражение-->
            <td rowspan="2"><?= $info["O3"]?></td> <!-- противник-->
            <td ><?=$info["R3"]?></td> <!-- победа-->
            <td ><?=$info["L3"]?></td> <!-- поражение-->
            <td rowspan="2"><?= $info["O4"]?></td> <!-- противник-->
            <td ><?=$info["R4"]?></td> <!-- победа-->
            <td ><?=$info["L4"]?></td> <!-- поражение-->
            <td rowspan="2"><?= $info["O5"]?></td> <!-- противник-->
            <td ><?=$info["R5"]?></td> <!-- победа-->
            <td ><?=$info["L5"]?></td> <!-- поражение-->

            <td rowspan="2"><?=$info["Wins"]?></td> <!-- Побед-->
            <td rowspan="2"><?= $info['lose']?></td> <!-- Поражений-->
            <td rowspan="2"><?= $info['Wins'] - $info['lose']?></td> <!-- Очков-->
            <td rowspan="2"><?= $info['place'] ?></td> <!-- Очков-->




        </tr>
        <tr>
            <td colspan="2"><?=$info["m1"]?></td> <!-- счет-->
            <td colspan="2"><?=$info["m2"]?></td>
            <td colspan="2"><?=$info["m3"]?></td>
            <td colspan="2"><?=$info["m4"]?></td>
            <td colspan="2"><?=$info["m5"]?></td>




        </tr>
        <?php
    }
    ?>
    
        
    


    </table>
    <p >Г.Судья: <?= $e ?>____________</p>
    <p>Г.Секретарь: <?= $f ?>____________</p>
</div>
<iframe   name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>

<a id="no" href="#" onclick="window.print();return false; " onclick="onpagehide()">Распечатать</a>



</body>
</html>

