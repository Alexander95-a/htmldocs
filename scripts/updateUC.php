<?php require_once("../includes/connect.php");


/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$info_id = $_GET['id'];

$q=$_GET['q'];
$sr=$_GET['sr'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$n=$_GET['n'];
$l = $_GET['l'];
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
$t = $_GET['t'];
$info2 = mysqli_query($conn, "UPDATE `cb` SET `timer` = '$t' WHERE `cb`.`lot` = '$o1'");

if ($ch1==''){
    $ch1='white';
    $ch2='white';
    $ch3='white';
    $ch4='white';
}

$info = mysqli_query($conn, "SELECT * FROM `g1` INNER JOIN `tablo1` using (lot) WHERE `tablo1`.`lot` = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' and `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");
$info1 = mysqli_query($conn, "select * from `g1` INNER JOIN `tablo1` using (lot) where g1.`cid` = '$z' `lot` = (select max(lot) from `tablo1` where `lot` < '$info_id' AND `lot` != 0 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w') AND `lot` != 0  AND `qid` = '$z'  AND `qga` LIKE '$g' AND `qwc` = '$w' ");
//$info1 = mysqli_query($conn, "select * from `g1` INNER JOIN `tablo1` using (lot) where  `lot` = (select max(lot) from `tablo1` where `lot` < '$info_id' AND `lot` != 0 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w') AND `lot` != 0  AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' and `uibd` like `$z`+`lot`=(select max(lot) from `tablo1` where `lot` < '$info_id' AND `lot` != 0 AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')/'10000'");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$info = mysqli_fetch_assoc($info);
$info1 = mysqli_fetch_assoc($info1);

?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <?php
//    if ($sr!= 1 || $sr !=3){
//        echo "это фиаско братан!!! лыжи не едут!!!";
//    }
    ?>
    <?php require_once("../includes/current1.$sr.php");?>
    <title>Панель поединка: 1 раунд, категория <?=$w?> кг,</title>
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
    .number {
        display: inline-block;
        position: relative;
        width: 80px;

    }
    .number input[type="number"] {
        display: block;
        height: 25px;
        line-height: 32px;
        width: 100%;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        text-align: center;
        -moz-appearance: textfield;
        -webkit-appearance: textfield;
        appearance: textfield;
    }
    .number input[type="number"]::-webkit-outer-spin-button,
    .number input[type="number"]::-webkit-inner-spin-button {
        display: none;
    }
    .number-minus {
        position: absolute;
        top: 1px;
        left: 1px;
        bottom: 1px;
        width: 20px;
        padding: 0;
        display: block;
        text-align: center;
        border: none;
        border-right: 1px solid #ddd;
        font-size: 16px;
        font-weight: 600;
    }
    .number-plus {
        position: absolute;
        top: 1px;
        right: 1px;
        bottom: 1px;
        width: 20px;
        padding: 0;
        display: block;
        text-align: center;
        border: none;
        border-left: 1px solid #ddd;
        font-size: 16px;
        font-weight: 600;
    }
    .zag{
        font-size: 30px;
    }
    

    .button:hover {
        background: #1d49aa;
    }

    .button:focus {
        outline: none;
        box-shadow: 0 0 0 4px #cbd6ee;
    }
</style>


        <form 
        <?php

        if ($info1["RC"]>= "1" || $info1["LC"]>= "1"){?>
           id="Form"
            <?php
        }
        ?>
        action="update_algUC.php" method="post">
        <h3>Панель управления поединком</h3>
        <h4>Круг приведения<?= $n ?></h4>
            <input type="text" hidden name="id" value="<?= $info['lot'] ?>">
            <input type="text" hidden name="id2" value="<?= $info1['lot']?>">
            <input type="text" hidden name="t" value="1">
            <input type="text" hidden name="sr" value="<?=$sr?>">
            <input type="text" hidden name="di" value="<?=$n?>">
            <input type="text" hidden name="r" value="<?=$n+1?>">
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="text" hidden name="l" value="<?= $l ?>">
            <input type="text" hidden name="N1" value="<?= $info['Name'] ?>">
            <input type="text" hidden name="N2" value="<?= $info1['Name'] ?>">
            <input type="text" hidden name="T1" value="<?= $info['Team'] ?>">
            <input type="text" hidden name="T2" value="<?= $info1['Team'] ?>">
            <input type="text" hidden name="uidb1" value="<?= $info['uidb'] ?>">
            <input type="text" hidden name="uidb2" value="<?= $info1['uidb'] ?>">
            <input type="text" hidden name="uid1" value="<?= $info['quid'] ?>">
            <input type="text" hidden name="uid2" value="<?= $info1['quid'] ?>">
            <input type="text" hidden name="z" value="<?= $info['cid'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <input type="text" hidden name="o1" value="<?= $o1 ?>">
            <input type="text" hidden name="ch1" value="<?= $ch1 ?>">
            <input type="text" hidden name="ch2" value="<?= $ch2 ?>">
            <input type="text" hidden name="ch3" value="<?= $ch3 ?>">
            <input type="text" hidden name="ch4" value="<?= $ch4 ?>">
            <div style="float:left;">
            <h2 style="color: red"> <?= $info1['Name'] ?></h2>
            <p class="zag">Счёт:<?= $info1['RC'] ?></p>
            <select name="lose">
                <option value="<?= $info1['RC'] ?>"><?= $info1['RC'] ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
<!--            <div class="number">-->
<!--            <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>-->
<!--            <input type="number" min="-1" value="0" max="1" name="lose" readonly>-->
<!--            <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>-->
<!--            </div>-->

<!--            <td><a href="../scripts/noun1.php?l=a&n=--><?//=$n?><!--&id=--><?//= $info1['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--            <td><a href="../scripts/med.php?l=a&n=--><?//=$n?><!--&id=--><?//= $info1['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
            <p>Предупреждения</p>
                <?php
                if ($ch1== "white"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="button">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch1== "yellow"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="<?= $ch1 ?>">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch2== "white"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1['lot']?>" class="button">2</a>
                    <?php
                }
                ?>
                <?php
                if ($ch2== "red"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1['lot']?>" class="<?= $ch2 ?>">2</a>
                    <?php
                }
                ?>


            <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=white&ch2=white&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1['lot']?>" class="button">сброс</a>
                <p>Итог</p>
                <select name="para1">
                    <option value="<?= $info1["para"] ?>"><?= $info1["mc"] ?></option>
                    <option value="0">Явка</option>
                    <option value="1">Неявка</option>
                    <option value="2">Снят врачом</option>
                </select>
                <br>
            </div>

            <div style="float:right;">

            <h2 style="color: blue"  > <?= $info['Name'] ?></h2>
            <p class="zag">Счёт:<?= $info['RC'] ?></p>
            <select name="score">
                <option value="<?= $info['RC'] ?>"><?= $info['RC'] ?></option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
<!--            <div class="number">-->
<!--                <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>-->
<!--                <input type="number" min="-1" value="0" max="1" name="score" readonly>-->
<!--                <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>-->
<!--            </div>-->
<!--            <td><a href="../scripts/noun.php?l=a&n=--><?//=$n?><!--&id=--><?//= $info['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--            <td><a href="../scripts/med.php?l=a&n=--><?//=$n?><!--&id=--><?//= $info['uid']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
            <p>Предупреждения</p>
                <?php
                if ($ch3== "white"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info['lot']?>" class="button">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch3== "yellow"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info['lot']?>" class="<?= $ch3 ?>">1</a>
                    <?php
                }
                ?>
                <?php
                if ($ch4== "white"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&o2=<?=$info['lot']?>" class="button">2</a>
                    <?php
                }
                ?>
                <?php
                if ($ch4== "red"){?>
                    <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&o2=<?=$info['lot']?>" class="<?= $ch4 ?>">2</a>
                    <?php
                }
                ?>



            <a href="updateUC.php?&t=1&l=<?=$l?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=white&ch4=white&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&o2=<?=$info['lot']?>" class="button">сброс</a>
                <br>
                <p>Итог</p>
                <select name="para">
                    <option value="<?= $info["para"] ?>"><?= $info["mc"] ?></option>
                    <option value="0">Явка</option>
                    <option value="1">Неявка</option>
                    <option value="2">Снят врачом</option>
                </select>
            </div>
            <br>
                <h2 class="zag">VS</h2>

            <div class="d1">
                <div class="timer2" >
                    <h2 class="timer-text" id="result_shops1"></h2>
                    <div align="center" class="tt"><p >Min : sec</p></div>
                </div>

            </div>

                <p>Таймер</p>
            <?php
            if ($t== 1){?>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="button">start</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="red">stop</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>


                <?php
            }
            ?>
            <?php
            if ($t== 2){?>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="add">start</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="button">stop</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>


                <?php
            }
            ?>
            <?php
            if ($t== 3){?>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info1['lot']?>" class="button">start</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info1['lot']?>" class="button">stop</a>
                <a href="updateUC.php?l=<?=$l?>&ch3=<?= $ch3 ?>&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&id=<?= $info["lot"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info1['lot']?>" class="button">reset</a>


                <?php
            }
            ?>



            <br> <br>

            <button type="submit" class="add">Update</button>
            <a href="../Rounds/UC.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&t1=<?= $info['lot'] ?>&t2=<?= $info1['lot'] ?>&sr=<?=$sr?>" class="button">back</a>
        </form>
<!--<p>--><?//= $id ?><!--</p>-->
<!--<p>--><?//= $id2 ?><!--</p>-->
<!--<p>--><?//= $c ?><!--</p>-->
<!--<p>--><?//= $d ?><!--</p>-->
<!--<p>--><?//= $e ?><!--</p>-->
<!--<p>--><?//= $f ?><!--</p>-->

</body>

<script src="../src/js/2.1.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

<style>

</style>


<script>
    $(document).ready(function(){


//var output = $('h1');
        var isPaused = false;
        var time = 0;

        var t = window.setInterval(function()
        {
            if(!isPaused)
            {
                //time++;
                // output.text("Seconds: " + time);
                $("#result_shops1").load("/timeU<?=$sr?>.php");
            }
        }, 1100);

//with jquery
        $('.pause').on('click', function(e)
        {
            e.preventDefault();
            isPaused = true;
        });

        $('.play').on('click', function(e)
        {
            e.preventDefault();
            isPaused = false;
        });


    });
</script>
<script>
    $('#Form').submit(function() {
        var data = new FormData(this),
        result = 'Убедитесь что ввели правильные данные, у '+data.get('N2')+' будет '+data.get('lose')+' очков а у '+data.get('N1')+' будет '+data.get('score')
        return confirm(result);
        });
</script>


    </html><?php
