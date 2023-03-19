<?php require_once("../includes/connect.php");
$sr=$_GET['sr'];
$l=$_GET['l'];
$n=$_GET['n'];

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];
$lang = $_GET['lang'];

$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

$ino = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$ino1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '2' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
$ino2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '2' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

$ino = mysqli_fetch_assoc($ino);
$ino1 = mysqli_fetch_assoc($ino1);
$ino2 = mysqli_fetch_assoc($ino2);
//    require ("../includes/check.php");
$gi = $ino["O$n"] ;

if ($gi == 0) {

    require ("../includes/check.php");
    $che = $check;
    $che1 = $name1;
    $che2 = $name2;
    mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
    mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");


    mysqli_query($conn, "TRUNCATE b");
    mysqli_query($conn, "INSERT INTO a ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `a$n`  where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w' ");
    mysqli_query($conn, "UPDATE a$n LEFT JOIN a USING (lot) SET a$n.uid = COALESCE(a.id, 0) where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w'");


    mysqli_query($conn, "TRUNCATE a");


}
mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");


mysqli_query($conn, "TRUNCATE b");
mysqli_query($conn, "INSERT INTO a ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `a$n`  where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w' ");
mysqli_query($conn, "UPDATE a$n LEFT JOIN a USING (lot) SET a$n.uid = COALESCE(a.id, 0) where `a$n`.`cid` = '$z' AND `a$n`.`gendage` LIKE '$g' AND `a$n`.`wc` = '$w'");


mysqli_query($conn, "TRUNCATE a");
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title><?= $g ?>:<?php
        if($w==66){?> 65+
            <?php
        }
        ?>

        <?php
        if($w==71){?> 70+
            <?php
        }
        ?>
        <?php
        if($w==76){?> 75+
            <?php
        }
        ?>
        <?php
        if($w==81){?> 80+
            <?php
        }
        ?>
        <?php
        if($w==86){?> 85+
            <?php
        }
        ?>
        <?php
        if($w==96){?> 90+
            <?php
        }
        ?>
        <?php
        if($w==106){?> 105+
            <?php
        }
        ?>
        <?php
        if($w==126){?> 125+
            <?php
        }
        ?>
        <?php
        if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
            <?=$w?>
            <?php
        }
        ?>
        кг, раунд <?= $n ?>, группа <?php
        if($l=="g"){?> без группы
            <?php
        }
        ?>
        <?php
        if($l!="g"){?>
            <?=$l?>
            <?php
        }
        ?></title>
</head>
<header>

    <?php require_once ("../includes/header.php");?>
<!--    <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script>-->
</header>
<style>
    .alert {
        padding: 20px;
        background-color: #f44336;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }


    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #606060;
        color: #fff;
        border-collapse: collapse;

        border: 2px solid black
    }




    td {

        font-size: 8pt;
        padding: 3px;

        border: 1px solid ;

        text-align: center;

    }

    @media print { /* Стиль для печати */
        body{
            visibility: hidden;
        }
        /* Блок который нужно отобразить */
        #print-title {
            visibility: visible;
            margin-top: 250px;
        }
        #print-text {
            visibility: visible;
            margin-top: -250px;
        }
    }

</style>
<body>
<?php

$info21 = mysqli_query($conn, "SELECT * FROM `$l$n` WHERE `$l$n`.`uid`= '$name1'  AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");

$info21 = mysqli_fetch_assoc($info21);

$n1=$info21['Name'];
$info22 = mysqli_query($conn, "SELECT * FROM `$l$n` WHERE `$l$n`.`uid`= '$name2'  AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");

$info22 = mysqli_fetch_assoc($info22);
$n2=$info22['Name'];

if ($check == 1) {?>

    <h2>Уведомление</h2>

    <p>Нажмите "x" чтобы закрыть.</p>
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
        <strong>Внимание!</strong> Произошла замена, некоторые участники уже ранее пересекались. <?= $n1 ?> и <?= $n2 ?>

    </div>

    <?php
}

?>
<div style="float:left;">

    <p><?= $d ?>, <?= $g ?>:<?php
        if($w==66){?> 65+
            <?php
        }
        ?>

        <?php
        if($w==71){?> 70+
            <?php
        }
        ?>
        <?php
        if($w==76){?> 75+
            <?php
        }
        ?>
        <?php
        if($w==81){?> 80+
            <?php
        }
        ?>
        <?php
        if($w==86){?> 85+
            <?php
        }
        ?>
        <?php
        if($w==96){?> 90+
            <?php
        }
        ?>
        <?php
        if($w==106){?> 105+
            <?php
        }
        ?>
        <?php
        if($w==126){?> 125+
            <?php
        }
        ?>
        <?php
        if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
            <?=$w?>
            <?php
        }
        ?></p>

    <div>
        <form action="RA6.php" method="Get">


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
            <option value="M">Mужчины</option>
            <option value="W">Женщины</option>
            <option value="JU">Юноши (12-13 лет)</option>
            <option value="JU-15B">Юноши (14-15 лет)</option>
            <option value="JU-17B">Юноши (16-17 лет)</option>
            <option value="JU-15G">Девушки (14-15 лет)</option>
            <option value="JU-17G">Девушки (16-17 лет)</option>
            <option value="JUN">Юниоры</option>
            <option value="JUR">Юниорки</option>
            <option value="VMI">Ветераны-мужчины </option>
            <option value="VW">Ветераны-женщины</option>
            </select>
<!--            <select name="l">-->
<!--                <option value="--><?//= $l ?><!--">--><?php
//                    if($l=="g"){?><!-- Раунд 1-->
<!--                        --><?php
//                    }
//                    ?>
<!--                    --><?php
//                    if($l=="a"){?>
<!--                        A Group-->
<!--                        --><?php
//                    }
//                    ?>
<!--                    --><?php
//                    if($l=="b"){?>
<!--                        B Group-->
<!--                        --><?php
//                    }
//                    ?><!--</option>-->
<!--                <option value="g">Раунд 1</option>-->
<!--                <option value="a">A Group</option>-->
<!--                <option value="b">B Group</option>-->
<!---->
<!--            </select>-->
<!--            <select name="n">-->
<!--                <option value="--><?//= $n ?><!--">Раунд --><?//= $n?><!--</option>-->
<!--                <option value="1">Раунд 1</option>-->
<!--                <option value="2">Раунд 2</option>-->
<!--                <option value="3">Раунд 3</option>-->
<!--                <option value="4">Раунд 4</option>-->
<!--                <option value="5">Раунд 5</option>-->
<!--                <option value="6">Раунд 6</option>-->
<!--                <option value="7">Раунд 7</option>-->
<!--                <option value="8">Раунд 8</option>-->
<!--                <option value="9">Раунд 9</option>-->
<!--                <option value="10">Раунд 10</option>-->
<!---->
<!--            </select>-->
            <select class="group" name="l">
                <option value="<?$l ?>"><?php
                                        if($l=="g"){?> Раунд 1
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($l=="a"){?>
                                            A Group
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($l=="b"){?>
                                            B Group
                                            <?php
                                        }
                                        ?></option>
                <option value="g">Раунд 1</option>
                <option value="a">A Group</option>
                <option value="b">B Group</option>
            </select>



            <select class="round" name="n" disabled>
                <option value="<?= $n ?>">Раунд <?= $n?></option>
                <option class="g" value="1">Раунд 1</option>

                <option class="a" value="2">Раунд 2</option>
                <option class="a" value="3">Раунд 3</option>
                <option class="a" value="4">Раунд 4</option>
                <option class="a" value="5">Раунд 5</option>
                <option class="a" value="6">Раунд 6</option>
                <option class="a" value="7">Раунд 7</option>
                <option class="a" value="8">Раунд 8</option>
                <option class="a" value="9">Раунд 9</option>
                <option class="a" value="10">Раунд 10</option>

                <option class="b" value="2">Раунд 2</option>
                <option class="b" value="3">Раунд 3</option>
                <option class="b" value="4">Раунд 4</option>
                <option class="b" value="5">Раунд 5</option>
                <option class="b" value="6">Раунд 6</option>
                <option class="b" value="7">Раунд 7</option>
                <option class="b" value="8">Раунд 8</option>
                <option class="b" value="9">Раунд 9</option>
                <option class="b" value="10">Раунд 10</option>
            </select>
            <script>
                $('.group').change(function(){
                    $('.round').prop('selectedIndex', 0); //ощищаем select с моделями при каждом изменении select'а с марками
                    var group = $(this).val(); //получаем value выбранной марки
                    if(group != '') { //проверяем, выбрана ли хоть какая-то марка
                        $('.round').attr('disabled',false); //открываем select с моделями
                        $('.round option').css('display','none'); //сначала скрываем все модели
                        $('.round option.'+group).css('display','inline'); //затем открываем те, которые нам нужны
                    }
                    else {
                        $('.round').attr('disabled',true); //если не выбрана ни одна марка, скрываем select с моделями
                    }
                });
            </script>
            <!--                --><?php
            //                if ($sr== 0){?>
            <!--                    <select class="empty" name="sr">-->
            <!--                        <option value="0">Выберите секретаря</option>-->
            <!--                        <option value="1">Секретарь 1</option>-->
            <!--                        <option value="2">Секретарь 2</option>-->
            <!--                        <option value="3">Секретарь 3</option>-->
            <!--                    </select>-->
            <!--                    --><?php
            //                }
            //                ?>
            <!---->
            <!--                --><?php
            //                if ($sr!= 0){?>
            <!--                    <select class="confirm" name="sr">-->
            <!--                        <option value="--><?//= $sr ?><!--">Секретарь--><?//= $sr?><!--</option>-->
            <!--                        <option value="1">Секретарь 1</option>-->
            <!--                        <option value="2">Секретарь 2</option>-->
            <!--                        <option value="3">Секретарь 3</option>-->
            <!--                    </select>-->
            <!--                    --><?php
            //                }
            //                ?>

            <select name="w">
                <option value="<?= $w ?>"><?php
                    if($w==66){?> 65+
                        <?php
                    }
                    ?>

                    <?php
                    if($w==71){?> 70+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==76){?> 75+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==81){?> 80+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==86){?> 85+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==96){?> 90+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==106){?> 105+
                        <?php
                    }
                    ?>
                    <?php
                    if($w==126){?> 125+
                        <?php
                    }
                    ?>
                    <?php
                    if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
                        <?=$w?>
                        <?php
                    }
                    ?></option>

                <option value="40">40</option>
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60">60</option>
                <option value="65">65</option>
                <option value="66">65+</option>
                <option value="70">70</option>
                <option value="71">70+</option>
                <option value="75">75</option>
                <option value="76">75+</option>
                <option value="80">80</option>
                <option value="81">80+</option>
                <option value="85">85</option>
                <option value="86">85+</option>
                <option value="90">90</option>
                <option value="91">90+</option>
                <option value="105">105</option>
                <option value="106">105+</option>
                <option value="125">125</option>
                <option value="126">125+</option>
                <option value="130"> <?php
                    if($lang=="ru"){?> Абсолютная
                        <?php
                    }
                    ?>
                    <?php
                    if($lang=="en"){?>

                        Аbsolute
                        <?php
                    }
                    ?></option>

            </select>
            <br> <br>
            <select name="lang">
                <option value="<?= $lang?>"><?php
                    if($lang=="ru"){?> Русский
                        <?php
                    }
                    ?>
                    <?php
                    if($lang=="en"){?>
                        English
                        <?php
                    }
                    ?> </option>
                <option value="ru">Русский</option>
                <option value="en">English</option>

            </select>

            <br> <br>
            <button class="button" type="submit">Enter</button>

        </form>
    </div>
    <div id="print-text"  style="text-align: center">
        <h2><?= $d ?></h2>
    </div>
    <div id="print-title">
        <div id="print-text">
            <h4> <?php
                if($lang=="ru"){?> Раунд
                    <?php
                }
                ?>
                <?php
                if($lang=="en"){?>
                    Round
                    <?php
                }
                ?> <?=$n?>,
                <?php
                if($lang=="ru"){?> Группа
                    <?php
                }
                ?>
                <?php
                if($lang=="en"){?>
                    Group
                    <?php
                }
                ?>, <?php
                if($l=="g"){?> Без группы
                    <?php
                }
                ?>
                <?php
                if($l!="g"){?>
                    <?=$l?>
                    <?php
                }
                ?> </h4>
        </div>


        <table  style="float: left; margin: 0px;



        border-collapse: collapse;

        border: 2px solid black;" >


                <tr>
                    <th colspan="5" style="  width: 450px;"><?php
                        if($lang=="ru"){?> Дата
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>
                            Date
                            <?php
                        }
                        ?> : <?= $a ?> - <?= $a2 ?></th>
                    <th height="60px" width="80px" ><?= $p ?>  <?php
                        if($w==66){?> 65+
                            <?php
                        }
                        ?>

                        <?php
                        if($w==71){?> 70+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==76){?> 75+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==81){?> 80+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==86){?> 85+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==96){?> 90+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==106){?> 105+
                            <?php
                        }
                        ?>
                        <?php
                        if($w==126){?> 125+
                            <?php
                        }
                        ?>
                        <?php
                        if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
                            <?=$w?>
                            <?php
                        }
                        ?> kg</th>

                </tr>


                <tr>
                    <th colspan="5" style="  width: 450px;"> <?php
                        if($lang=="ru"){?> Красная сторона
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Red side
                            <?php
                        }
                        ?></th>

                </tr>
                <tr>

                    <th>№</th>
                    <th> <?php
                        if($lang=="ru"){?> Жребий
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Draw
                            <?php
                        }
                        ?></th>
                    <th>
                        <?php
                        if($lang=="ru"){?> Имя и Фамилия
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Name
                            <?php
                        }
                        ?></th>
                    <th>
                        <?php
                        if($lang=="ru"){?> Команда
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Team
                            <?php
                        }
                        ?></th>
                    <th height="40px">
                        <?php
                        if($lang=="ru"){?> Очки
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Score
                            <?php
                        }
                        ?></th>
        <!--            <th>Date of birth</th>-->


                    <th>VS</th>



                </tr>
                <?php
                $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");

                foreach ($info as $info){
                ?>
                <tr>

                    <td height="12px"><?=$info['uid']?></td>
                    <td ><?= $info['lot']?></td>
                    <td ><?= $info['Name']?></td>
                    <td ><?=$info['Team']?></td> <!-- команда-->
        <!--            <td>--><?//=$info['BD']?><!--</td> победа-->
                    <td > </td>




                    <?php
                    }
                    ?>
<!--                <tr>-->
<!--                    <th colspan="4">Chief Referee:--><?//= $e ?><!--</th>-->
<!---->
<!--                </tr>-->
            </table>


            <table STYLE="margin: 0px;



        border-collapse: collapse;

        border: 2px solid black;">
                <tr>
                    <th height="60px" colspan="5" style="  width: 450px;"> <?= $c ?> ,  <?= $b ?></th>

                </tr>
                <tr>
                    <th colspan="5" style="  width: 450px;" ><?php
                        if($lang=="ru"){?> Синяя сторона
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Blue side
                            <?php
                        }
                        ?></th>
                </tr>
                <tr>
                    <th height="40px"> <?php
                        if($lang=="ru"){?> Очки
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Score
                            <?php
                        }
                        ?></th>
                    <th>№</th>
                    <th><?php
                        if($lang=="ru"){?> Жребий
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Draw
                            <?php
                        }
                        ?></th>
                    <th><?php
                        if($lang=="ru"){?> Имя и Фамилия
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Name
                            <?php
                        }
                        ?></th>
                    <th><?php
                        if($lang=="ru"){?> Команда
                            <?php
                        }
                        ?>
                        <?php
                        if($lang=="en"){?>

                            Team
                            <?php
                        }
                        ?></th>


        <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1`  using (lot) WHERE `$l$n`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td ></td>
                    <td height="12px"><?=$info1['uid']?></td>
                    <td ><?= $info1['lot']?></td>
                    <td ><?= $info1['Name']?></td>
                    <td ><?=$info1['Team']?></td> <!-- команда-->


                    </tr>


                    <?php
                }
                ?>
<!--                <tr>-->
<!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
<!---->
<!--                </tr>-->
            </table>
        <br>
        <br>

        <br>
        <h4>
            <?php
            if($lang=="ru"){?> Главный секретарь
                <?php
            }
            ?>
            <?php
            if($lang=="en"){?>

                Chief secretary
                <?php
            }
            ?>: ____________________\<?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4>
            <?php
            if($lang=="ru"){?> Главный судья
                <?php
            }
            ?>
            <?php
            if($lang=="en"){?>

                Chief Referee
                <?php
            }
            ?>:_____________________\<?= $e ?> (<?= $e1 ?>)
        </h4>


</div>
<!---->
<!--<h1 id="print-title">Заголовок</h1>-->
<!--<div id="print-img"><img src="img.jpg" /></div>-->
<!--<div id="print-text">Текст</div>-->
<!--<a href="#" onclick="javascript:callPrint();">Печать</a>-->
    <a href="#" onclick="window.print();return false;">Распечатать</a>
<!--    <iframe name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>-->


    <script>
    function callPrint() {
        var printCSS = '<link rel="stylesheet" href="css/print.css" type="text/css" />';
        var printTitle = document.getElementById('print-title').innerHTML;
        // var printImg = document.getElementById('print-img').innerHTML;
        // var printText = document.getElementById('print-text').innerHTML;
        var windowPrint = window.open('','','left=200,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
        // windowPrint.document.write(printCSS);
        windowPrint.document.write(printTitle);
        windowPrint.document.write(printImg);
        windowPrint.document.write(printText);
        windowPrint.document.close();
        windowPrint.focus();
        windowPrint.print();
        windowPrint.close();
    }
</script>



</body>
</html>
