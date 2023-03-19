<?php require_once("../includes/connect.php");

require_once("../includes/header.php");
/*
 * Получаем ID продукта из адресной строки - /product.php?id=1
 */

$info_id = $_GET['id'];
$n = $_GET['n'];
$l = $_GET['l'];
$q=$_GET['q'];
$z=$_GET['z'];
$g=$_GET['g'];
$w=$_GET['w'];
$sr=$_GET['sr'];
/*
 * Делаем выборку строки с полученным ID выше
 */

$info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`lot` = '$info_id' AND `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");
$info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) where `$l$n`.`lot` = (select max(lot) from `$l$n` where `lot` < '$info_id'  AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w')");


/*
 * Делаем выборку строки с полученным ID выше
 */



$info = mysqli_fetch_assoc($info);
$info1 = mysqli_fetch_assoc($info1);


?>

    <!doctype html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <?php require_once("../includes/current1.$sr.php");?>
    <title>Update Product</title>
</head>

    <h3>Update point</h3>

        <form action="upd_algC.php" method="post">
            <input type="text" name="id" value="<?= $info['lot']?>">
            <input type="text" name="id2" value="<?= $info1['lot']?>">
            <input type="text" name="di" value="<?=$n?>">
            <input type="text" name="l" value="<?=$l?>">
            <input type="text" hidden name="sr" value="<?=$sr?>">

            <input type="text" name="r" value="<?=$n+1?>">
            <input type="text" name="N1" value="<?= $info['Name'] ?>">
            <input type="text" name="N2" value="<?= $info1['Name'] ?>">
            <input type="text" name="T1" value="<?= $info['Team'] ?>">
            <input type="text" name="T2" value="<?= $info1['Team'] ?>">
            <input type="text" name="q" value="<?= $q ?>">
            <input type="text" name="z" value="<?= $info['cid'] ?>">
            <input type="text" name="g" value="<?= $info['gendage'] ?>">
            <input type="text" name="w" value="<?= $info['wc'] ?>">

            <h2> <?= $info['Name'] ?></h2>
            <p>Счёт</p>
            <input type="number" name="score">
            <h2>VS</h2>
            <h2> <?= $info1['Name'] ?></h2>
            <p>Счёт</p>
            <input type="number" name="lose">

            <br> <br>

            <button type="submit">Update
        </form>


</body>
    </html><?php
