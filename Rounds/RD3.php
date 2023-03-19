<?php require_once("../includes/connect.php");
//require_once ("../includes/header.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];
$e1=$info2['mrc'];
$f1=$info2['msc'];
$e2=$info2['rc'];
$f2=$info2['sc'];

$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

$info30 = mysqli_query($conn, "SELECT * FROM `person`" );

$info30= mysqli_fetch_assoc($info30);

$p3=$info30['Team2'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <?php


    $ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
    $ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '2' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
    $ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '2' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

    $ino = mysqli_fetch_assoc($ino);
    $ino1 = mysqli_fetch_assoc($ino1);
    $ino2 = mysqli_fetch_assoc($ino2);
    $sr=$_GET['sr'];

    $gi = $ino["O$n"] ;


    mysqli_query($conn, "INSERT INTO d ( Name, Team, cid, gendage, wc, lot) SELECT  Name, Team, cid, gendage, wc, lot FROM `d$n`  where `d$n`.`cid` = '$z' AND `d$n`.`gendage` LIKE '$g' AND `d$n`.`wc` = '$w' ");
    mysqli_query($conn, "UPDATE d$n LEFT JOIN d USING (lot) SET d$n.uid = COALESCE(d.id, 0) where `d$n`.`cid` = '$z' AND `d$n`.`gendage` LIKE '$g' AND `d$n`.`wc` = '$w'");
    mysqli_query($conn, "TRUNCATE d");

    $info5 = mysqli_query($conn, "SELECT count(*) FROM `d$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $cc = $info5 ['count(*)'];





//    if($cc == 2) {
//        header("Location:../Rounds/RD3.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&sr=$sr");
//    }
    ?>

    <h> Поединок за 3 место</h>
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
    /*.link {color: white;text-decoration: none}*/
    .add{
        background-color: #28c536;

        color: #050505;
        padding: 3px 10px;
        text-align: center;
        text-decoration: #333333 ;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        cursor: pointer;
        border: 1px solid #333;
    }
    .empty{
        background-color: #c52828;

        color: #ffffff;
        padding: 3px 10px;
        text-align: center;
        text-decoration: #333333 ;
        display: inline-block;
        font-size: 10px;
        margin: 2px 2px;
        cursor: pointer;
        border: 1px solid #333;
    }
    .button{
        background-color: #fcf8b5;

        color: #050505;
        padding: 3px 10px;
        text-align: center;
        text-decoration: #333333 ;
        display: inline-block;
        font-size: 15px;
        margin: 2px 2px;
        cursor: pointer;
        border: 1px solid #333;


</style>
<body>

<h2>

    <p>
        <a href="../fili.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Таблица</a>
        <a href="../protocol.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Протокол</a>
        <a href="../Lot_add.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Вес и жребий</a>
        <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
        <!--            <a href="../category.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Категория</a>-->
        <a href="../index.php" class="button">На главную</a>

    </p>

    <!--        <p>-->
    <!--            <a href="../Rounds/R1.php?l=a&n=1&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">1</a>-->
    <!--            A-->
    <!---->
    <!--            <a href="../A.php?l=a&n=2&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">2</a>-->
    <!--            <a href="../A.php?l=a&n=3&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">3</a>-->
    <!--            <a href="../A.php?l=a&n=4&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">4</a>-->
    <!--            <a href="../A.php?l=a&n=5&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">5</a>-->
    <!--            <a href="../A.php?l=a&n=6&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">6</a>-->
    <!--            <a href="../A.php?l=a&n=7&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">7</a>-->
    <!--            <a href="../A.php?l=a&n=8&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">8</a>-->
    <!--            <a href="../A.php?l=a&n=9&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">9</a>-->
    <!--            <a href="../A.php?l=a&n=10&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">10</a>-->
    <!--            B-->
    <!---->
    <!--            <a href="../B.php?l=b&n=2&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">2</a>-->
    <!--            <a href="../B.php?l=b&n=3&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">3</a>-->
    <!--            <a href="../B.php?l=b&n=4&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">4</a>-->
    <!--            <a href="../B.php?l=b&n=5&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">5</a>-->
    <!--            <a href="../B.php?l=b&n=6&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">6</a>-->
    <!--            <a href="../B.php?l=b&n=7&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">7</a>-->
    <!--            <a href="../B.php?l=b&n=8&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">8</a>-->
    <!--            <a href="../B.php?l=b&n=9&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">9</a>-->
    <!--            <a href="../B.php?l=b&n=10&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">10</a>-->
    <!--        </p>-->

</h2>

<div style="float:left;">
    <form action="RD2.php" method="Get">


        <input type="text" hidden name="g" value="<?= $g ?>">
        <input type="text" hidden name="a" value="<?= $a ?>">
        <input type="text" hidden name="b" value="<?= $b ?>">
        <input type="text" hidden name="c" value="<?= $c ?>">
        <input type="text" hidden name="d" value="<?= $d ?>">
        <input type="text" hidden name="e" value="<?= $e ?>">
        <input type="text" hidden name="f" value="<?= $f ?>">
        <input type="text" hidden name="q" value="<?= $q ?>">
        <input type="text" hidden name="z" value="<?= $z ?>">
        <input type="text" hidden name="l" value="<?= $l ?>">
        <input type="text" hidden name="n" value="<?= $n ?>">

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
            <option value="75">75</option>
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
            <a href="../tabl<?=$sr?>.html" class="button" target="_blank">Табло<?=$sr?></a>
            <?php
        }
        ?>
        <br> <br>
        <button class="button" type="submit">Enter</button>
    </form>

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
            <th>Tecnical actions</th>
            <th>Win</th>
            <th>Lose</th>
            <th>VS</th>



        </tr>
        <?php
        $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");

        foreach ($info as $info){
            ?>
            <tr>

                <td><?=$info['uid']?></td>
                <td><?= $info['Name']?></td>
                <td><?=$info['Team']?></td> <!-- команда-->
                <td></td>
                <td><?=$info["R$n"]?></td><!-- победа-->
                <td><?=$info["L$n"]?></td><!-- поражение-->
            <td></td>


        <?php
        }
        ?>
        <tr>
            <th colspan="6">M.Referee:<?= $e ?> referee<?= $e2 ?> (<?= $e1 ?>)</th>

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
                $info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1`  using (lot) WHERE `$l$n`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

                foreach ($info1 as $info1){
                ?>
                    <td><?=$info1["R$n"]?></td><!-- победа-->
                    <td><?=$info1["L$n"]?></td><!-- поражение-->
                    <td><?=$info1['uid']?></td>
                    <td><?=$info1['Name']?></td>
                    <td><?=$info1['Team']?></td> <!-- команда-->

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
                        <td> <a href="../scripts/upd.php?l=<?=$l?>&gi=<?=$gi ?>&id=<?= $info1["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3" class="link">Update</a> </td>
                        <?php

                    }
                    ?>

                    </tr>


                    <?php
                }
                ?>
        <tr>
            <th colspan="6">M.Secretary: <?= $f ?> secretary<?= $f2 ?> (<?= $f1 ?>) </th>

        </tr>
    </table>
    <a href="../scripts/D1.php?n=<?=$n?>&r1=<?=$n+2?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&n1=<?=$n+1?>&sr=<?=$sr?>" class="add">Завершить раунд</a>
<!--    <p>--><?//= $gi?><!--</p>-->
<!--    <p>--><?//= $cc?><!--</p>-->

</div>


</body>
</html>
