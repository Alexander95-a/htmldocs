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
$title =$_GET['title'];
$team =$_GET['team'];
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
    <title>Update Product</title>
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
    .link{


        color: #ffffff;

        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;

        cursor: pointer;

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

</style>


        <form action="Search.php" method="GET">
            <h3>Поиск участника по имени</h3>
            <h2 style="color: red"> <?= $info['Name'] ?></h2>
            <input type="text" hidden name="q" value="<?= $q ?>">

            <input type="text" hidden name="z" value="<?= $z ?>">
            <input type="text" hidden name="id" value="<?= $info['id'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <input type="text" hidden name="ask" value="<?= $ask ?>">
            <input type="text" hidden name="tab" value="<?= $tab ?>">

            <p>Name</p>
            <input type="text" name="title" value="">
           
            <br> <br>




            <br> <br>

            <button class="add" type="submit">Update</button>
            <a href="/Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&tab=<?=$tab?>&ask=<?=$ask?>" class="button">back</a>
        </form>
        <form action="Search.php" method="GET">
            <h3>Поиск участников по команде</h3>
            <h2 style="color: red"> <?= $info['Name'] ?></h2>
            <input type="text" hidden name="q" value="<?= $q ?>">

            <input type="text" hidden name="z" value="<?= $z ?>">
            <input type="text" hidden name="id" value="<?= $info['id'] ?>">
            <input type="text" hidden name="g" value="<?= $info['gendage'] ?>">
            <input type="text" hidden name="w" value="<?= $info['wc'] ?>">
            <input type="text" hidden name="ask" value="<?= $ask ?>">
            <input type="text" hidden name="tab" value="<?= $tab ?>">

            <p>Team</p>
            <input type="text" name="team" value="" >
           
            <br> <br>




            <br> <br>

            <button class="add" type="submit">Update</button>
            <a href="/Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&tab=<?=$tab?>&ask=<?=$ask?>" class="button">back</a>
        </form>
        <table>
        <tr>

            <th>  <a class="link" href="../scripts/Search.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=Name&tab=person">Name-Surname</a></th>
            <th>Date of birth</th>
            <th>Class</th>
            <th><a class="link" href="../scripts/Search.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=Team&tab=person">Team</a></th>
            <th>Coach</th>
            <th>Gender & age</th>
            <th>Weight category</th>
            <th>Weight</th>
            <th><a class="link" href="../scripts/Search.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=lot&tab=tablo1">Draw</a></th>
            



        </tr>
        <?php

        $info1 = mysqli_query($conn,  "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `Name` LIKE '$title' ORDER BY `$tab`.`$ask` ASC ");
//        $info1 = mysqli_fetch_all($info1);

        foreach ($info1 as $info1){
            ?>

            <td><?=$info1['Name']?></td><!-- ФИО-->
            <td><?=$info1['BD']?></td> <!-- Год рождения-->
            <td><?=$info1['ks']?></td><!-- Команда-->
            <td><?=$info1['Team']?></td><!-- Команда-->
            <td><?=$info1['trener']?></td><!-- Тренер-->
            <td><?=$info1['gendage']?></td><!-- Пол возраст-->
            <td><?=$info1['wc']?></td><!-- Весовая категория-->
            <td><?=$info1['weight']?></td> <!-- Год рождения-->
            <td><?=$info1['lot']?></td><!-- Команда-->
        </tr>

        <?php
        }

        ?>
         <?php
        $info1 = mysqli_query($conn,  "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `Team` LIKE '$team' ORDER BY `$tab`.`$ask` ASC ");
        foreach ($info1 as $info1){
            ?>
            <td><?=$info1['Name']?></td><!-- ФИО-->
            <td><?=$info1['BD']?></td> <!-- Год рождения-->
            <td><?=$info1['ks']?></td><!-- Команда-->
            <td><?=$info1['Team']?></td><!-- Команда-->
            <td><?=$info1['trener']?></td><!-- Тренер-->
            <td><?=$info3['pol']?></td><!-- Пол возраст-->
            <td><?=$info1['wc']?></td><!-- Весовая категория-->
            <td><?=$info1['weight']?></td> <!-- Год рождения-->
            <td><?=$info1['lot']?></td><!-- Команда-->
        
        </tr>

        <?php
        }

        ?>



    </table>

<!--<p>--><?//= $g ?><!--</p>-->
<!--<p>--><?//= $w ?><!--</p>-->
<!--<p>--><?//= $q ?><!--</p>-->
<!--<p>--><?//= $z ?><!--</p>-->
<!--<p>--><?//= $e ?><!--</p>-->
<!--<p>--><?//= $f ?><!--</p>-->

</body>
    </html><?php
