<?php require_once("../includes/connect.php");


/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$sr = $_GET['sr'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$gi=$_GET['gi'];
$o1=$_GET['o1'];
$o2=$_GET['o2'];
$ch1=$_GET['ch1'];
$ch2=$_GET['ch2'];
$ch3=$_GET['ch3'];
$ch4=$_GET['ch4'];
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check1` = '$ch1' WHERE `cb`.`lot` = '$o1'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check2` = '$ch2' WHERE `cb`.`lot` = '$o1'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check1` = '$ch3' WHERE `cb`.`lot` = '$o2'");
$info2 = mysqli_query($conn, "UPDATE `cb` SET `check2` = '$ch4' WHERE `cb`.`lot` = '$o2'");

//$info3 = mysqli_query($conn, "SELECT * FROM `cb` WHERE uid='$sr'");
//$info4 = mysqli_query($conn, "SELECT * FROM `cb` WHERE uid='$sr'*2");
//$info3 = mysqli_fetch_assoc($info3);
//$info4 = mysqli_fetch_assoc($info4);
//$b1=$info3['check1'];
//$b2=$info3['check2'];
//$b3=$info4['check1'];
//$b4=$info4['check2'];

$t = $_GET['t'];
$info2 = mysqli_query($conn, "UPDATE `cb` SET `timer` = '$t' WHERE `cb`.`lot` = '$o1'");
/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`uid` = (select max(uid) from `$l$n` where `uid` < '$info_id' AND `lot` != 0 AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");


/*
 * Делаем выборку строки с полученным ID выше
 */



$info = mysqli_fetch_assoc($info);
$info1 = mysqli_fetch_assoc($info1);

if ($ch1==''){
    $ch1='white';
    $ch2='white';
    $ch3='white';
    $ch4='white';
}

?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once("../includes/current.$sr.php");?>
    <title>Панель поединка:  раунд <?=$n?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

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
    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 10px 50px;
        width: 800px;
        height: 450px;
        text-align: center;
    }
    .red{
        background-color: #c52828;

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
    .yellow{
        background-color: #c59328;

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
    .zag{
        font-size: 30px;
    }

</style>



        <form action="updD_alg.php" method="post">
            <h3>Панель управления поединком</h3>
            <h4>На выбывание: раунд <?= $n ?></h4>
            <input type="text" hidden name="id" value="<?= $info['lot'] ?>">
            <input type="text" hidden name="id2" value="<?= $info1['lot']?>">
            <input type="text" hidden name="gi" value="<?=$gi +1?>">
            <input type="text" hidden name="sr" value="<?=$sr?>">
            <input type="text" hidden name="di" value="<?=$n?>">
            <input type="text" hidden name="r" value="<?=$n+1?>">
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="text" hidden name="l" value="<?= $l ?>">
            <input type="text" hidden name="o1" value="<?= $o1 ?>">
            <input type="text" hidden name="ch1" value="<?= $ch1 ?>">
            <input type="text" hidden name="ch2" value="<?= $ch2 ?>">
            <input type="text" hidden name="ch3" value="<?= $ch3 ?>">
            <input type="text" hidden name="ch4" value="<?= $ch4 ?>">
            <input type="text" hidden name="N1" value="<?= $info['Name'] ?>">
            <input type="text" hidden name="N2" value="<?= $info1['Name'] ?>">
            <input type="text" hidden name="T1" value="<?= $info['Team'] ?>">
            <input type="text" hidden name="T2" value="<?= $info1['Team'] ?>">
            <input type="text"  hidden name="uid1" value="<?= $info['uid'] ?>">
            <input type="text"  hidden name="uid2" value="<?= $info1['uid'] ?>">
            <input type="text" hidden name="uidb1" value="<?= $info['uidb'] ?>">
            <input type="text" hidden name="uidb2" value="<?= $info1['uidb'] ?>">
            <input type="text"  hidden name="ui1" value="<?= $info['quid'] ?>">
            <input type="text"  hidden name="ui2" value="<?= $info1['quid'] ?>">
            <input type="text" hidden name="z" value="<?= $info['cid'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <div style="float:left;">
            <h2 style="color: red"> <?= $info1['Name'] ?></h2>
                <p class="zag">Счёт:<?= $info1["R$n"] ?></p>
            <select name="lose">
                <option value="<?= $info1["R$n"] ?>"><?= $info1["R$n"] ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
<!--            <td><a href="../scripts/noun1C.php?l=--><?//= $l ?><!--&n=--><?//=$n?><!--&id=--><?//= $info1['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--            <td><a href="../scripts/med1B.php?l=--><?//= $l ?><!--&n=--><?//=$n?><!--&id=--><?//= $info1['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
            <p>Предупреждения</p>

                <?php
                if ($ch1== "white"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="button">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch1== "yellow"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="<?= $ch1 ?>">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch2== "white"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1['lot']?>" class="button">2</a>
                    <?php
                }
                ?>
                <?php
                if ($ch2== "red"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1['lot']?>" class="<?= $ch2 ?>">2</a>
                    <?php
                }
                ?>

            <a href="updD.php?&t=1&l=<?=$l?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=white&ch2=white&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="button">сброс</a>

                <p>Итог</p>
                <select name="para1">
                    <option value="<?= $info1["para"] ?>"><?= $info1["m$n"] ?></option>
                    <option value="0">Явка</option>
                    <option value="1">Неявка</option>
                    <option value="2">Снят врачом</option>
                </select>
                <br>
            </div>
            <div style="float:right;">
            <h2 style="color: blue"> <?= $info['Name'] ?></h2>
                <p class="zag">Счёт:<?= $info["R$n"] ?></p>

            <select name="score">
                <option value="<?= $info["R$n"] ?>"><?= $info["R$n"] ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
<!--            <td><a href="../scripts/nounB.php?l=--><?//= $l ?><!--&n=--><?//=$n?><!--&id=--><?//= $info['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--            <td><a href="medB.php?l=--><?//= $l ?><!--&n=--><?//=$n?><!--&id=--><?//= $info['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
            <p>Предупреждения</p>

                <?php
                if ($ch3== "white"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info['lot']?>" class="button">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch3== "yellow"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info['lot']?>" class="<?= $ch3 ?>">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch4== "white"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch3=<?= $ch3 ?>&o2=<?=$info['lot']?>" class="button">2</a>
                    <?php
                }
                ?>
                <?php
                if ($ch4== "red"){?>
                    <a href="updD.php?l=<?=$l?>&t=1&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch3=<?= $ch3 ?>&o2=<?=$info['lot']?>" class="<?= $ch4 ?>">2</a>
                    <?php
                }
                ?>

            <a href="updD.php?&t=1&l=<?=$l?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=white&ch4=white&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&o2=<?=$info['lot']?>" class="button">сброс</a>
                <br>
                <p>Итог</p>
                <select name="para">
                    <option value="<?= $info["para"] ?>"><?= $info["m$n"] ?></option>
                    <option value="0">Явка</option>
                    <option value="1">Неявка</option>
                    <option value="2">Снят врачом</option>
                </select>
            </div>

            <br>
            <br>
            <br>
            <h1>VS</h1>
            <br>

            <p>Таймер</p>
            <?php
            if ($t== 1){?>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="button">start</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="red">stop</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>


                <?php
            }
            ?>
            <?php
            if ($t== 2){?>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="add">start</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="button">stop</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>



                <?php
            }
            ?>
            <?php
            if ($t== 3){?>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="button">start</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="button">stop</a>
                <a href="updD.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&gi=<?=$gi ?>&id=<?= $info["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>


                <?php
            }
            ?>


            <br> <br>

            <button class="add" type="submit">Update</button>
            <a href="../Rounds/ED.php?&sr=<?=$sr?>&w=<?=$w?>&gi=<?=$gi?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&l=<?= $l ?>&n=<?= $n ?>&t1=<?= $info['lot'] ?>&t2=<?= $info1['lot'] ?>" class="button">back</a>



        </form>

<!--<form id="form" method="post" onsubmit="return false">-->
<!---->
<!--    <input type="text"  name="S1" value="--><?//= $info["R$n"] ?><!--">-->
<!--    <input type="text"  name="S2" value="--><?//= $info1["R$n"]?><!--">-->
<!--    <input type="text"  name="N1" value="--><?//= $info['Name'] ?><!--">-->
<!--    <input type="text"  name="N2" value="--><?//= $info1['Name']?><!--">-->
<!--    <input type="text"  name="g" value="--><?//= $info["gendage"] ?><!--">-->
<!--    <input type="text"  name="wc" value="--><?//= $info1["wc"]?><!--">-->
<!---->
<!---->
<!---->
<!--    <input type="submit" value="Update">-->
<!---->
<!--</form>-->
<!---->
<!--<div class="page">-->
<!--    <h1>Какая то информация</h1>-->
<!--    Участник 1 <label id="fio1"><input class="inputs" id="InputFio1" type="text" value="--><?//= $info['Name'] ?><!--"/></label><br>-->
<!--    Участник 2  <label id="fio2"><input class="inputs" id="InputFio2" type="text" value="--><?//= $info1['Name'] ?><!--"/></label><br>-->
<!--     Баллы первого участника <label id="score1"><input id="InputScore1" type="text" /></label><br>-->
<!--    Баллы второго участника  <label id="score2"><input id="InputScore2" type="text" /></label><br> -->
<!--    Раунд  <label id="round"><input class="inputs" id="InputRound" type="text" /></label><br>-->
<!--    Пол и вес  <label id="gender"><input class="inputs" id="InputGender" type="text" /></label><br>-->
<!---->
<!---->
<!--    <input class="buttons" type="button" value="Отправить данные на другую страницу" onclick="new_page()"/>-->
<!--    <input class="buttons" type="button" value="Очистить" onclick="localStorage.clear();"/>-->
<!--</div>-->
<!---->
<!---->
<!--<script type="text/javascript" src="src/js/SEND.js"></script>-->
<!---->
<!--<P>--><?//= $h3 ?><!--</P>-->
<!--<script>-->
<!--    $("document").ready(function (){-->
<!--        $("#form").on("submit", function (){-->
<!--            let dataForm = $(this).serialize()-->
<!--            $.ajax({-->
<!--                url: '/Test.php',-->
<!--                method: 'get',-->
<!--                dataType: 'text',-->
<!--                data: dataForm,-->
<!--                success: function(data){-->
<!--                    console.log(data);-->
<!--                }-->
<!--            });-->
<!--        })-->
<!--    })-->
<!--</script>-->

</body>
    </html><?php
