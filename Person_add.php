<?php require_once("includes/connect.php");
$z=$_GET['z'];
$h=$_GET['h'];?>

<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <?php require_once ("includes/header1.php");?>
</head>

<style>
    th, td {
        padding: 10px;
        text-align: center;

    }

    th {
        background: #606060;
        color: #fff;

    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <h3>Add new person</h3>
    <form action="Form.php" method="post">
        <p>ФИО</p>
        <input type="text" name="title">
        <p>Год рождения</p>
        <input type="date" name="price">
        <p>Команда</p>
        <input type="text" name="team">
        <p>Тренер</p>
        <input type="text" name="trener"><br> <br>
        <button type="submit">Add</button>
    </form>
    <table>



    </table>


    <div style="float:left;">

        <p><?= $d ?>, <?= $p ?>:<?= $w ?> kg</p>

        <table  style="float: left;">
            <tr>
                <th>Команда</th>




            </tr>
            <?php

            $info1 = mysqli_query($conn,  "SELECT Team, COUNT (*) FROM `person`   WHERE `cid` = '$z'");
            foreach ($info1 as $info1){
                ?>

                <td><?=$info1['Team']?></td><!-- Команда-->

                </tr>

                <?php
            }
            ?>

        </table>
        <table>
            <tr>
                <?php

                $info = mysqli_query($conn,  "SELECT DISTINCT weight FROM `category`   WHERE `gender` = '$g'");
                foreach ($info as $info){
                ?>
                <th><?=$info['weight']?></th>z


            </tr>

            <?php
            }
            ?>




            </tr>
            <?php

            $info1 = mysqli_query($conn,  "SELECT * FROM `person`   WHERE `cid` = '$z'");
            foreach ($info1 as $info1){
                ?>
                <td><?=$info1['id']?></td><!-- id-->
                <td><?=$info1['Name']?></td><!-- ФИО-->




                <?php
            }
            ?>
        </table>
    <p><?= $a ?></p>
    <p><?= $b ?></p>
    <p><?= $c ?></p>
    <p><?= $d ?></p>
    <p><?= $e ?></p>
    <p><?= $f ?></p>
    <p><?= $q ?></p>
    <p><?= $z ?></p>
    <p><?= $w ?></p>
    <p><?= $g ?></p>

    <?php require_once("includes/footer.php"); ?>


</body>
</html>