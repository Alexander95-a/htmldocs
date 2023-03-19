<?php require_once("../includes/connect.php"); ?>

<<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>
    <h> Round 4</h>
    <?php require_once ("../includes/header.php");?>
</header>
<?php
$color = false;

if (isset($_POST['do'])) {
    if ($_POST['select'] == 'red') {
        $color = 'style = "background-color: #F44;"';
    }
    elseif ($_POST['select'] == 'blue') {
        $color = 'style = "background-color: #4DD;"';

    }
    elseif ($_POST['select'] == 'green') {
        $color = 'style = "background-color: #CA1;"';
    }
}

?>
<!DOCTYPE html>
<html>
<head>

    <title></title>
</head>
<body <?=$color?>>
<form name="my" action="<?=$_SERVER['PHP_SELF']?>"method="post">
    <select name ="select" value="<?=$name2?>">
        <option value="red"  <?php if ($_POST['select'] == 'red') echo 'selected' ; ?> name="Красный">Красный</option>
        <option value="blue" <?php if ($_POST['select'] == 'blue') echo 'selected' ; ?> name="Синий">Синий</option>
        <option value="green" <?php if ($_POST['select'] == 'green') echo 'selected' ; ?> name="Желтый">Желтый</option>
    </select>
    <input type="submit" name="do" value="Push">
</form>
</body>
</html>
</html>
