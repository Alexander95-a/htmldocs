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


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <h> Round 1</h>
    <?php require ("../includes/header.php");?>
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




</style>
<body>

<form action="DM.php" method="Get">


    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">



    <p>весовая категория</p>
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
    <?php
    if ($sr== 0){?>
        <select class="empty" name="sr">
            <option value="0">Выберите секретаря</option>
            <option value="1">Секретарь 1</option>
            <option value="2">Секретарь 2</option>
            <option value="3">Секретарь 3</option>
        </select>
        <?php
    }
    ?>

    <?php
    if ($sr!= 0){?>
        <select class="confirm" name="sr">
            <option value="<?= $sr ?>">Секретарь<?= $sr?></option>
            <option value="1">Секретарь 1</option>
            <option value="2">Секретарь 2</option>
            <option value="3">Секретарь 3</option>
        </select>
        <?php
    }
    ?>



    <select name="w">
        <option value="<?= $w ?>"><?= $w ?></option>

        <option value="40">40</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="66">65+</option>
        <option value="70">70</option>
        <option value="71">70+</option>
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
    <?php
    if ($sr!= 0){?>
        <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
        <?php
    }
    ?>
    <br> <br>

    <button type="submit" class="button">Enter</button>
</form>
<div style="float:left;">

    <p><?= $d ?>, <?= $p ?>:<?= $w ?> kg</p>

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

            <th>Win</th>
            <th>Lose</th>

            <th>VS</th>



        </tr>
        <?php
        $info = mysqli_query($conn, "SELECT * FROM `d1` INNER JOIN `tablo1` using (lot) WHERE `d1`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' and `qga` like '$g' AND `wc` = '$w' and `qwc` = '$w'  ORDER BY `d1`.`lot` ASC ");

        foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->

            <td><?=$info['R1']?></td><!-- победа-->
            <td><?=$info['L1']?></td><!-- поражение-->

            <td></td>


            <?php
            }
            ?>
        <tr>
            <th colspan="5">M.Referee <?= $e2 ?>:<?= $e ?> (<?= $e1 ?>) </th>

        </tr>
    </table>
    <table>
        <tr>
            <th colspan="5"><?= $c ?>:<?= $b ?></th>

        </tr>
        <tr>
            <th colspan="5">Blue side</th>
        </tr>
        <tr>
            <th>Win</th>
            <th>Lose</th>
            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>


        </tr>


        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `d1`  INNER JOIN `tablo1`  using (lot) WHERE `d1`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ORDER BY `d1`.`lot` ASC  ");


        foreach ($info1 as $info1) {
            ?>
            <td><?=$info1['R1']?></td><!-- победа-->
            <td><?=$info1['L1']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->

            <!--            <td><input class="buttons" type="button" value="Отправить данные на другую страницу" onclick="new_page()"/></td>-->

            <!--            <label id="fio1"><input class="inputs" id="InputFio1" type="text" /></label>-->
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
                <td> <a href="../scripts/update.php?l=d&id=<?= $info1['lot'] ?>&n=1&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3" class="link">Update</a> </td>
                <?php

            }
            ?>

            </tr>


            <?php
        }
        ?>
        <tr>
            <th colspan="5">M.Secretary <?= $f2 ?>: <?= $f ?> (<?= $f1 ?>) </th>

        </tr>
    </table>
    <a href="../scripts/loneD.php?r=3&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=2&sr=<?=$sr?>" class="add">Завершить раунд</a>
<!--    <p>--><?//= $gi?><!--</p>-->
<!--    <p>--><?//= $cc?><!--</p>-->

</div>


</body>
</html>
