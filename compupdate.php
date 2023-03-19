<?php require_once("includes/connect.php");


$id = $_GET['q'];
$info = mysqli_query($conn, "SELECT * FROM `comp` where `comp`.`id` = '$id'");
$info = mysqli_fetch_assoc($info);
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>

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

    table {
        margin: 0 auto;
        padding: 50px;
        width: 300px;
        text-align: center;
    }

    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 20px;
        width: 600px;
        text-align: center;
    }
</style>
<body>







        <form action="compupd.php" method="post">
            <h3> Изменить</h3>
            <h4> <?= $info['name'] ?></h4>
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="number" hidden name="id" value="<?= $info['id'] ?>">


            <p>Дата</p>
            <input type="date" name="date" value="<?= $info['date'] ?>">
            <input type="date2" name="date2" value="<?= $info['date'] ?>">
            <p>Место</p>
            <input type="text" name="place" value="<?= $info['place'] ?>">
            <p>Страна</p>
            <input type="text" name="country" value="<?= $info['country'] ?>">
            <p>Название</p>
            <input type="text" name="name" value="<?= $info['name'] ?>">
            <p>г.судья</p>
            <input type="text" name="mre" value="<?= $info['mreferee'] ?>">
            <select name="rc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <p>Страна/Город</p>
            <input type="text" name="mrc" value="<?= $info['mrc'] ?>">
            <p>г.секретарь</p>
            <input type="text" name="mse" value="<?= $info['msecretary'] ?>">
            <select name="sc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <p>Страна/Город</p>
            <input type="text" name="msc" value="<?= $info['msc'] ?>">
            <p>Кол-во 3 мест</p>
            <select name="mesto">
                <option value="1">1 место</option>
                <option value="2">2 места</option>

            </select>
            <select name="stat">
                <option value="1">Локальный</option>
                <option value="2">Международный</option>

            </select>
            <br> <br>
            <button class="add" type="submit">Изменить</button>
            <a href="../index.php?" class="button">Назад</a>
        </form>



</body>
</html>
