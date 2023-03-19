<?php require_once("../includes/connect.php");

$sr=$_GET['sr'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
?>
<?= $q ?>
<?php

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");
$info2 = mysqli_fetch_assoc($info2);?>


<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <h> Round 1</h>
    <?php require_once ("../includes/header.php");?>
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



</style>
<body>
<div style="float:left;">
    <form action="update_alg.php" method="post">

    <p><?= $sr ?>, <?= $p ?>:<?= $w ?> kg</p>

    <table  style="float: left;">
        <tr>
            <th colspan="6">Date:<?= $a ?></th>

        </tr>

        <tr>
            <th colspan="6">Red side</th>

        </tr>
        <tr>

            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
            <th>Tecnical actions</th>
            <th>Win</th>
            <th>Lose</th>

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


            <?php
            }
            ?>
        <tr>
            <th colspan="6">M.Referee <?= $e2 ?>:<?= $e ?> (<?= $e1 ?>) </th>

        </tr>
    </table>
    <table>
        <tr>
            <th colspan="6"><?= $c ?>:<?= $b ?></th>

        </tr>
        <tr>
            <th colspan="6">Blue side</th>
        </tr>
        <tr>
            <th>Win</th>
            <th>Lose</th>
            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
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
            <td id="fio1"><input class="inputs" id="<?=$info1['lot']?>" type="text" value="<?=$info1['Team']?>"></td>
<!--            <td><input class="buttons" type="button" value="Отправить данные на другую страницу" onclick="new_page()"/></td>-->

<!--            <label id="fio1"><input class="inputs" id="InputFio1" type="text" /></label>-->
            <td> <a href="../scripts/update.php?l=a&id=<?= $info1['lot'] ?>&n=1&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>" class="link">Update</a> </td>
            </tr>


            <?php
        }
        ?>
        <tr>
            <th colspan="6">M.Secretary <?= $f2 ?>: <?= $f ?> (<?= $f1 ?>) </th>

        </tr>
    </table>
    <input class="buttons" type="button" value="Отправить данные на другую страницу" onclick="new_page()"/>
    <a href="../scripts/lone1.php?r=3&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=2&sr=<?=$sr?>" class="button">Конец раунда</a>
<!--    <p>--><?//= $g ?><!--</p>-->
<!--    <p>--><?//= $w ?><!--</p>-->
<!--    <p>--><?//= $c ?><!--</p>-->
<!--    <p>--><?//= $d ?><!--</p>-->
<!--    <p>--><?//= $e ?><!--</p>-->
<!--    <p>--><?//= $f ?><!--</p>-->
<!--    <p>--><?//= $q ?><!--</p>-->
<!--    <p>--><?//= $z ?><!--</p>-->
<!--    <p>--><?//= $cc ?><!--</p>-->
    </form>

</div>



</body>
</html>
