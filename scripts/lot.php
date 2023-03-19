<?php require_once("../includes/connect.php");
$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];
$q=$_GET['q'];
$id=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];









/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$info_id = $_GET['id'];

/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `id` = '$info_id'");

/*
 * Преобразовывем полученные данные в нормальный массив
 * Используя функцию mysqli_fetch_assoc массив будет иметь ключи равные названиям столбцов в таблице
 */

$info = mysqli_fetch_assoc($info);
?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Жребий</title>
</head>

<style>
    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 100px auto;
        padding: 10px 50px;
        width: 500px;
        text-align: center;
    }
    input:invalid {
        border: 2px solid red;
    }

    input:valid {
        border: 2px solid #00ff00;
    }
    .text-field__input:disabled,
    .text-field__input[readonly] {
        background-color: #f5f5f5;
        opacity: 1;
    }
    .text-field__input::placeholder {
        color: #212529;
        opacity: 0.4;
    }

    .text-field__input:focus {
        color: #212529;
        background-color: #fff;
        border-color: #bdbdbd;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(158, 158, 158, 0.25);
    }

    .text-field__input:disabled,
    .text-field__input[readonly] {
        background-color: #f5f5f5;
        opacity: 1;
    }
    .text-field_floating {
        position: relative;
    }
    .text-field_floating .text-field__input {
        height: calc(3.5rem + 2px);
        line-height: 1.25;
        padding: 1rem 0.75rem;
    }
    .text-field_floating .text-field__label {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        padding: 1rem .75rem;
        pointer-events: none;
        border: 1px solid transparent;
        transform-origin: 0 0;
        transition: opacity .15s ease-in-out, transform .15s ease-in-out;
    }
    .text-field_floating .text-field__input::-moz-placeholder {
        color: transparent;
    }
    .text-field_floating .text-field__input::placeholder {
        color: transparent;
    }
    .text-field_floating .text-field__input:focus,
    .text-field_floating .text-field__input:not(:placeholder-shown) {
        padding-top: 1.625rem;
        padding-bottom: .625rem;
    }
    .text-field_floating .text-field__input:focus~.text-field__label,
    .text-field_floating .text-field__input:not(:placeholder-shown)~.text-field__label {
        opacity: .65;
        transform: scale(.85) translateY(-.75rem) translateX(.15rem);
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
</style>



        <form action="lot_alg.php" method="post">
            <h3>Ввести вес и жребий</h3>
            <input type="text" hidden name="id" value="<?= $info['id'] ?>">
            <input type="text" hidden name="g" value="<?= $g ?>">
            <input type="text" hidden name="w" value="<?= $w ?>">
            <input type="text" hidden name="a" value="<?= $a ?>">
            <input type="text" hidden name="b" value="<?= $b ?>">
            <input type="text" hidden name="c" value="<?= $c ?>">
            <input type="text" hidden name="d" value="<?= $d ?>">
            <input type="text" hidden name="e" value="<?= $e ?>">
            <input type="text" hidden name="f" value="<?= $f ?>">
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="text" hidden name="z" value="<?= $z ?>">
            <input type="text" hidden name="n" value="<?= $info['Name'] ?>">

            <p> <?= $info['Name'] ?></p>

            <p>Введите вес </p>
            <div class="text-field text-field_floating-2">
                <input class="text-field__input" type="text" value="<?= $info['weight'] ?>" name="weight" required  pattern="\d+(\.\d{2})?" placeholder="Разделение точкой (.)!">

            </div>
            <p>Введите жребий </p>

            <div class="text-field text-field_floating-2">
                <input class="text-field__input" type="text" value="<?= $info['lot'] ?>" name="lot" required  pattern="[0-9]{1,5}" placeholder="Только цифры ">

            </div>

            <p>Изменить весовую категорию </p>

            <select  name="wc">
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
                <option value="50">50</option>
                <option value="55">55</option>
                <option value="60">60</option>
                <option value="65">65</option>
                <option value="66">65+</option>
                <option value="70">70</option>
                <option value="71">70+</option>
                <option value="75">75</option>
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

            <button class="add" type="submit">Update</button>
        </form>

<!--<p>--><?//= $g ?><!--</p>-->
<!--<p>--><?//= $w ?><!--</p>-->
<!--<p>--><?//= $a ?><!--</p>-->
<!--<p>--><?//= $b ?><!--</p>-->
<!--<p>--><?//= $c ?><!--</p>-->
<!--<p>--><?//= $d ?><!--</p>-->
<!--<p>--><?//= $e ?><!--</p>-->
<!--<p>--><?//= $f ?><!--</p>-->
<!--<p>--><?//= $q ?><!--</p>-->
<!--<p>--><?//= $z ?><!--</p>-->
</body>


    </html>
