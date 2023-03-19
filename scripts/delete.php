<?php require_once("../includes/connect.php");


/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$info_id = $_GET['id'];

$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$l = $_GET['l'];
$ask =$_GET['ask'];
$tab =$_GET['tab'];
/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `person` WHERE `person`.`id` = '$info_id'");


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
    <title>Update Product</title>
</head>
<style>
    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 20px;
        width: 600px;
        text-align: center;
    }
    .add{
        background-color: #c52828;

        color: #ffffff;
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
</style>


        <form action="deleteP.php" method="post">
            <h3>Удалить участника</h3>
            <br>
            <br>
            <h2 style="color: red"> Вы точно хотите удалить <?= $info['Name'] ?>?</h2>

            <input type="text" hidden name="z" value="<?= $info['cid'] ?>">
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="text" hidden name="id" value="<?= $info['id'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <input type="text" hidden name="ask" value="<?= $ask ?>">
            <input type="text" hidden name="tab" value="<?= $tab ?>">

            <br>
            <br>

            <button class="add" type="submit">ДА</button>
            <a href="/Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&tab=<?=$tab?>&ask=<?=$ask?>" class="button">НЕТ</a>
        </form>
<!--<p>--><?//= $g ?><!--</p>-->
<!--<p>--><?//= $w ?><!--</p>-->
<!--<p>--><?//= $q ?><!--</p>-->
<!--<p>--><?//= $z ?><!--</p>-->
<!--<p>--><?//= $e ?><!--</p>-->
<!--<p>--><?//= $f ?><!--</p>-->

</body>
    </html><?php
