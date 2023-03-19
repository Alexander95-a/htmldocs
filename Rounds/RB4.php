<?php require_once("../includes/connect.php"); ?>

<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <?php
    $m=$_GET['m'];
    $s2=$_GET['s2'];
    $ch1=$_GET['ch1'];
    $ch2=$_GET['ch2'];
    $ch3=$_GET['ch3'];
    $ch4=$_GET['ch4'];


    $o1=$_GET['o1'];
    $o2=$_GET['o2'];


    if($m==3) {require_once("../includes/timer.php");}

    if($m==2){
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '121'  WHERE `cb`.`id` = '$o1'");
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '121'  WHERE `cb`.`id` = '$o2'");
    }

    ?>




</head>
<header>
    <h> Round 4B</h>
    <?php require_once ("../includes/header.php");
    require_once ("../includes/hack.php");
    if($s2==1){
        $m=1;
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '0'  WHERE `cb`.`id` = '$o1'");
        header("Location:../Rounds/RB4.php?w=$w&g=$g&q=$q&z=$z&s2=$s2&m=$m");
    }


    ?>
</header>
<style>
    table {
        margin: 0 auto;
        padding: 50px;
        width: 300px;
        text-align: center;
    }
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



    <table  style="float: left;">



        <h1><?= $m ?></h1>
    <table>
        <tr>
            <th colspan="8"><h1> Timer :<?= $s2 ?></h1></th>

        </tr>
        <tr>
            <th colspan="8"><?= $w ?></th>
        </tr>
        <tr>
            <th>Очки</th>
            <th>Жребий</th>
            <th>ФИО</th>
            <th>Страна</th>
            <th colspan="2">Предупреждение</th>

        </tr>

        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `cb` where  uid= 1 ORDER BY `cb`.`id` ASC  ");
        $info1 = mysqli_fetch_all($info1);
        foreach ($info1 as $info1){
            ?>
            <td><?=$info1[8]?></td><!-- победа-->
            <td><?=$info1[1]?></td>
            <td><?=$info1[2]?></td>
            <td><?=$info1[3]?></td> <!-- команда-->
            <td><a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch1=red&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>" class="button">1</a></td>
            <td><a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>" class="button">2</a></td>
            </tr>


            <?php
        }
        ?>
        <?php
        $info0 = mysqli_query($conn, "SELECT * FROM `cb` where uid = 2 ORDER BY `cb`.`id` ASC  ");
        $info0 = mysqli_fetch_all($info0);
        foreach ($info0 as $info0){

            ?>
            <td><?=$info0[8]?></td><!-- победа-->
            <td><?=$info0[1]?></td>
            <td><?=$info0[2]?></td>
            <td><?=$info0[3]?></td>
            <td><a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch3=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info0[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>&o1=<?=$info1[0]?>" class="button">1</a></td>
            <td><a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch4=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch3=<?= $ch3 ?>&o2=<?=$info0[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>&o1=<?=$info1[0]?>" class="button">2</a></td><!-- команда-->

            </tr>


            <?php
        }
        ?>

        <tr>
            <th colspan="8">M.Secretary:<?= $e ?></th>

        </tr>

        <a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=1&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button">stop</a>
        <a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=3&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button">start</a>
        <a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=2&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button">reset</a>



        <a href="RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&m=<?= $m ?> &ch1=yellow&ch2=yellow&ch3=yellow&ch4=yellow&o1=<?=$info1[0]?>&o2=<?=$info0[0]?>" class="button">restart</a>

    </table>

        <h1><?= $o?></h1>










</div>

</body>
</html>
