<?php require_once("connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];
$pg=$_GET['pg'];
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

$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

$info30 = mysqli_query($conn, "SELECT * FROM `person`" );

$info30= mysqli_fetch_assoc($info30);

$p3=$info30['Team2'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <style>
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
    <div class="header">
        <h2>

            <p>
                <input class="button" type="button" style="font-weight:700;" onclick="history.back();" value="Назад"/>
<!--                <a href="../fili.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Таблица</a>-->
            <a href="../Rounds/RA6x.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Таблица сводная </a>
            <a href="../Rounds/O1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Cводная </a>
            <a href="../Rounds/Admin2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&l=<?=$l?>&n=<?= $n ?>" class="button">Cетка </a>
<!--                <a href="../Rounds/RA7.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--&n=1&lang=ru&l=g" class="button">Таблица сводная с очками</a>-->
                
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
                <!-- <a href="../Rounds/R<?=$pg?>.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&l=<?= $l ?>&n=<?= $n ?>&sr=<?= $sr ?>" class="button">Обратно</a> -->
                
                <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
                <!--            <a href="../category.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Категория</a>-->
                <a href="../index.php" class="button">На главную</a>


            </p>
        </h2>

    </div>


</head>

<body>