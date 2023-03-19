<?php require_once("connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$m=$_GET['m'];
$cc=$_GET['cc'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];
$f3=$info2['mesto'];


$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

if($n)
$info5 = mysqli_query($conn, "SELECT count(*) FROM `person` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w'");
$info5 = mysqli_fetch_all($info5);
foreach ($info5 as $info5)
    $cc = $info5 [0]



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
        .button {
            background-color: #fcf8b5;

            color: #050505;
            padding: 3px 10px;
            text-align: center;
            text-decoration: #333333;
            display: inline-block;
            font-size: 15px;
            margin: 2px 2px;
            cursor: pointer;
            border: 1px solid #333;
        }
        .button2 {
            background-color: #0bfa3a;

            color: #050505;
            padding: 3px 10px;
            text-align: center;
            text-decoration: #333333;
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
        th {
            background: #606060;
            color: #fff;
            border-collapse: collapse;
            height: 40px;

            border: 1px solid black
        }




        td {

            height: 40px;
            padding: 3px;

            border: 1px solid ;

            text-align: center;

        }
    </style>
    <h2>

        <p>
            <input class="button" type="button" onclick="history.back();" value="Назад"/>
            <a href="../filiC.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Таблица</a>
            <a href="../Rounds/RA6.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Таблица сводная пустая</a>
            <a href="../Rounds/RA7.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Таблица сводная с очками</a>
            <a href="../protocolC.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Протокол</a>
            
            <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
            <!--            <a href="../category.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Категория</a>-->
            <a href="../index.php" class="button">На главную</a>


        </p>

        <p>
            <?php
                if($cc>2){

                    ?>

                            <?php
                            if($m==1){
                            ?>
                            <a href="../Rounds/C1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=1" class="button2">1</a>
                            <a href="../Rounds/C2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=2" class="button">2</a>
                            <a href="../Rounds/C3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=3" class="button">3</a>
                            <?php
                            if ($cc==5){?>
                            <a href="../Rounds/C4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=4" class="button">4</a>
                            <a href="../Rounds/C5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=5" class="button">5</a>
                            <?php
                            }
                            ?>
                            <?php
                            }
                            ?>
                            <?php
                            if($m==2){
                                ?>
                                <a href="../Rounds/C1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=1" class="button">1</a>
                                <a href="../Rounds/C2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=2" class="button2">2</a>
                                <a href="../Rounds/C3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=3" class="button">3</a>
                                <?php
                                if ($cc==5){?>
                                    <a href="../Rounds/C4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=4" class="button">4</a>
                                    <a href="../Rounds/C5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=5" class="button">5</a>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                            <?php
                            if($m==3){
                                ?>
                                <a href="../Rounds/C1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=1" class="button">1</a>
                                <a href="../Rounds/C2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=2" class="button">2</a>
                                <a href="../Rounds/C3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=3" class="button2">3</a>
                                <?php
                                if ($cc==5){?>
                                    <a href="../Rounds/C4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=4" class="button">4</a>
                                    <a href="../Rounds/C5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=5" class="button">5</a>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                            <?php
                            if($m==4){
                                ?>
                                <a href="../Rounds/C1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=1" class="button">1</a>
                                <a href="../Rounds/C2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=2" class="button">2</a>
                                <a href="../Rounds/C3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=3" class="button">3</a>
                                <?php
                                if ($cc==5){?>
                                    <a href="../Rounds/C4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=4" class="button2">4</a>
                                    <a href="../Rounds/C5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=5" class="button">5</a>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>
                            <?php
                            if($m==5){
                                ?>
                                <a href="../Rounds/C1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=1" class="button">1</a>
                                <a href="../Rounds/C2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=2" class="button">2</a>
                                <a href="../Rounds/C3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=3" class="button">3</a>
                                <?php
                                if ($cc==5){?>
                                    <a href="../Rounds/C4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=4" class="button">4</a>
                                    <a href="../Rounds/C5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&m=5" class="button2">5</a>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            ?>

                    <?php   
                }
            
            ?>
           
        </p>

    </h2>

</head>

<form action="C<?= $m ?>.<?= $cc ?>.php" method="Get">

    <input type="text" hidden name="m" value="<?= $m ?>">
    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">
    <input type="text" hidden name="cc" value="<?= $cc ?>">



    <p>Bесовая категория</p>
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

    <?php
    if ($sr!= 0){?>
        <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
        <?php
    }
    ?>
    <br> <br>
    <button type="submit">Enter</button>
</form>

<body>
