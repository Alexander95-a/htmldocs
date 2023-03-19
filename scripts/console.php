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


$info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'");

/*
 * Делаем выборку строки с полученным ID выше
 */



$info = mysqli_fetch_assoc($info);


?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Update Product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<style>
    .button{
        background-color: #efefef;

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
        width: 300px;
        text-align: center;
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
</style>



        <form action="console_alg.php" method="post">
            <h3>Update point</h3>
            <input type="text"  name="info_id" value="<?= $info['id'] ?>">
            <input type="text"  name="id" value="<?= $info['lot'] ?>">
            <input type="text" hidden name="n" value="<?=$n?>">
            <input type="text" hidden name="di" value="<?=$n?>">
            <input type="text" hidden name="l" value="<?= $l ?>">
            <input type="text"  name="N1" value="<?= $info['Name'] ?>">
            <input type="text"  name="T1" value="<?= $info['Team'] ?>">
            <input type="text"  name="uid1" value="<?= $info['uid'] ?>">
            <input type="text"  name="quid1" value="<?= $info['quid'] ?>">
            <input type="text"  name="stat" value="<?= $info["O$n"] ?>">

            <input type="text" hidden name="z" value="<?= $info['cid'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <h1>очки</h1>
            <input type="text" name="score" value="<?= $info["R$n"] ?>" placeholder="Победы ">
            <input type="text" name="lose" value="<?= $info["L$n"] ?> " placeholder="Поражения ">



            <br> <br>

            <button type="submit">Update</button>
            <a href="../Rounds/RA5.php?&sr=<?=$sr?>&w=<?=$w?>&gi=<?=$gi?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&l=<?= $l ?>&n=<?= $n ?>&t1=<?= $info['lot'] ?>&t2=<?= $info1['lot'] ?>" class="button">X</a>



        </form>
<!---->
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
