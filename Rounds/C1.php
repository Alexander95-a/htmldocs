<?php require_once("../includes/connect.php");

$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];
$q=$_GET['q'];
$c=$_GET['cc'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$m=$_GET['m'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = $q");
$info2 = mysqli_fetch_assoc($info2);?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <??>
    <title>Document</title>
</head>
<header>
    <h> Round 1</h>
<!--    --><?php //require_once("../includes/headerC.php");

    $info5 = mysqli_query($conn, "SELECT count(*) FROM `g1` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_all($info5);
    foreach ($info5 as $info5)
        $cc = $info5 [0];

    if ($cc == 5) {
        header("Location:../Rounds/C1.$cc.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&cc=$cc&sr=$sr&m=$m");
    }
    if ($cc == 4) {
        header("Location:../Rounds/C1.$cc.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&cc=$cc&sr=$sr&m=$m");
    }
    if ($cc == 3) {
        header("Location:../Rounds/C1.$cc.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&cc=$cc&sr=$sr&m=$m");
    }
     if ($cc == 3){ $c3="проверка";  }

    ?>
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

    <p><?= $d ?>, <?= $p ?>:<?= $w ?> kg</p>

    <table  style="float: left;">
        <tr>
            <th colspan="8">Date:<?= $c3 ?> <? echo $cc ?></th>

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
            <td><a href="../scripts/med1.php?l=a&n=1&id=<?= $info['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Med</a></td>
            <td><a href="../scripts/noun1.php?l=a&n=1&id=<?= $info['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="link">Noun</a></td>
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
            <td> <a href="../scripts/updateC.php?l=c&id=<?= $info1['lot'] ?>&n=1&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&di=2">Update</a> </td>
            </tr>

            <?php
        }
        ?>

        <tr>
            <th colspan="8">M.Secretary:<?= $e ?></th>

        </tr>
    </table>
<!--    <a href="../scripts/lone1C.php?r=3&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--&id=4&n=2" class="button">Noun</a>-->
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
