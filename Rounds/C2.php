<?php require_once("../includes/connect.php");
$cc=$_GET['cc'];
$sr=$_GET['sr'];
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$m=$_GET['m'];
$cc=$_GET['cc'];
?>

<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <h> Round 2A</h>
    <?php
//    require_once ("../includes/headerC.php");?>


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
<?php
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `person` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_all($info5);
    foreach ($info5 as $info5)
        $cc = $info5 [0];



if ($cc >= 3 || $cc <= 5) {

    header("Location:../Rounds/C2.$cc.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&cc=$cc&sr=$sr&m=$m");
    echo "ок";
    exit;
}
else {
    echo "Сбой";
}
?>

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
        $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");

        foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
            <td></td>
            <td><?=$info['R2']?></td><!-- победа-->
            <td><?=$info['L2']?></td><!-- поражение-->
            <td></td>
            <td></td>
            <td></td>


            <?php
            }
            ?>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");

            foreach ($info as $info){
            ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
            <td></td>
            <td><?=$info['R2']?></td><!-- победа-->
            <td><?=$info['L2']?></td><!-- поражение-->
            <td></td>
            <td></td>
            <td></td>


            <?php
            }
            ?>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");

            foreach ($info as $info){
            ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
            <td></td>
            <td><?=$info['R2']?></td><!-- победа-->
            <td><?=$info['L2']?></td><!-- поражение-->
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
        $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid`= 5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");

        foreach ($info1 as $info1){
            ?>
            <td><?=$info1['R2']?></td><!-- победа-->
            <td><?=$info1['L2']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->
            <td></td>
            <td></td>
            <td></td>
            <td> <a href="../scripts/updC.php?l=a&x=1&y=5&n=2&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>">Update</a> </td>
            </tr>

            <?php
        }
        ?>
        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid` = 3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");

        foreach ($info1 as $info1){
            ?>
            <td><?=$info1['R2']?></td><!-- победа-->
            <td><?=$info1['L2']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->
            <td></td>
            <td></td>
            <td></td>
            <td> <a href="../scripts/updC.php?l=a&x=2&y=3&n=2&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>">Update</a> </td>
            </tr>

            <?php
        }
        ?>
        <tr>
            <th colspan="8">M.Secretary:<?= $e ?></th>

        </tr>
    </table>
    <a href="../scripts/lone1C.php?r=4&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&id=3&n=3" class="button">END Round</a>

</div>

</body>
</html>
