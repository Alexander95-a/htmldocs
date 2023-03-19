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

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = $q");
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
    td:nth-child(7){background: #696969;color: #fff;}
    td:nth-child(-n+6){background: #919191;color: #fff;}
    .button{
        background-color: dimgrey ;

        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        cursor: pointer;
    }
    .link {color: white;text-decoration: none}




</style>




<body>
<div style="float:left;">
    <table  style="float: left;">
        <tr>
            <th colspan="6">Round 1</th>

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
        $info = mysqli_query($conn, "SELECT * FROM (SELECT @row := @row +1 AS rownum, id ,Name , Team, `R1`, `L1`, `lot` FROM (SELECT @row :=0) r, person INNER JOIN `tablo1` using (id) WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') ranked WHERE id %2 <> 0  ORDER BY lot ASC");
        $info = mysqli_fetch_all($info);
        foreach ($info as $info){
         ?>

        <tr>
            <td><?= $info[6]?></td>
            <td><a href="../scripts/lone1.php?n=1&id=<?= $info[6]?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link"><?= $info[2]?></a></td>
            <td><?=$info[3]?></td> <!-- команда-->
            <td><?=$info[0]?></td>
            <td><?=$info[4]?></td><!-- победа-->
            <td><?=$info[5]?></td><!-- поражение-->
            <td></td>
            <?php
            }
            ?>
    </table>

    <table>
        <tr>
            <th colspan="6">Round 1</th>
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
//                $info1 = mysqli_query($conn, "SELECT * FROM (SELECT @row := @row +1 AS rownum, id, Name, Team, `R1`, `L1`, `lot` FROM (SELECT @row :=0) r, person INNER JOIN `tablo1` using (id) WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') ranked WHERE id %2 = 0  ORDER BY lot ASC ");
//                $info1 = mysqli_fetch_all($info1);
                foreach ($info1 as $info1){
                ?>
                <td><?=$info1[4]?></td><!-- победа-->
                <td><?=$info1[5]?></td><!-- поражение-->
                <td><?=$info1[6]?></td>
                <td><?=$info1[2]?></td>
                <td><?=$info1[3]?></td> <!-- команда-->
                <td> <?=$info1[0]?></td>
                <td> <a href="../scripts/update.php?id=<?= $info1[6] ?>&a=<?= $a ?>&b=<?= $b ?>&c=<?= $c ?>&d=<?= $d ?>&e=<?= $e ?>&f=<?= $f ?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> " >Update</a></td>
            </tr>

    <?php
    }
    ?>

    </table>
    <p><?= $g ?></p>
    <p><?= $w ?></p>
    <p><?= $c ?></p>
    <p><?= $d ?></p>
    <p><?= $e ?></p>
    <p><?= $f ?></p>
    <p><?= $q ?></p>
    <p><?= $z ?></p>
    <p><?= $cc ?></p>


</div>



</body>
</html>
