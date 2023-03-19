<?php require_once("../includes/connect.php");
//require_once ("../includes/header.php");
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

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
<title>Сводная</title>
    
</head>
<header>


<p>
    <input class="button" type="button" onclick="history.back();" value="Назад"/>
<!--                <a href="../fili.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Таблица</a>-->
<a href="../Rounds/RA6.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Таблица сводная </a>
<a href="../Rounds/RA7.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=1&lang=ru&l=g" class="button">Таблица сводная с очками</a>
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
    <a href="../Lot_add.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Вес и жребий</a>
    <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
    <!--            <a href="../category.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Категория</a>-->
    <a href="../index.php" class="button">На главную</a>


</p>
</h2>
    
</header>
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
    <form action="O1.php" method="Get">
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
            <option value="VMI">Ветераны-мужчины  </option>
            <option value="VW">Ветераны-женщины</option>
        </select>
        <br> <br>
        <button class="button" type="submit">Enter</button>
    </form>
    <p><?= $d ?>, <?= $p ?>:</p>



<?php
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' ");
$info5 = mysqli_fetch_assoc($info5);
$c1 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0 ");
$info5 = mysqli_fetch_assoc($info5);
$c2 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  ");
$info5 = mysqli_fetch_assoc($info5);
$c3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0  ");
$info5 = mysqli_fetch_assoc($info5);
$c5 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' ");
$info5 = mysqli_fetch_assoc($info5);
$c4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0  ");
$info5 = mysqli_fetch_assoc($info5);
$c6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '40' ");
$info5 = mysqli_fetch_assoc($info5);
$a4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '50'");
$info5 = mysqli_fetch_assoc($info5);
$b1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '50'");
$info5 = mysqli_fetch_assoc($info5);
$b2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '50'");
$info5 = mysqli_fetch_assoc($info5);
$b3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '50'");
$info5 = mysqli_fetch_assoc($info5);
$b5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '50' ");
$info5 = mysqli_fetch_assoc($info5);
$b4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '50'");
$info5 = mysqli_fetch_assoc($info5);
$b6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '55'");
$info5 = mysqli_fetch_assoc($info5);
$d1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '55'");
$info5 = mysqli_fetch_assoc($info5);
$d2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '55'");
$info5 = mysqli_fetch_assoc($info5);
$d3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '55'");
$info5 = mysqli_fetch_assoc($info5);
$d5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '55' ");
$info5 = mysqli_fetch_assoc($info5);
$d4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '55'");
$info5 = mysqli_fetch_assoc($info5);
$d6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '60'");
$info5 = mysqli_fetch_assoc($info5);
$e1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '60'");
$info5 = mysqli_fetch_assoc($info5);
$e2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '60'");
$info5 = mysqli_fetch_assoc($info5);
$e3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '60'");
$info5 = mysqli_fetch_assoc($info5);
$e5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '60' ");
$info5 = mysqli_fetch_assoc($info5);
$e4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '60'");
$info5 = mysqli_fetch_assoc($info5);
$e6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '65'");
$info5 = mysqli_fetch_assoc($info5);
$f1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '65'");
$info5 = mysqli_fetch_assoc($info5);
$f2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '65'");
$info5 = mysqli_fetch_assoc($info5);
$f3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '65'");
$info5 = mysqli_fetch_assoc($info5);
$f5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '65' ");
$info5 = mysqli_fetch_assoc($info5);
$f4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '65'");
$info5 = mysqli_fetch_assoc($info5);
$f6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '66'");
$info5 = mysqli_fetch_assoc($info5);
$g1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '66'");
$info5 = mysqli_fetch_assoc($info5);
$g2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '66'");
$info5 = mysqli_fetch_assoc($info5);
$g3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '66'");
$info5 = mysqli_fetch_assoc($info5);
$g5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '66' ");
$info5 = mysqli_fetch_assoc($info5);
$g4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '66'");
$info5 = mysqli_fetch_assoc($info5);
$g6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '70'");
$info5 = mysqli_fetch_assoc($info5);
$h1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '70'");
$info5 = mysqli_fetch_assoc($info5);
$h2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '70'");
$info5 = mysqli_fetch_assoc($info5);
$h3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '70'");
$info5 = mysqli_fetch_assoc($info5);
$h5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '70' ");
$info5 = mysqli_fetch_assoc($info5);
$h4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '70'");
$info5 = mysqli_fetch_assoc($info5);
$h6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '71'");
$info5 = mysqli_fetch_assoc($info5);
$i1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '71'");
$info5 = mysqli_fetch_assoc($info5);
$i2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '71'");
$info5 = mysqli_fetch_assoc($info5);
$i3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '71'");
$info5 = mysqli_fetch_assoc($info5);
$i5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '71' ");
$info5 = mysqli_fetch_assoc($info5);
$i4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '71'");
$info5 = mysqli_fetch_assoc($info5);
$i6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '75'");
$info5 = mysqli_fetch_assoc($info5);
$j1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '75'");
$info5 = mysqli_fetch_assoc($info5);
$j2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '75'");
$info5 = mysqli_fetch_assoc($info5);
$j3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '75'");
$info5 = mysqli_fetch_assoc($info5);
$j5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '75' ");
$info5 = mysqli_fetch_assoc($info5);
$j4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '75'");
$info5 = mysqli_fetch_assoc($info5);
$j6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '80'");
$info5 = mysqli_fetch_assoc($info5);
$k1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '80'");
$info5 = mysqli_fetch_assoc($info5);
$k2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '80'");
$info5 = mysqli_fetch_assoc($info5);
$k3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '80'");
$info5 = mysqli_fetch_assoc($info5);
$k5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '80' ");
$info5 = mysqli_fetch_assoc($info5);
$k4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '80'");
$info5 = mysqli_fetch_assoc($info5);
$k6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '81'");
$info5 = mysqli_fetch_assoc($info5);
$l1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '81'");
$info5 = mysqli_fetch_assoc($info5);
$l2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '81'");
$info5 = mysqli_fetch_assoc($info5);
$l3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '81'");
$info5 = mysqli_fetch_assoc($info5);
$l5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '81' ");
$info5 = mysqli_fetch_assoc($info5);
$l4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '81'");
$info5 = mysqli_fetch_assoc($info5);
$l6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '85'");
$info5 = mysqli_fetch_assoc($info5);
$m1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '85'");
$info5 = mysqli_fetch_assoc($info5);
$m2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '85'");
$info5 = mysqli_fetch_assoc($info5);
$m3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '85'");
$info5 = mysqli_fetch_assoc($info5);
$m5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '85' ");
$info5 = mysqli_fetch_assoc($info5);
$m4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '85'");
$info5 = mysqli_fetch_assoc($info5);
$m6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '86'");
$info5 = mysqli_fetch_assoc($info5);
$n1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '86'");
$info5 = mysqli_fetch_assoc($info5);
$n2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '86'");
$info5 = mysqli_fetch_assoc($info5);
$n3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '86'");
$info5 = mysqli_fetch_assoc($info5);
$n5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '86' ");
$info5 = mysqli_fetch_assoc($info5);
$n4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '86'");
$info5 = mysqli_fetch_assoc($info5);
$n6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '90'");
$info5 = mysqli_fetch_assoc($info5);
$o1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '90'");
$info5 = mysqli_fetch_assoc($info5);
$o2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '90'");
$info5 = mysqli_fetch_assoc($info5);
$o3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '90'");
$info5 = mysqli_fetch_assoc($info5);
$o5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '90' ");
$info5 = mysqli_fetch_assoc($info5);
$o4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '90'");
$info5 = mysqli_fetch_assoc($info5);
$o6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '91'");
$info5 = mysqli_fetch_assoc($info5);
$p1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '91'");
$info5 = mysqli_fetch_assoc($info5);
$p2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '91'");
$info5 = mysqli_fetch_assoc($info5);
$p3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '91'");
$info5 = mysqli_fetch_assoc($info5);
$p5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '91' ");
$info5 = mysqli_fetch_assoc($info5);
$p4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '91'");
$info5 = mysqli_fetch_assoc($info5);
$p6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '105'");
$info5 = mysqli_fetch_assoc($info5);
$q1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '105'");
$info5 = mysqli_fetch_assoc($info5);
$q2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '105'");
$info5 = mysqli_fetch_assoc($info5);
$q3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '105'");
$info5 = mysqli_fetch_assoc($info5);
$q5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '105' ");
$info5 = mysqli_fetch_assoc($info5);
$q4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '105'");
$info5 = mysqli_fetch_assoc($info5);
$q6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '106'");
$info5 = mysqli_fetch_assoc($info5);
$r1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '106'");
$info5 = mysqli_fetch_assoc($info5);
$r2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '106'");
$info5 = mysqli_fetch_assoc($info5);
$r3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '106'");
$info5 = mysqli_fetch_assoc($info5);
$r5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '106' ");
$info5 = mysqli_fetch_assoc($info5);
$r4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '106'");
$info5 = mysqli_fetch_assoc($info5);
$r6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '125'");
$info5 = mysqli_fetch_assoc($info5);
$s1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '125'");
$info5 = mysqli_fetch_assoc($info5);
$s2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '125'");
$info5 = mysqli_fetch_assoc($info5);
$s3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '125'");
$info5 = mysqli_fetch_assoc($info5);
$s5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '125' ");
$info5 = mysqli_fetch_assoc($info5);
$s4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '125'");
$info5 = mysqli_fetch_assoc($info5);
$s6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '126'");
$info5 = mysqli_fetch_assoc($info5);
$t1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '126'");
$info5 = mysqli_fetch_assoc($info5);
$t2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '126'");
$info5 = mysqli_fetch_assoc($info5);
$t3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '126'");
$info5 = mysqli_fetch_assoc($info5);
$t5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '126' ");
$info5 = mysqli_fetch_assoc($info5);
$t4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '126'");
$info5 = mysqli_fetch_assoc($info5);
$t6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '130'");
$info5 = mysqli_fetch_assoc($info5);
$u1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '130'");
$info5 = mysqli_fetch_assoc($info5);
$u2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '130'");
$info5 = mysqli_fetch_assoc($info5);
$u3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '130'");
$info5 = mysqli_fetch_assoc($info5);
$u5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '130' ");
$info5 = mysqli_fetch_assoc($info5);
$u4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '130'");
$info5 = mysqli_fetch_assoc($info5);
$u6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT Team, COUNT(DISTINCT Name) AS qty FROM person WHERE NOT Name IN (SELECT Name FROM person GROUP BY Name HAVING COUNT(DISTINCT Team) > 1 ) AND `gendage` LIKE '$g' GROUP BY Team");
$info5 = mysqli_fetch_assoc($info5);
$te1 = $info5 ['Team'];
$info5 = mysqli_query($conn, "SELECT Team, COUNT(DISTINCT Name) AS qty FROM person WHERE NOT Name IN (SELECT Name FROM person GROUP BY Name HAVING COUNT(DISTINCT Team) > 1 )  GROUP BY Team");
$info5 = mysqli_fetch_assoc($info5);
$te2 = $info5 ['qty'];
$info5 = mysqli_query($conn, "SELECT Team, COUNT(DISTINCT Name) AS qty FROM person WHERE NOT Name IN (SELECT Name FROM person GROUP BY Name HAVING COUNT(DISTINCT Team) > 1 ) AND `gendage` LIKE  GROUP BY Team");
$info5 = mysqli_fetch_assoc($info5);
$te3 = $info5 ['qty'];
//$info5 = mysqli_query($conn, "SELECT distinct(*), count(*) FROM `person` WHERE `cid` = '$z'  AND `qga` LIKE  ");
//$info5 = mysqli_fetch_assoc($info5);
//$te5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT Team, COUNT(DISTINCT Name) AS qty FROM person WHERE NOT Name IN (SELECT Name FROM person GROUP BY Name HAVING COUNT(DISTINCT Team) > 1 ) AND `gendage` LIKE '$g' GROUP BY Team");
$info5 = mysqli_fetch_assoc($info5);
$te4 = $info5 ['qty'];
//$info5 = mysqli_query($conn, "SELECT Team, COUNT(DISTINCT Name) AS qty FROM person INNER JOIN `tablo1`  using (lot)WHERE NOT Name IN (SELECT Name FROM person GROUP BY Name HAVING COUNT(DISTINCT Team) > 1 ) AND `gendage` LIKE '$g' GROUP BY Team");
//$info5 = mysqli_fetch_assoc($info5);
//$te6 = $info5 ['count(*)'];

$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z' and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a1 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `lot` !=0  and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a2 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a3 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE  '$g' AND `lot` !=0   and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a5 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g' and `qwc` = '40' ");
$info5 = mysqli_fetch_assoc($info5);
$a4 = $info5 ['count(*)'];
$info5 = mysqli_query($conn, "SELECT count(*) FROM `tablo1` WHERE `qid` = '$z'  AND `qga` LIKE '$g'  AND `lot` !=0   and `qwc` = '40'");
$info5 = mysqli_fetch_assoc($info5);
$a6 = $info5 ['count(*)'];

    ?>

    <table  style="float: left;">
        <tr>
            <th colspan="4">Date:<?= $a ?> - <?= $a2 ?></th>
        </tr>
        <tr>
            <th colspan="4">Список</th>
        </tr>
        <tr>
            <th>Всего</th>
            <th>Прошли взвещивание</th>
            <th colspan="2"><?= $p?></th>
        </tr>
        <tr>
            <td><?=$c1?></td>
            <td><?=$c2?></td>
            <td><?=$c4?></td><!-- победа-->
            <td><?=$c6?></td><!-- поражение-->
        </tr>
        <tr>
            <th colspan="6">по весу</th>
        </tr>
        <div>
            <tr>            
                <td><?=$a3?></td> <!-- команда-->
                <td><?=$a5?></td><!-- поражение-->
                <td><?=$a4?></td><!-- победа-->
                <td><?=$a6?></td><!-- поражение-->
                <td>40</td><!-- поражение-->
            </tr>

            <tr>
                <td><?=$b3?></td> <!-- команда-->
                <td><?=$b5?></td><!-- поражение-->
                <td><?=$b4?></td><!-- победа-->
                <td><?=$b6?></td><!-- поражение-->
                <td>50</td><!-- поражение-->
            </tr>

            <tr>
                <td><?=$d3?></td> <!-- команда-->
                <td><?=$d5?></td><!-- поражение-->
                <td><?=$d4?></td><!-- победа-->
                <td><?=$d6?></td><!-- поражение-->
                <td>55</td><!-- поражение-->
            </tr>

            <tr>
                <td><?=$e3?></td> <!-- команда-->
                <td><?=$e5?></td><!-- поражение-->
                <td><?=$e4?></td><!-- победа-->
                <td><?=$e6?></td><!-- поражение-->
                <td>60</td><!-- поражение-->
            </tr>

            <tr>
                <td><?=$f3?></td> <!-- команда-->
                <td><?=$f5?></td><!-- поражение-->
                <td><?=$f4?></td><!-- победа-->
                <td><?=$f6?></td><!-- поражение-->
                <td>65</td><!-- поражение-->
            </tr>

            <tr> 
                <td><?=$g3?></td> <!-- команда-->
                <td><?=$g5?></td><!-- поражение-->
                <td><?=$g4?></td><!-- победа-->
                <td><?=$g6?></td><!-- поражение-->
                <td>65+</td><!-- поражение-->
            </tr>

            <tr>
                <td><?=$h3?></td> <!-- команда-->
                <td><?=$h5?></td><!-- поражение-->
                <td><?=$h4?></td><!-- победа-->
                <td><?=$h6?></td><!-- поражение-->
                <td>70</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$i3?></td> <!-- команда-->
                <td><?=$i5?></td><!-- поражение-->
                <td><?=$i4?></td><!-- победа-->
                <td><?=$i6?></td><!-- поражение-->
                <td>70+</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$j3?></td> <!-- команда-->
                <td><?=$j5?></td><!-- поражение-->
                <td><?=$j4?></td><!-- победа-->
                <td><?=$j6?></td><!-- поражение-->
                <td>75</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$k3?></td> <!-- команда-->
                <td><?=$k5?></td><!-- поражение-->
                <td><?=$k4?></td><!-- победа-->
                <td><?=$k6?></td><!-- поражение-->
                <td>80</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$l3?></td> <!-- команда-->
                <td><?=$l5?></td><!-- поражение-->
                <td><?=$l4?></td><!-- победа-->
                <td><?=$l6?></td><!-- поражение-->
                <td>80+</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$m3?></td> <!-- команда-->
                <td><?=$m5?></td><!-- поражение-->
                <td><?=$m4?></td><!-- победа-->
                <td><?=$m6?></td><!-- поражение-->
                <td>85</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$n3?></td> <!-- команда-->
                <td><?=$n5?></td><!-- поражение-->
                <td><?=$n4?></td><!-- победа-->
                <td><?=$n6?></td><!-- поражение-->
                <td>85+</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$o3?></td> <!-- команда-->
                <td><?=$o5?></td><!-- поражение-->
                <td><?=$o4?></td><!-- победа-->
                <td><?=$o6?></td><!-- поражение-->
                <td>90</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$p3?></td> <!-- команда-->
                <td><?=$p5?></td><!-- поражение-->
                <td><?=$p4?></td><!-- победа-->
                <td><?=$p6?></td><!-- поражение-->
                <td>90+</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$q3?></td> <!-- команда-->
                <td><?=$q5?></td><!-- поражение-->
                <td><?=$q4?></td><!-- победа-->
                <td><?=$q6?></td><!-- поражение-->
                <td>105</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$r3?></td> <!-- команда-->
                <td><?=$r5?></td><!-- поражение-->
                <td><?=$r4?></td><!-- победа-->
                <td><?=$r6?></td><!-- поражение-->
                <td>105+</td><!-- поражение-->
            </tr>

            <tr>            
                <td><?=$s3?></td> <!-- команда-->
                <td><?=$s5?></td><!-- поражение-->
                <td><?=$s4?></td><!-- победа-->
                <td><?=$s6?></td><!-- поражение-->
                <td>125</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$t3?></td> <!-- команда-->
                <td><?=$t5?></td><!-- поражение-->
                <td><?=$t4?></td><!-- победа-->
                <td><?=$t6?></td><!-- поражение-->
                <td>125+</td><!-- поражение-->
            </tr>

            <tr>           
                <td><?=$u3?></td> <!-- команда-->
                <td><?=$u5?></td><!-- поражение-->
                <td><?=$u4?></td><!-- победа-->
                <td><?=$u6?></td><!-- поражение-->
                <td>Абсолютная</td><!-- поражение-->
            </tr>
        </div>
    </table>


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
