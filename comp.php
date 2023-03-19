<?php require_once("includes/connect.php");
$info = mysqli_query($conn, "SELECT * FROM `comp`");

$info = mysqli_fetch_assoc($info);
$dt= $info['date2'];
$info1 = mysqli_query($conn, "select DAYOFMONTH('$dt')");

$info1 = mysqli_fetch_assoc($info1);
$dt2= $info1["DAYOFMONTH('$dt')"];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Каталог</title>

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
</style>
<body>
<table>

    <tr>
        <th>id</th>
        <th>Дата <?=$dt?> </th><!-- 1-->
        <th>Место</th><!-- 2-->
        <th>Страна</th><!-- 3-->
        <th>Название</th><!-- 4-->
        <th>Главный судья</th><!-- 5-->
        <th>категория</th><!-- 6-->
        <th>Страна/город</th><!-- 7-->
        <th>Главный секретарь</th><!-- 8-->
        <th>Страна/город</th><!-- 9-->
        <th>Категория</th><!-- 10-->




    </tr>
    <?php
    $info = mysqli_query($conn, "SELECT * FROM `comp`");
    $infoCount = $info->num_info;
    $info = mysqli_fetch_all($info);

    foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info[0]?></td>
            <td><?=$info[1]?> - <?=$info[2]?></td>
            <td><?=$info[3]?></td>
            <td><?=$info[4]?></td>
            <td><?=$info[5]?></td>
            <td><?=$info[11]?></td>
            <td><?=$info[8]?></td>
            <td><?=$info[6]?></td>
            <td><?=$info[9]?></td>
            <td><?=$info[10]?></td>
            <td><?=$info[11]?></td>

            <td><a href="compu.php?q=<?=$info[0]?>&1=<?= $info[1] ?>&2=<?= $info[2] ?>&3=<?= $info[3] ?>&4=<?= $info[4] ?>&5=<?= $info[5] ?>&6=<?= $info[6] ?>">Провести</a></td>
            <td><a href="compupdate.php?id=<?=$info[0]?>">Изменить</a></td>
            <td><a href="/scripts/compd.php?q=<?=$info[0]?>" style="color: red">Удалить</a></td>

        </tr>
        <?php
    }
    ?>

</table>






        <h3>Add new competency</h3>
        <form action="comform.php" method="post">


            <p>Дата начала</p>
            <input type="date" name="date" value="">
            <p>Дата окончания</p>
            <input type="date" name="date2">
            <p>Место</p>
            <input type="text" name="place">
            <p>Страна</p>
            <input type="text" name="country">
            <p>Название</p>
            <input type="text" name="name">
            <p>г.судья</p>
            <input type="text" name="mre">
            <select name="rc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <p>Страна/Город</p>
            <input type="text" name="mrc">
            <p>г.секретарь</p>
            <input type="text" name="mse">
            <select name="sc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <p>Страна/Город</p>
            <input type="text" name="msc">
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
            <button type="submit">Добавить</button>
        </form>



</body>
</html>
