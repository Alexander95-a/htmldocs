<?php require_once("../includes/connect.php");

$l=$_GET['l'];
$n=$_GET['n'];

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];


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
if ($l== 'b') {
    if ($gi == 0) {

        require ("../includes/check.php");
        $
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
        кг, раунд <?= $n ?>,  
        
        <?php
        if($l=="g"){?> без группы
            <?php
        }
        ?>
        <?php
        if($l=="c"){?> Круговая
            <?php
        }
        ?>
        <?php
        if($l!="g"){?>
            группа <?=$l?>
            <?php
        }
        ?>
        <?php
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
                        if ($cc <= 4) {?>
                            Поединок за 3 место
                        <?php
                        }
                    }
            //    $info5 = mysqli_query($conn, "SELECT count(*) FROM `g1` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
            //    $info5 = mysqli_fetch_assoc($info5);
            //    $c3 = $info5 ['count(*)'];
            //
                    if ($c2 <= 1) {
                        if ($cc <= 4) {
                            ?>
                            Поединок за 3 место
                        <?php
                        }
                    }
                }
                if ($f3==1) {
                    if ($c2 == 2) {

                        if ($cc == 2) {
                            ?>
                            Поединок за 3 место
                        <?php
                        }
                    }
                    //    $info5 = mysqli_query($conn, "SELECT count(*) FROM `g1` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                    //    $info5 = mysqli_fetch_assoc($info5);
                    //    $c3 = $info5 ['count(*)'];
                    //
                    if ($c2 <= 1) {
                        if ($cc <= 3) {
                            ?>
                            Поединок за 3 место
                        <?php
                        }
                    }
                }
        ?>
    </title>
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
        font-size: 14px;
        padding: 5px;
        text-align: center;
        border: 1px solid black
    }

    th {
        font-size: 14px;
        
        border-collapse: collapse;

        border: 2px solid black
    }

    tr:nth-child(4n-2){
        font-size: 14px;
        background: white;
        color: black;
        border-collapse: collapse;
        border: 1px solid black

    }
    tr:nth-child(4n-1){
        font-size: 14px;
        background: white;
        color: black;
        border-collapse: collapse;
        border: 1px solid black

       
    }
    
   
    tr{
        font-size: 14px;
        background: #DCDCDC;
        color: black;
        border-collapse: collapse;
        border: 1px solid black

        
    }


    td:nth-child(6){
        
       
        padding: 3px;
        font-size: 14px;

        text-align: center;
        border: 1px solid black

    }
    
    @page {
	margin: 20mm 10mm 20mm 20mm;
    }
    @media print { /* Стиль для печати */
        
        html, body {
		font-size: 14px;
        }
        h1 {
            font-size: 24px;
        }
        h2 {
            font-size: 20px;
        }
        h3 {
            font-size: 18px;
        }
        td {
            font-size: 14px;
        }
        th {
            font-size: 14px;
            color: black;
        }
        
        
        html, body{
		height: 297mm;
		width: 210mm;
	    }
        *, *:before, *:after { 
		color: #000;
		box-shadow: none;
		text-shadow: none;
	    }
        body{
            visibility: hidden;
        }
        /* Блок который нужно отобразить */
        #print-title {
            visibility: visible;
            margin-top: 20px;
        }
        #print-text {
            visibility: visible;
            margin-top: -200px;
        }
        #print-text2 {
            visibility: visible;
            position: absolute;
            bottom: 0;
            width: 100%;
            /* Высота footer */
           
            
        }
        #print-text3 {
            visibility: visible;
            margin-top: -250px;
        }
        * {
		-webkit-print-color-adjust: exact !important;   
		color-adjust: exact !important;              
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
<div style="float:left; width: 600px;">

    

    <div>
        <form action="RA6x.php" method="Get">


           
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
           <!-- <select name="l">-->
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
<!--            </select> -->
            <select class="group" name="l">
                
                <option value="<?$l ?>"><?php
                    if($l=="g"){?> 
                        Round 1
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
                    ?>
                    <?php
                    if($l=="c"){?>
                        Круговая
                        <?php
                    }
                    ?></option>
                <option value="g">Round 1</option>
                <option value="a">A Group</option>
                <option value="b">B Group</option>
                <option value="c">Круговая</option>
            </select>
            <select name="n"  class="round" disabled>
                <option class="$l" value="<?= $n ?>"> Раунд <?= $n?></option>
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

                <option class="b" value="2">Round 2</option>
                <option class="b" value="3">Round 3</option>
                <option class="b" value="4">Round 4</option>
                <option class="b" value="5">Round 5</option>
                <option class="b" value="6">Round 6</option>
                <option class="b" value="7">Round 7</option>
                <option class="b" value="8">Round 8</option>
                <option class="b" value="9">Round 9</option>
                <option class="b" value="10">Round 10</option>

                <option class="c" value="1">Раунд 1</option>
                <option class="c" value="2">Раунд 2</option>
                <option class="c" value="3">Раунд 3</option>
                <option class="c" value="4">Раунд 4</option>
                <option class="c" value="5">Раунд 5</option>
                
            </select>
            <script>
                 $('.group').change(function(){
                    $('.round').prop('selectedIndex', 0); //ощищаем select с моделями при каждом изменении select'а с марками
                    var group = $(this).val(); //получаем value выбранной марки
                    if(group != '') { //проверяем, выбрана ли group
                        $('.round').attr('disabled',false); //открываем select с round
                        $('.round option').css('display','none','background-color','#c52828'); //сначала скрываем все round
                        $('.round option.'+group).css('display','inline'); //затем открываем те, которые нам нужны
                    }
                    else {
                        $('.round').attr('disabled',true); //если не выбрана ни одна group, скрываем select с round
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
    <div id="print-text"  >
        <h3 style="text-align: center;
        width: 900px;"><?= $d ?></h3>
    </div>
    <div id="print-title">
        <!-- <div id="print-text3">
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
        </div> -->


        <table  style="float: left; margin: 0px;



                        border-collapse: collapse;

                        border: 2px solid black;
                        width: 900px;" >


                                <tr>
                                    <th colspan="7" style="  width: 1600px;"><?php
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
                                    </th>

                                </tr>


                                <tr>
                                    <th colspan="7" style="  width: 1600px;"> <?php
                                        if($lang=="ru"){?> <?= $p ?>  <?php
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
                                            ?> kg : 
                                        
                                            <?php
                                            if($lang=="ru"){?> Круг
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
                                            if($lang=="ru"){?> 
                                                    <?php
                                                    if($l=="g"){?> Без группы
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l=="c"){?> Круговая
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l!="g"){?>
                                                        Группа <?=$l?>
                                                        <?php
                                                    }
                                                    ?>
                                                <?php
                                            }
                                            ?>
                                            <?php
                                            if($lang=="en"){?>
                                                <?php
                                                    if($l=="g"){?> No group
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l=="c"){?> Round
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l!="g"){?>
                                                        Group <?=$l?>
                                                        <?php
                                                    }
                                                    ?>
                                                <?php
                                            }
                                            ?>
                                           
                                            <?php
                                                
                                                $info5 = mysqli_query($conn, "SELECT count(*) FROM `b$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info5 = mysqli_fetch_assoc($info5);
                                                $cc = $info5 ['count(*)'];
                                                $info6 = mysqli_query($conn, "SELECT count(DISTINCT place) as count FROM tablo1 WHERE `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
                                                $info6 = mysqli_fetch_assoc($info6);
                                                $kk = $info6 ['count'];
                                                $r = $n+1;
                                                $info7 = mysqli_query($conn, "SELECT count(*) FROM `a$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info7 = mysqli_fetch_assoc($info7);
                                                $c2 = $info7 ['count(*)'];
                                                $info8 = mysqli_query($conn, "SELECT count(*) FROM `c$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info8 = mysqli_fetch_assoc($info8);
                                                $cc3 = $info8 ['count(*)'];
                                                    
                                                if($l!='c'){
                                                    if ($l=="a") {
                                                        if ($c2== 2) {
                                                           {?>
                                                                Final
                                                            <?php
                                                            }
                                                        }
                                        
                                                        
                                                    }
                                                    else{

                                                        if ($f3==2) {
                                                            if ($c2 == 2) {
                                                                if ($cc <= 4) {?>
                                                                    Поединок за 3 место 4
                                                                <?php
                                                                }
                                                            }
                                                  
                                                            if ($c2 == 0) {
                                                                if ($cc == 4) {
                                                                    ?>
                                                                    Поединок за 3 место 3 <?= $c2 ?> <?= $cc ?>
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                        if ($f3==1) {
                                                            if ($c2 == 2) {
    
                                                                if ($cc == 2) {
                                                                    ?>
                                                                    Поединок за 3 место 1
                                                                <?php
                                                                }
                                                            }
                                                            
                                                            if ($c2 == 0) {
    
                                                                if ($cc == 2) {
                                                                    ?>
                                                                    Поединок за 3 место 2
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }

                                                }
                                                       ?>
                        
                        
                                    </th>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($lang=="en") {?>

                                            <?= $p ?>  <?php
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
                                            ?> kg 

                                                : 
                                        
                                            <?php
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
                                                <?php
                                                    if($l=="g"){?> No group
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l=="c"){?> Round
                                                        <?php
                                                    }
                                                    ?>
                                                    <?php
                                                    if($l!="g"){?>
                                                        Group <?=$l?> 
                                                        <?php
                                                    }
                                                    ?>
                                                <?php
                                            }
                                            ?>
                                           
                                            <?php
                                                
                                                $info5 = mysqli_query($conn, "SELECT count(*) FROM `b$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info5 = mysqli_fetch_assoc($info5);
                                                $cc = $info5 ['count(*)'];
                                                $info6 = mysqli_query($conn, "SELECT count(DISTINCT place) as count FROM tablo1 WHERE `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
                                                $info6 = mysqli_fetch_assoc($info6);
                                                $kk = $info6 ['count'];
                                                $r = $n+1;
                                                $info7 = mysqli_query($conn, "SELECT count(*) FROM `a$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info7 = mysqli_fetch_assoc($info7);
                                                $c2 = $info7 ['count(*)'];
                                                $info8 = mysqli_query($conn, "SELECT count(*) FROM `c$n` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                                $info8 = mysqli_fetch_assoc($info8);
                                                $cc3 = $info8 ['count(*)'];
                                                    
                                                if($l!='c'){
                                                    if ($l=="a") {
                                                        if ($c2== 2) {
                                                           {?>
                                                                Final
                                                            <?php
                                                            }
                                                        }
                                        
                                                        
                                                    }
                                                    if($l=="b"){

                                                        if ($f3==2) {
                                                            if ($c2 == 2) {
                                                                if ($cc <= 4) {?>
                                                                    Поединок за 3 место 
                                                                <?php
                                                                }
                                                            }
                                                  
                                                            if ($c2 == 0) {
                                                                if ($cc == 3) {
                                                                    ?>
                                                                    Поединок за 3 место 
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                        if ($f3==1) {
                                                            if ($c2 == 2) {
    
                                                                if ($cc == 2) {
                                                                    ?>
                                                                    Поединок за 3 место 
                                                                <?php
                                                                }
                                                            }
                                                            
                                                            if ($c2 == 0) {
    
                                                                if ($cc == 2) {
                                                                    ?>
                                                                    Поединок за 3 место 
                                                                <?php
                                                                }
                                                            }
                                                        }
                                                    }

                                                }
                                            ?>

                                            <?php
                                            }
                                            
                                            ?>

                                    </th>

                                </tr>
                                <tr>

                                    <th>№</th>
                                    <th style="width: 20px;"> 
                                        <?php
                                        if($lang=="ru"){?> Жребий
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($lang=="en"){?>

                                            Draw
                                            <?php
                                        }
                                        ?>
                                    </th>
                                    <th style="width: 180px;">
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
                                        ?>
                                    </th>
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
                                        ?>
                                    </th>
                                    <th height="40px">
                                        <?php
                                        if($lang=="ru"){?> Технические действия
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($lang=="en"){?>

                                            Technical actions
                                            <?php
                                        }
                                        ?>
                                    </th>
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
                                        ?>
                                    </th>
                                    <th height="60px">
                                        <?php
                                        if($lang=="ru"){?> Время
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if($lang=="en"){?>

                                            Time
                                            <?php
                                        }
                                        ?>
                                    </th>
                        <!--            <th>Date of birth</th>-->


                                



                                </tr>

                                    <?php 
                                    if($l=="c")
                                    {
                                    ?>
                                        
                                                <?php
                                                if($n=="1"){
                                                ?>
                                                    <?php                               
                                                        $info = mysqli_query($conn, "SELECT * FROM `g$n` INNER JOIN `tablo1` using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g$n`.`uid` ASC ");
                                                        foreach ($info as $info)
                                                    {
                                                    ?>
                                                    <tr>
                                                        <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                        <td><?= $info['lot']?></td>
                                                        <td><?= $info['Name']?></td>
                                                        <td><?= $info['Team']?></td> <!-- команда-->
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <?php
                                                        }
                                                        ?>
                                                    <?php 
                                                    }
                                                    ?>

                                                <?php
                                                if($cc3==5){
                                                ?>
                                                        <?php
                                                        if($n=="2")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid`= 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid` = 3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                                

                                                        <?php 
                                                        }
                                                        if($n=="3")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1`  using (lot) WHERE `c3`.`uid`= 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1`  using (lot) WHERE `c3`.`uid` = 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                        <?php 
                                                        }
                                                        if($n=="4")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c4`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1`  using (lot) WHERE `c4`.`uid`= 5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c4`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c4`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1`  using (lot) WHERE `c4`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c4`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c4`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                        <?php 
                                                        }
                                                        if($n=="5")
                                                        {
                                                        ?>
                                                        <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c5` INNER JOIN `tablo1` using (lot) WHERE `c5`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c5`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c5` INNER JOIN `tablo1`  using (lot) WHERE `c5`.`uid`= 4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c5`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c5` INNER JOIN `tablo1` using (lot) WHERE `c5`.`uid`=5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c5`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c5` INNER JOIN `tablo1`  using (lot) WHERE `c5`.`uid` = 3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c5`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c5` INNER JOIN `tablo1` using (lot) WHERE `c5`.`uid`=1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c5`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                        <?php 
                                                        }
                                                        ?>
                                                    
                                                    <?php 
                                                }
                                                ?>
                                                <?php
                                                if($cc3==4){
                                                ?>
                                                        <?php
                                                        if($n=="2")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid`= 3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid` = 4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                                
                                                                

                                                        <?php 
                                                        }
                                                        if($n=="3")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1`  using (lot) WHERE `c3`.`uid`= 2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1`  using (lot) WHERE `c3`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                
                                                    
                                                        <?php 
                                                        }
                                                        ?>
                                                    
                                                    <?php 
                                                }
                                                ?>
                                                <?php
                                                if($cc3==3){
                                                ?>
                                                        <?php
                                                        if($n=="2")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1`  using (lot) WHERE `c2`.`uid`= 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c2` INNER JOIN `tablo1` using (lot) WHERE `c2`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c2`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>

                                                        <?php 
                                                        }
                                                        if($n=="3")
                                                        {
                                                        ?>
                                                            <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info1 = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1`  using (lot) WHERE `c3`.`uid`= 3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC  ");
                                                                foreach ($info1 as $info1)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info1["uid"]?></td>
                                                                <td><?= $info1['lot']?></td>
                                                                <td><?= $info1['Name']?></td>
                                                                <td><?= $info1['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                                <?php                               
                                                                $info = mysqli_query($conn, "SELECT * FROM `c3` INNER JOIN `tablo1` using (lot) WHERE `c3`.`uid`=1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `c3`.`lot` ASC ");
                                                                foreach ($info as $info)
                                                            {
                                                            ?>
                                                            <tr>
                                                                <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                                                <td><?= $info['lot']?></td>
                                                                <td><?= $info['Name']?></td>
                                                                <td><?= $info['Team']?></td> <!-- команда-->
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <?php
                                                                }
                                                                ?>
                                                        <?php 
                                                        }
                                                        ?>
                                                    
                                                    <?php 
                                                }
                                                ?>
                                        
                                    <?php 
                                    }
                                    ?>

                                    <?php 
                                    if($l!="c")
                                    {
                                    ?>  
                                        
                                        <?php                               
                                            $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");
                                            foreach ($info as $info)
                                        {
                                        ?>
                                        <tr>
                                            <td height="12px" id="parametr"><?=$info["uid"]?></td>
                                            <td><?= $info['lot']?></td>
                                            <td><?= $info['Name']?></td>
                                            <td><?= $info['Team']?></td> <!-- команда-->
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <?php
                                            }
                                            ?>
                                    <?php 
                                    }
                                    ?>
                               </tr>
        </table>


            
       
        
</div>

        <br>
        <div id="print-text2">
            <h5 >
                <?php
                if($lang=="ru"){?> Руководитель помоста
                    <?php
                }
                ?>
                <?php
                if($lang=="en"){?>

                    Platform leader
                    <?php
                }
                ?>: ____________________\ ________

            </h5>
            
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