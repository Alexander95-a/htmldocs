<?php require_once("../includes/connect.php");
//require_once ("../includes/header.php");
$sr=$_GET['sr'];
$l=$_GET['l'];


$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];

$n=$_GET['n'];
if ($n==1){
    $n=2;
}

$sr=$_GET['sr'];
$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");
$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$a2=$info2['date2'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name']; 
$e=$info2['mreferee'];
$f=$info2['msecretary'];
$e1=$info2['mrc'];
$f1=$info2['msc'];
$e2=$info2['rc'];
$f2=$info2['sc'];
$f3=$info2['mesto'];
// mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
//         mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");
//         mysqli_query($conn, "TRUNCATE b");

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

    <title>Round <?= $n ?>, Group B</title>
</head>
<header>
    <?php

    $ino = mysqli_query($conn, "SELECT * FROM `b$n` INNER JOIN `tablo1` using (lot) WHERE `b$n`.`uid` = '2' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
    $ino1 = mysqli_query($conn, "SELECT * FROM `b$n` INNER JOIN `tablo1` using (lot) where `b$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '2' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");
    $ino2 = mysqli_query($conn, "SELECT * FROM `b$n` INNER JOIN `tablo1` using (lot) where `b$n`.`uid` = (select MIN(uid) from `$l$n` where `uid` > '2' AND `lot` != 0  and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'  and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");

    $ino = mysqli_fetch_assoc($ino);
    $ino1 = mysqli_fetch_assoc($ino1);
    $ino2 = mysqli_fetch_assoc($ino2);
//    require ("../includes/check.php");
    // $gi = $ino["O$n"] ;

    // if ($gi == 0) {

    //     require ("../includes/check.php");
    //     $che = $check;
    //     $che1 = $name1;
    //     $che2 = $name2;
    //     mysqli_query($conn, "INSERT INTO b ( Name, Team, cid, gendage, wc, lot, uidb) SELECT  Name, Team, cid, gendage, wc, lot, uidb FROM `b$n`  where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w' ");
    //     mysqli_query($conn, "UPDATE b$n LEFT JOIN b USING (lot) SET b$n.uid = COALESCE(b.id, 0) where `b$n`.`cid` = '$z' AND `b$n`.`gendage` LIKE '$g' AND `b$n`.`wc` = '$w'");
    //     mysqli_query($conn, "TRUNCATE b");
    // }

    $info5 = mysqli_query($conn, "SELECT count(*) FROM `b$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $cc = $info5 ['count(*)'];
    $info6 = mysqli_query($conn, "SELECT count(DISTINCT place) as count FROM tablo1 WHERE `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
    $info6 = mysqli_fetch_assoc($info6);
    $kk = $info6 ['count'];
    $r = $n+1;
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `a$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    $info5 = mysqli_fetch_assoc($info5);
    $c2 = $info5 ['count(*)'];
        if ($f3==2) {
            if ($c2 == 2) {
                if ($cc <= 4) {
                    header("Location:../Rounds/RB3.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&sr=$sr");
                }
            }
    //    $info5 = mysqli_query($conn, "SELECT count(*) FROM `g1` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
    //    $info5 = mysqli_fetch_assoc($info5);
    //    $c3 = $info5 ['count(*)'];
    //
            if ($c2 <= 1) {
                if ($cc <= 4) {
                    header("Location:../Rounds/RB3.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&sr=$sr");
                }
            }
        }
        if ($f3==1) {
            if ($c2 == 2) {

                if ($cc == 2) {
                    header("Location:../Rounds/RB5.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&sr=$sr");
                }
            }
            //    $info5 = mysqli_query($conn, "SELECT count(*) FROM `g1` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            //    $info5 = mysqli_fetch_assoc($info5);
            //    $c3 = $info5 ['count(*)'];
            //
            if ($c2 <= 1) {
                if ($cc == 2) {
                    header("Location:../Rounds/RB5.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&sr=$sr");
                }
            }
        }



    $info = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `uid`= (SELECT MAX(uid) FROM `a$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
    $info = mysqli_fetch_assoc($info);
    $i = $info['lot'];

    $valu1 = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
    $valu2 = mysqli_query($conn, "SELECT * FROM `a$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
    $v1 = mysqli_num_rows($valu1);
    $v2 = mysqli_num_rows($valu2);
    if($v1 - $v2 == 1) {
        mysqli_query($conn,"UPDATE `tablo1` SET `O$n` = 'Free' WHERE `tablo1`.`lot` = '$i' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
        mysqli_query($conn, "INSERT INTO `a$r` ( uid,Name, Team, cid, gendage, wc, lot, uidb) SELECT uid, Name, Team, cid, gendage, wc, lot, uidb FROM `a$n` where uid = (SELECT MAX(uid) FROM `a$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");
    }

    $info = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `uid`= (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w') and  `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w';");
    $info = mysqli_fetch_assoc($info);
    $s = $info['lot'];

    $value1 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) <> 0;");
    $value2 = mysqli_query($conn, "SELECT * FROM `b$n` WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and mod(uid,2) = 0;");
    $val1 = mysqli_num_rows($value1);
    $val2 = mysqli_num_rows($value2);


    if($val1 - $val2 == 1){
        mysqli_query($conn,"UPDATE `tablo1` SET `O$n` = 'Free' WHERE `tablo1`.`lot` = '$s' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
        mysqli_query($conn, "INSERT INTO `b$r` ( uid,Name, Team, cid, gendage, wc, lot, uidb) SELECT uid, Name, Team, cid, gendage, wc, lot, uidb FROM `b$n` where uid = (SELECT MAX(uid) FROM `b$n`  WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w')  and `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");
    }
    ?>
    <h2>
        <p>
            <input class="button" type="button" onclick="history.back();" value="Назад"/>
            <!--                <a href="../fili.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Таблица</a>-->
            <a href="../Rounds/RA6x.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Таблица сводная </a>
            <a href="../Rounds/RA7.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Таблица сводная с очками</a>
            <a href="../Rounds/O1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Cводная </a>
            <a href="../Rounds/Admin2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&l=<?=$l?>&n=<?= $n ?>" class="button">Cетка </a>
            <?php
                if ($l=='u1'||$l=='uc'||$l=='ub'){?>
                    <a href="../protocolB.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&pg=<?= $l ?>&l=<?= $l ?>&n=<?= $n ?>&sr=<?= $sr ?>" class="button">Протокол B</a>
                    <?php
                }
                ?>
                <?php
                if ($l=='c'){?>
                    <a href="../protocolC.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Протокол C</a>

                    <?php
                }
                ?>
                <?php
                if ($l!='c'&&$l!='u1'&&$l!='uc'&&$l!='ub'){?>
                    <a href="../protocol.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Протокол A</a>

                    <?php
                }
                ?>

            
            <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
            <!--            <a href="../category.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Категория</a>-->
            <a href="../index.php" class="button">На главную</a>


        </p>

    </h2>
    
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
    /*.link {color: #000000;text-decoration: none;border: 1px solid #333;padding: 3px 10px; background: #ffffff;}*/

    /*A {*/
    /*    color: #f10303; !* Цвет обычной ссылки *!*/
    /*    background: #ffffff;*/
    /*}*/
    /*A:visited {*/
    /*    color: #000000; !* Цвет посещенной ссылки *!*/
    /*    background: #21cb1e;*/
    /*}*/
   
table { margin:0 auto; }

.link{
  display:block;
  width:60px;
  
  margin:auto;

  background:#3d9c3e;
  color:#fff!important;
  text-decoration:none;
  font-size:13px;
  text-align: center;
  border: 2px solid #c5baba;
  border-radius: 34px;
}

.link:hover {
  color:#fff!important;
  text-decoration:none!important;
  background:#38cc3a;
}
</style>
<body>

<div style="float:left;">
    <form action="R.php" method="Get">


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
            <option value="JU-15B">Юноши (14-15 лет)</option>
            <option value="JU-17B">Юноши (16-17 лет)</option>
            <option value="JU-15G">Девушки (14-15 лет)</option>
            <option value="JU-17G">Девушки (16-17 лет)</option>
            <option value="JUN">Юниоры</option>
            <option value="JUR">Юниорки</option>
            <option value="VMI">Ветераны-мужчины </option>
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
            <option value="45">45</option>
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
            <option value="130">Абсолютная</option>

        </select>
        <select class="group" name="l">
            
            <option value="b">B Group</option>
            <option value="g">Round 1</option>
            <option value="a">A Group</option>
            
        </select>



        <select class="round" name="n" disabled>
            
            <option class="g" value="1">Round 1</option>

            <option class="a" value="2">Round 2</option>
            <option class="a" value="3">Round 3</option>
            <option class="a" value="4">Round 4</option>
            <option class="a" value="5">Round 5</option>
            <option class="a" value="6">Round 6</option>
            <option class="a" value="7">Round 7</option>
            <option class="a" value="8">Round 8</option>
            <option class="a" value="9">Round 9</option>
            <option class="a" value="10">Round 10</option>

            <option class="b" value="2">Round 2</option>
            <option class="b" value="3">Round 3</option>
            <option class="b" value="4">Round 4</option>
            <option class="b" value="5">Round 5</option>
            <option class="b" value="6">Round 6</option>
            <option class="b" value="7">Round 7</option>
            <option class="b" value="8">Round 8</option>
            <option class="b" value="9">Round 9</option>
            <option class="b" value="10">Round 10</option>
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
        <?php
        if ($sr!= 0){?>
        <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
        <?php
        }
        ?>
        <br> <br>
        <button class="button" type="submit">Enter</button>
    </form>
    <p><?= $d ?>, <?= $p ?>:<?php
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
        $gi
        ?> kg</p>

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



    
    
    <br>

<div style="text-align: center;">
    <table width="100%" border="0" cellpadding="5" cellspacing="0"  style="text-align: center;" >
        <col width="300" valign="top">
        <col width="300" valign="top">
        
        <tr>
            <div class="container">
            <div>
                <td  style="background: #ffffff; vertical-align: top; padding: 1px;">         
                    <table width="600" style="float: right;">
                            <tr>
                                <th colspan="5">Date:<?= $a ?>- <?= $a2 ?></th>
                            </tr>

                            <tr>
                                <th colspan="5">Red side</th>
                            </tr>
                            <tr>
                                <th>№</th>
                                <th>Name</th>
                                <th>Team</th>
                                <th>Win</th>
                                <th>Lose</th>
                            </tr>
                            <?php
                            $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");

                            foreach ($info as $info){
                            ?>
                            <tr>

                                <td><?=$info['uid']?></td>
                                <td><?=$info['Name']?></td>
                                <td><?=$info['Team']?></td> <!-- команда-->
                                <td><?=$info["R$n"]?></td><!-- победа-->
                                <td><?=$info["L$n"]?></td><!-- поражение-->
                                <?php
                                }
                                ?>
                            </tr>
                    </table>       
                </td>
            </div>
                <div> 
                <td style="background: #ffffff; vertical-align: top ; padding: 1px;">   
                
                    <table width="700" style="float: left;">
                       
                        <tr>
                            <th style="background: #fff; color: #fff"></th>
                            <th colspan="6"> Venue: <?= $c ?>, <?= $b ?></th>

                        </tr>
                        <tr>
                            <th style="background: #fff; color: #fff" ></th>
                            <th colspan="6">Blue side</th>
                        </tr>
                        <tr>
                            <th>VS</th>
                            <th>Win</th>
                            <th>Lose</th>
                            <th>Name</th>
                            <th>Team</th>
                            <th>№</th>
                        </tr>


                        <?php
                       $info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1`  using (lot) WHERE `$l$n`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

                       foreach ($info1 as $info1){
                            ?>
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
                                <td <?php
                                 $jr = $info1['lot'];
                                 $info2 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`lot`= '$jr' AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                 $info2 = mysqli_fetch_assoc($info2);
                                 $jq = $info2["R$n"];
                                 $cn = $info2["L$n"];
                                ?>

                        style="text-align: center; 
                                <?php
                                    if($cn == 2 || $jq == 2 )
                                    {
                                    ?>
                                        background-color: #28c536;
                                        <?php
                                        }
                                        else {?>
                                            background-color: red;
                                            <?php
                                                }                                 
                                                ?>"> <a href="../scripts/updb3.php?gi=<?=$gi ?>&l=<?=$l?>&id=<?= $info1["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3" class="link">Update</a> </td>
                                            <?php
                                            }
                                ?>
                            <td><?=$info1["R$n"]?></td><!-- победа-->
                            <td><?=$info1["L$n"]?></td><!-- поражение-->
                            <td><?=$info1['Name']?></td>
                            <td><?=$info1['Team']?></td> <!-- команда-->
                            <td><?=$info1['uid']?></td>
                            </tr>
                            <?php
                        }
                        ?>
                        
                    </table>
                </td>
                </div> 
            </div> 
        </tr>
    </table>
</div>
        <br>
        <br>
        <h4>
            Chief secretary,
            <?= $f2 ?>: ____________________\ <?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4>
            
            Chief Referee,
            <?= $e2 ?>: ____________________\ <?= $e ?> (<?= $e1 ?>)
        </h4>
    
<?php
$info5 = mysqli_query($conn, "SELECT count(*) FROM `a$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
$info5 = mysqli_fetch_assoc($info5);
$c3 = $info5 ['count(*)'];
if ($c3==2) {

    ?>
    <a href="../scripts/R.php?n=<?=$n?>&r1=<?=$n+2?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&n1=<?=$n+1?>&sr=<?=$sr?>" class="button">Завершить раунд</a>

    <?php
    }
    ?>
    <?php

    if ($c3>2) {
    ?>
        <a href = "../A.php?l=a&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?=$sr?>" class="button" > Завершить раунд </a >
    <?php
    }
    ?>
    <?php

    if ($c3==0) {
    ?>
        <a href = "../A.php?l=a&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?=$sr?>" class="button" > Завершить раунд </a >
    <?php
    }
    ?>

<!---->
<!--    --><?//= $c2 ?>
<!--    --><?//= $f3 ?>
<!--    --><?//= $cc ?>

<!--    <p>--><?//= $gi?><!--</p>-->
<!--    <p>--><?//= $j2?><!-- </p>-->
<!--    <p>--><?//= $o11?><!--</p>-->
<!--    <p>--><?//= $q1?><!--</p>-->
<!--    <p>--><?//= $y3?><!--</p>-->
<!--    <p>--><?//= $y1?><!-- </p>-->
<!--    <p>--><?//= $i1?><!--</p>-->
<!--    <p>--><?//= $i2?><!-- </p>-->




</div>


</body>
</html>
