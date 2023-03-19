<?php require_once("../includes/connect.php");

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Аварийное меню</title>
</head>
<header >
    <?php require_once ("../includes/header.php");
    $info = mysqli_query($conn, "SELECT * FROM `comp` where `cid`='$z'");

    $info = mysqli_fetch_assoc($info);
    $dt= $info['date2'];
    $info1 = mysqli_query($conn, "select DAYOFMONTH('$dt')");

    $info1 = mysqli_fetch_assoc($info1);
    $dt2= $info1["DAYOFMONTH('$dt')"];
    $a= $info['Name'];?>

</header>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }
    td:nth-child(9){background: #696969;color: #fff;}
    td:nth-child(-n+12){background: #919191;color: #fff;}
    .link {color: white;text-decoration: none}
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
<div >

    <form action="RA5.php" method="Get">
        <p><?= $a ?>, <?= $g ?>:<?= $w ?></p>

        <h> Редактор </h>



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
        <select name="g">
            <option value="<?= $g ?>"><?= $p?></option>
            <option value="M">Mужчины</option>
            <option value="W">Женщины</option>
            <option value="JU">Юноши (12-13 лет)</option>
            <option value="JU-1B">Юноши (14-15 лет)</option>
            <option value="JU-2B">Юноши (16-17 лет)</option>
            <option value="JU-1G">Девушки (14-15 лет)</option>
            <option value="JU-2G">Девушки (16-17 лет)</option>
            <option value="JUN">Юниоры</option>
            <option value="JUR">Юниорки</option>
            <option value="VMI">Ветераны-мужчины (I мастер) </option>
            <option value="VMII">Ветераны-мужчины (II мастер)</option>
            <option value="VW">Ветераны-женщины</option>
        </select>

        <select name="l">
            <option value="<?= $l ?>"><?= $l?></option>
            <option value="g">Раунд 1</option>
            <option value="a">A Group</option>
            <option value="b">B Group</option>
            <option value="c">Круговая</option>
        </select>
        <select name="n">
            <option value="<?= $n ?>"><?= $n?></option>
            <option value="1">Раунд 1</option>
            <option value="2">Раунд 2</option>
            <option value="3">Раунд 3</option>
            <option value="4">Раунд 4</option>
            <option value="5">Раунд 5</option>
            <option value="6">Раунд 6</option>
            <option value="7">Раунд 7</option>
            <option value="8">Раунд 8</option>
            <option value="9">Раунд 9</option>
            <option value="10">Раунд 10</option>

        </select>



        <select name="w">
            <option value="<?= $w ?>"><?= $w ?></option>

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
        <button type="submit">Enter</button>
    </form>


    <table>

        <tr>
            <th colspan="11">table</th>
        </tr>
        <tr>
            <th>id</th>
            <th>№ в таблице</th>
            <th>ФИО</th>
            <th>lot</th>
            <th>Win</th>
            <th>Lose</th>
            <th>Team</th>
            <th>Итог раунда</th>
            <th>Статус</th>
            <th>Соперник</th>
            <th>Место</th>


        </tr>

        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `$l$n`  INNER JOIN `tablo1`  using (lot)  WHERE  `lot` !=0 AND `cid` = '$z' AND `qid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

        foreach ($info1 as $info1){
            ?>
            <td><?= $info1["id"] ?></td>
            <td><?= $info1["uid"] ?></td>
            <td><?= $info1["Name"] ?></td>
            <td><?= $info1["lot"] ?></td>
            <td><?= $info1["R$n"] ?></td><!-- победа-->
            <td><?= $info1["L$n"] ?></td><!-- поражение-->
            <td><?= $info1["Team"] ?></td>
            <td><?= $info1["m$n"] ?></td>
            <td><?= $info1["para"] ?></td><!-- победа-->
            <td><?= $info1["O$n"] ?></td><!-- поражение-->
            <td><?= $info1["place"] ?></td>


            <td> <a href="../scripts/console.php?l=<?=$l?>&n=<?=$n?>&id=<?= $info1['uid'] ?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>">Update</a> </td>
            </tr>


            <?php
        }
        ?>

    </table>

</div>




</body>
</html>
