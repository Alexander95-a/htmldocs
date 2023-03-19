<?php require_once("connect.php");
$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = $q");
$info2 = mysqli_fetch_assoc($info2);
$a=$info2['date'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];





?>
<!DOCTYPE html>
<html lang="en">
<footer>
    <meta charset="utf-8">
    <style>
        .button{
            background-color: dimgrey ;

            color: white;
            padding: 5px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
            margin: 2px 2px;
            cursor: pointer;
        }
    </style>
    <h2>

        <p>
            <a href="../fili.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Таблица</a>
            <a href="../protocol.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Протокол</a>
            <a href="../Lot_add.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Вес и жребий</a>
            <a href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Регистрация</a>
            <a href="../comp.php" class="button">Новое соревнование</a>

        </p>

        <p>
            <a href="../Rounds/RG.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">1</a>
            A
            <a href="../Rounds/RA2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">2</a>
            <a href="../Rounds/RA3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">3</a>
            <a href="../Rounds/RA4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">4</a>
            <a href="../Rounds/RA5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">5</a>
            <a href="../Rounds/RA6.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">6</a>
            <a href="../Rounds/RA7.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">7</a>
            <a href="../Rounds/RA8.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">8</a>
            <a href="../Rounds/RA9.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">9</a>
            <a href="../Rounds/RA10.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">10</a>
            B
            <a href="../Rounds/RB2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">2</a>
            <a href="../Rounds/RB3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">3</a>
            <a href="../Rounds/RB4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">4</a>
            <a href="../Rounds/RB5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">5</a>
            <a href="../Rounds/RB6.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">6</a>
            <a href="../Rounds/RB7.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">7</a>
            <a href="../Rounds/RB8.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">8</a>
            <a href="../Rounds/RB9.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">9</a>
            <a href="../Rounds/RB10.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">10</a>
        </p>

    </h2>

</footer>

<body>
