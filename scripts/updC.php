<?php require_once("../includes/connect.php");


/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$x= $_GET['x'];
$y = $_GET['y'];
$n = $_GET['n'];
$l = $_GET['l'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$sr=$_GET['sr'];
$cc=$_GET['cc'];
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



/*
 * Делаем выборку строки с полученным ID выше
 */

$info8 = mysqli_query($conn, "SELECT * FROM `c$n` INNER JOIN `tablo1` using (lot) WHERE `c$n`.`uid` = '$y' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");
$info9 = mysqli_query($conn, "SELECT * FROM `c$n` INNER JOIN `tablo1` using (lot) WHERE `c$n`.`uid` = '$x' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$info8 = mysqli_fetch_assoc($info8);
$info9 = mysqli_fetch_assoc($info9);

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
    <?php require_once("../includes/currentC.$sr.php");?>
    <title>Update Product</title>
</head>
<style>
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
</style>


<form action="upd_algC.php" method="post">
    <h3>Панель управления поединком</h3>
    <h4>Круговая: раунд <?= $n ?> , категория <?=$w?> кг,</h4>
    <input type="text" hidden name="id" value="<?= $info8['lot'] ?>">
    <input type="text" hidden name="id2" value="<?= $info9['lot']?>">
    <input type="text" hidden name="sr" value="<?=$sr?>">
    <input type="text" hidden name="cc" value="<?=$cc?>">
    <input type="text" hidden name="x" value="<?= $x?>">
    <input type="text" hidden name="y" value="<?= $y?>">
    <input type="text" hidden name="di" value="<?= $n?>">
    <input type="text" hidden name="r" value="<?= $n+1 ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="l" value="<?= $l ?>">
    <input type="text" hidden name="o1" value="<?= $o1 ?>">
    <input type="text" hidden name="ch1" value="<?= $ch1 ?>">
    <input type="text" hidden name="ch2" value="<?= $ch2 ?>">
    <input type="text" hidden name="ch3" value="<?= $ch3 ?>">
    <input type="text" hidden name="ch4" value="<?= $ch4 ?>">
    <input type="text" hidden name="N1" value="<?= $info8['Name'] ?>">
    <input type="text" hidden name="N2" value="<?= $info9['Name'] ?>">
    <input type="text" hidden name="T1" value="<?= $info8['Team'] ?>">
    <input type="text" hidden name="T2" value="<?= $info9['Team'] ?>">
    <input type="text" hidden name="uid1" value="<?= $info8['uid'] ?>">
    <input type="text" hidden name="uid2" value="<?= $info9['uid'] ?>">
    <input type="text" hidden name="z" value="<?= $info8['cid'] ?>">
    <input type="text" hidden name="g" value="<?= $info8['gendage'] ?>">
    <input type="text" hidden name="w" value="<?= $info8['wc'] ?>">
    <div style="float:left;">
    <h2 style="color: red"> <?= $info9['Name'] ?></h2>
    <p  class="zag">Счёт:<?= $info9["R$n"]  ?></p>
    <select name="lose">
        <option value="<?= $info9["R$n"] ?>"><?= $info9["R$n"] ?></option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>
<!--    <td><a href="../scripts/noun1C.php?l=c&n=--><?//= $n?><!--&id=--><?//= $info9['lot']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--    <td><a href="../scripts/med1C.php?l=c&n=--><?//= $n?><!--&id=--><?//= $info8['lot']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
    <p>Предупреждения</p>
    <?php
    if ($ch1== "white"){?>
        <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info9['lot']?>" class="button">1</a>
        <?php
    }
    ?>
    <?php
    if ($ch1== "yellow"){?>
        <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=yellow&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info9['lot']?>" class="<?= $ch1 ?>">1</a>
        <?php
    }
    ?>
    <?php
    if ($ch2== "white"){?>
        <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info9['lot']?>" class="button">2</a>
        <?php
    }
    ?>
    <?php
    if ($ch2== "red"){?>
        <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info9['lot']?>" class="<?= $ch2 ?>">2</a>
        <?php
    }
    ?>
    <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch1=white&ch2=white&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info9['lot']?>" class="button">сброс</a>
        <p>Итог</p>
        <select name="para1">
            <option value="<?= $info9["para"] ?>"><?= $info9["m$n"] ?></option>
            <option value="0">Явка</option>
            <option value="1">Неявка</option>
            <option value="2">Снят врачом</option>
        </select>
        <br>
</div>

    <div style="float:right;">
    <h2 style="color: blue"> <?= $info8['Name'] ?></h2>
    <p class="zag">Счёт:<?= $info8["R$n"] ?></p>
    <select name="score">
        <option value="<?= $info8["R$n"] ?>"><?= $info8["R$n"] ?></option>
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
    </select>

<!--    <td><a href="../scripts/nounC.php?l=c&n=--><?//= $n?><!--&id=--><?//= $info9['lot']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Noun</a></td>-->
<!--    <td><a href="medB.php?l=c&n=--><?//= $n?><!--&id=--><?//= $info9['lot']?><!--&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Med</a></td>-->
    <p>Предупреждения</p>
        <?php
        if ($ch3== "white"){?>
            <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info8['lot']?>" class="button">1</a>
            <?php
        }
        ?>
        <?php
        if ($ch3== "yellow"){?>
            <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=yellow&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info8['lot']?>" class="<?= $ch3 ?>">1</a>
            <?php
        }
        ?>
        <?php
        if ($ch4== "white"){?>
            <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&o2=<?=$info8['lot']?>" class="button">2</a>
            <?php
        }
        ?>
        <?php
        if ($ch4== "red"){?>
            <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch4=red&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&o2=<?=$info8['lot']?>" class="<?= $ch4 ?>">2</a>
            <?php
        }
        ?>


    <a href="updC.php?&t=1&cc=<?= $cc?>&l=<?=$l?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&ch3=white&ch4=white&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&o2=<?=$info8['lot']?>" class="button">сброс</a>
        <p>Итог</p>
        <select name="para">
            <option value="<?= $info8["para"] ?>"><?= $info8["m$n"] ?></option>
            <option value="0">Явка</option>
            <option value="1">Неявка</option>
            <option value="2">Снят врачом</option>
        </select>
        <br>
    </div>

        <h2  class="zag">VS</h2>
    <div class="d1">
        <div class="timer2" >
            <h2 class="timer-text" id="result_shops1"></h2>
            <div align="center" class="tt"><p >Min : sec</p></div>
        </div>

    </div>
        <p>Таймер</p>

        <?php
        if ($t== 2){?>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info9['lot']?>" class="add">start</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info9['lot']?>" class="button">stop</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info9['lot']?>" class="button">reset</a>

            <?php
        }
        ?>
        <?php
        if ($t== 3){?>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info9['lot']?>" class="button">start</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info9['lot']?>" class="button">stop</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info9['lot']?>" class="button">reset</a>

            <?php
        }
        ?>
        <?php
        if ($t== 1){?>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=2&o1=<?=$info9['lot']?>" class="button">start</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=1&o1=<?=$info9['lot']?>" class="red">stop</a>
            <a href="updC.php?l=<?=$l?>&cc=<?= $cc?>&x=<?= $info9["uid"] ?>&y=<?= $info8["uid"] ?>&n=<?=$n?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3&o1=<?=$info9['lot']?>" class="button">reset</a>
            <?php
        }
        ?>



    <br> <br>
    <button class="add" type="submit">Update</button>
    <a href="../Rounds/EC1.php?w=<?=$w?>&g=<?=$g?>&l=<?=$l?>&q=<?= $q ?>&n=<?= $n ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&t1=<?= $info8['lot'] ?>&t2=<?= $info9['lot'] ?>" class="button">back</a>
</form>
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
        }, 990);

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

</body>
    </html><?php
