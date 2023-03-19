<?php require_once("includes/connect.php");


$a=$_GET['a'];
$b=$_GET['b'];
$c=$_GET['c'];
$d=$_GET['d'];
$e=$_GET['e'];
$f=$_GET['f'];

$q=$_GET['q'];
$info1 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q';");
$info1 = mysqli_fetch_assoc($info1);
$z=$info1['cid'];



?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <?php require_once ("includes/header1.php");?>

</head>

<style>
    th, td {
        padding: 10px;
        text-align: center;

    }

    th {
        background: #606060;
        color: #fff;

    }

    td {
        background: #b5b5b5;
    }
    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 10px 50px;
        width: 400px;
        text-align: center;
</style>
<body>


<form action="category.php" method="Get">



    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">

    <p>весовая категория</p>


    <select name="g">
        <option value="m">Мужчины</option>
        <option value="w">Женщины</option>
    </select>


    <br> <br>
    <button type="submit">Select</button>
</form>

<form action="Person.php" method="Get">


    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">

    <p>весовая категория</p>




    <select name="w">

        <?

        $info = mysqli_query($conn, "SELECT * FROM `category` where `gender` = '$g' ORDER BY `category`.`id` ASC");

        foreach ($info as $info){
            ?>
            <option value="<?=$info['weight']?>"><?=$info['weight']?></option>
            <?
        }
        ?>
    </select>
    <br> <br>
    <button type="submit">Enter</button>
</form>





<!---->
<!--        <form action="catform.php" method="post">-->
<!--            <h3>Add new weight category</h3>-->
<!---->
<!--            <input type="text" hidden name="g" value="--><?//= $g ?><!--">-->
<!--            <input type="text" hidden name="w" value="--><?//= $w?><!--">-->
<!--            <input type="text" hidden name="a" value="--><?//= $a ?><!--">-->
<!--            <input type="text" hidden name="b" value="--><?//= $b ?><!--">-->
<!--            <input type="text" hidden name="c" value="--><?//= $c ?><!--">-->
<!--            <input type="text" hidden name="d" value="--><?//= $d ?><!--">-->
<!--            <input type="text" hidden name="e" value="--><?//= $e ?><!--">-->
<!--            <input type="text" hidden name="f" value="--><?//= $f ?><!--">-->
<!--            <input type="text" hidden name="q" value="--><?//= $q ?><!--">-->
<!--            <input type="text" hidden name="z" value="--><?//= $z ?><!--">-->
<!---->
<!--            <p>весовая категория</p>-->
<!--            <input type="number" name="weight">-->
<!---->
<!--            <select name="gen">-->
<!--                <option value="m">Мужчины</option>-->
<!--                <option value="w">Женщины</option>-->
<!--            </select>-->
<!--            <br> <br>-->
<!--            <button type="submit">Добавить</button>-->
<!--        </form>-->



</body>
</html>
