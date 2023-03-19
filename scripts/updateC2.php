<?php require_once("../includes/connect.php");


/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$id = $_GET['id'];
$id2 = $_GET['id2'];

$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$l = $_GET['l'];
$n = $_GET['n'];
$cc = $_GET['cc'];
$sr = $_GET['sr'];
/*
 * Делаем выборку строки с полученным ID выше
 */

$info2 = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `tablo1`.`lot` = '$id' and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");
$info3 = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `tablo1`.`lot` = '$id2' and `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$info2 = mysqli_fetch_assoc($info2);
$info3 = mysqli_fetch_assoc($info3);

?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
<!--    --><?php //require_once("../includes/current1.$sr.php");?>
    <?php require_once ("../includes/head.php");?>
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
        width: 800px;
        height: 450px;
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
    .zag{
        font-size: 30px;
    }
    }

    .button:hover {
        background: #1d49aa;
    }

    .button:focus {
        outline: none;
        box-shadow: 0 0 0 4px #cbd6ee;
    }
</style>
    <h3>Update point</h3>
<form action="updateC2.php" method="Get">
            <h3>Панель управления поединком</h3>
            <h4>Круговая: раунд <?= $n ?>, категория <?=$w?> кг,</h4>



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



    <p>весовая категория</p>
    <select name="g">
        <option value="<?= $g ?>"><?= $p?></option>
        <option value="w">Женщины</option>
        <option value="m">Мужчины</option>
    </select>

    <select name="sr">
        <option value="<?= $sr ?>">Секретарь<?= $sr?></option>
        <option value="1">Секретарь 1</option>
        <option value="2">Секретарь 2</option>
        <option value="3">Секретарь 3</option>
    </select>



    <select name="w">
        <option value="<?= $w ?>"><?= $w ?></option>

        <option value="40">40</option>
        <option value="50">50</option>
        <option value="55">55</option>
        <option value="60">60</option>
        <option value="65">65</option>
        <option value="66">65+</option>
        <option value="70">70</option>
        <option value="71">70+</option>
        <option value="80">80</option>
        <option value="81">80+</option>
        <option value="85">85</option>
        <option value="86">85+</option>
        <option value="90">90</option>
        <option value="105">105</option>
        <option value="106">105+</option>
        <option value="125">125</option>
        <option value="126">125+</option>
        <option value="130">Абсолютная</option>

    </select>
    <br> <br>
    <button type="submit">Enter</button>
</form>



</form>
<form action="updateC2.php" method="Get">
<!--    <input type="text" name="id" value="--><?//= $info['lot'] ?><!--">-->
<!--    <input type="text" name="id2" value="--><?//= $info1['lot']?><!--">-->




    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">
    <input type="text" hidden name="sr" value="<?=$sr?>">
    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="w" value="<?= $w ?>">


    <select name="id">

        <?
        $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");
        foreach ($info as $info){
            ?>
            <option value="<?=$info['lot']?>"><?=$info['Name']?></option>
            <option value="32"><?=$info['Name']?></option>
            <option value="23"><?=$info['Name']?></option>
            <?
        }
        ?>
    </select>
    <select name="id2">

        <?
        $info1 = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ");
        foreach ($info1 as $info1){
            ?>
            <option value="<?=$info1['lot']?>"><?=$info1['Name']?></option>
            <option value="32"><?=$info1['Name']?></option>
            <option value="23"><?=$info1['Name']?></option>
            <?
        }
        ?>
    </select>
    <a href="../Rounds/EC1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&n=<?= $n ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&t1=<?= $info['lot'] ?>&t2=<?= $info1['lot'] ?>" class="button">back</a>

    <br> <br>
    <button type="submit">Select</button>
</form>

        <form action="update_algC.php" method="post">

<!--            <input type="text" name="id" value="--><?//= $info['lot'] ?><!--">-->
<!--            <input type="text" name="id2" value="--><?//= $info1['lot']?><!--">-->
            <input type="text" hidden name="sr" value="<?=$sr?>">
            <input type="text" hidden name="cc" value="<?=$cc?>">
            <input type="text" name="di" value="<?= $n ?>">
            <input type="text" name="r" value="<?= $n+1 ?>">
            <input type="text" name="q" value="<?= $q ?>">
            <input type="text" name="l" value="<?= $l ?>">
            <input type="text" name="N1" value="<?= $info['Name'] ?>">
            <input type="text" name="N2" value="<?= $info1['Name'] ?>">
            <input type="text" name="T1" value="<?= $info['Team'] ?>">
            <input type="text" name="T2" value="<?= $info1['Team'] ?>">
            <input type="text" name="uid1" value="<?= $info['uid'] ?>">
            <input type="text" name="uid2" value="<?= $info1['uid'] ?>">
            <input type="text" name="z" value="<?= $info['cid'] ?>">
            <input type="text" name="g" value="<?= $info['gendage'] ?>">
            <input type="text" name="w" value="<?= $info['wc'] ?>">

            <h2 style="color: red"> <?= $info2['Name'] ?></h2>
            <p>Счёт:<?= $info3['R1'] ?></p>
            <input type="number" value="0" name="lose">
            <td><a href="../scripts/noun1C.php?l=a&n=1&id=<?= $info1['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Noun</a></td>
            <td><a href="../scripts/med1C.php?l=a&n=1&id=<?= $info1['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Med</a></td>
            <h2>VS</h2>
            <h2 style="color: blue"> <?= $info2['Name'] ?></h2>
            <p>Счёт:<?= $info2['R1'] ?></p>
            <input type="number" value="0" name="score">
            <td><a href="../scripts/nounC.php?l=a&n=1&id=<?= $info['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Noun</a></td>
            <td><a href="medB.php?l=a&n=1&id=<?= $info['lot']?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Med</a></td>



            <br> <br>

            <button type="submit">Update</button>
            <a href="../Rounds/EC1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&n=<?= $n ?>&z=<?= $z ?>&sr=<?= $sr ?>&cc=<?= $cc ?>&t1=<?= $info['lot'] ?>&t2=<?= $info1['lot'] ?>" class="button">back</a>
        </form>
<p><?= $g ?></p>
<p><?= $w ?></p>
<p><?= $q ?></p>
<p><?= $z ?></p>
<p><?= $e ?></p>
<p><?= $f ?></p>

</body>
    </html><?php
