<?php require_once("../includes/connect.php");
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];
$q=$_GET['q'];

$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = $q");
$info2 = mysqli_fetch_assoc($info2);?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Round 1</title>
</head>
<header>
    <h2> Round 1</h2>
    <?php require_once ("../includes/headerC.php");?>
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
    .link {color: white;text-decoration: none}

    .link {color: white;text-decoration: none}




</style>




<body>
<div style="float:left;">

    <p><?= $d ?>, <?= $p ?>:<?= $w ?> kg</p>

    <table  style="float: left;">
        <tr>
            <th colspan="8">Date:<?= $a ?></th>

        </tr>

        <tr>
            <th colspan="8">Red side</th>

        </tr>
        <tr>

            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
            <th>Tecnical actions</th>
            <th>Win</th>
            <th>Lose</th>
            <th>Med</th>
            <th>Noun</th>
            <th>VS</th>



        </tr>
        <?php
        $info = mysqli_query($conn, "SELECT * FROM `g1` INNER JOIN `tablo1` using (lot) WHERE `g1`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`lot` ASC ");

        foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><a href="../scripts/lone.php?l=a&n=1&id=<?= $info['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link"><?= $info['Name']?></a></td>
            <td><?=$info['Team']?></td> <!-- команда-->
            <td></td>
            <td><?=$info['R1']?></td><!-- победа-->
            <td><?=$info['L1']?></td><!-- поражение-->
            <td></td>
            <td></td>
            <td></td>


            <?php
            }
            ?>
        <tr>
            <th colspan="8">M.Referee:<?= $e ?></th>

        </tr>
    </table>
    <table>
        <tr>
            <th colspan="8"><?= $c ?>:<?= $b ?></th>

        </tr>
        <tr>
            <th colspan="8">Blue side</th>
        </tr>
        <tr>
            <th>Win</th>
            <th>Lose</th>
            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
            <th>Noun</th>
            <th>Med</th>
            <th>Tecnical actions</th>

        </tr>

        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `g1` INNER JOIN `tablo1`  using (lot) WHERE `g1`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`lot` ASC  ");

        foreach ($info1 as $info1){
            ?>
            <td><?=$info1['R1']?></td><!-- победа-->
            <td><?=$info1['L1']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->
            <td></td>
            <td></td>
            <td></td>
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
            <td> <a href="../scripts/updateC.php?l=c&id=<?= $info1['lot'] ?>&n=1&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&di=2&sr=<?= $sr ?>&cc=<?= $cc ?>&t=3">Update</a> </td>
            </tr>

            <?php
        }
        ?>

        <tr>


            <?php
            }
            ?>

        <tr>
            <th colspan="8">M.Secretary:<?= $e ?></th>

        </tr>
    </table>
<!--    <a href="../scripts/lone1C.php?r=3&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--&id=4&n=2&sr=--><?//= $sr ?><!--" class="button">Noun</a>-->



</body>
</html>
