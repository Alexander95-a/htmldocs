<?php require_once("../includes/connect.php"); ?>

<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <h> Round 6B</h>
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

    <p><?= $d ?>, <?= $g ?>:<?= $w ?></p>

    <table  style="float: left;">
        <tr>
            <th colspan="8">Date:<?= $a ?></th>

        </tr>

        <tr>
            <th colspan="8">Left side</th>

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
        $info = mysqli_query($conn, "SELECT * FROM `b6` INNER JOIN `tablo1` using (lot) WHERE `b6`.`id` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b6`.`id` ASC ");
        $info = mysqli_fetch_all($info);
        foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info[4]?></td>
            <td><a href="../scripts/lone.php?l=b&n=6&id=<?= $info[1]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link"><?= $info[2]?></a></td>
            <td><?=$info[3]?></td> <!-- команда-->
            <td></td>
            <td><?=$info[8]?></td><!-- победа-->
            <td><?=$info[21]?></td><!-- поражение-->
            <td><a href="../scripts/med1.php?l=b&n=6&id=<?= $info[1]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Med</a></td>
            <td><a href="../scripts/noun1.php?l=b&n=6&id=<?= $info[1]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Noun</a></td>
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
            <th colspan="8">Right side</th>
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
        $info1 = mysqli_query($conn, "SELECT * FROM `b6` INNER JOIN `tablo1`  using (lot) WHERE `b6`.`id` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b6`.`id` ASC  ");
        $info1 = mysqli_fetch_all($info1);
        foreach ($info1 as $info1){
            ?>
            <td><?=$info1[8]?></td><!-- победа-->
            <td><?=$info1[21]?></td><!-- поражение-->
            <td><?=$info1[1]?></td>
            <td><?=$info1[2]?></td>
            <td><?=$info1[3]?></td> <!-- команда-->
            <td><a href="../scripts/Itog.php?l=b&n=6&id=<?= $info1[1]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Noun</a></td>
            <td><a href="../scripts/med.php?l=b&n=6&id=<?= $info1[1]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Med</a></td>
            <td></td>
            <td> <a href="../scripts/updb3.php?l=b&id=<?= $info1[1] ?>&n=6&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>">Update</a> </td>
            </tr>


            <?php
        }
        ?>
        <tr>
            <th colspan="8">M.Secretary:<?= $e ?></th>

        </tr>
    </table>

</div>

</body>
</html>
