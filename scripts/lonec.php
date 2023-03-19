<?php require_once("../includes/connect.php");
require_once("../includes/header.php");


$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`id` = '$info_id' AND `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");


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

    <h3>Update point</h3>

        <form action="lone_algc.php" method="post">
            <input type="text" name="id" value="<?= $info['lot']?>">
            <input type="text" name="di" value="<?=$n?>">
            <input type="text" name="r" value="<?=$n+1?>">
            <input type="text" name="l" value="<?=$l?>">
            <input type="text" name="N1" value="<?= $info['Name'] ?>">
            <input type="text" name="T1" value="<?= $info['Team'] ?>">
            <input type="text" name="q" value="<?= $q ?>">
            <input type="text" name="z" value="<?= $info['cid'] ?>">
            <input type="text" name="g" value="<?= $info['gendage'] ?>">
            <input type="text" name="w" value="<?= $info['wc'] ?>">
            <h2> Вы точно уверены что необходимо первести <?= $info['Name'] ?> на следующий раунд? </h2>




            <br> <br>

            <button type="submit">confirm</button>
        </form>


</body>
    </html><?php
