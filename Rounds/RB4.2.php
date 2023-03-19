<?php require_once("../includes/connect.php"); ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>

    <?php
    $m=$_GET['m'];
    $s2=$_GET['s2'];
    $ch1=$_GET['ch1'];
    $ch2=$_GET['ch2'];
    $ch3=$_GET['ch3'];
    $ch4=$_GET['ch4'];


    $o1=$_GET['o1'];
    $o2=$_GET['o2'];


    if($m==3) {require_once("../includes/timer.php");}

    if($m==2){
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '121'  WHERE `cb`.`id` = '$o1'");
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '121'  WHERE `cb`.`id` = '$o2'");
    }

    ?>




</head>
<header>

    <?php require_once ("../includes/header1.php");
    require_once ("../includes/hack.php");
    if($s2==1){
        $m=1;
        $info2 = mysqli_query($conn, "UPDATE `cb` SET `sec` = '0'  WHERE `cb`.`id` = '$o1'");
        header("Location:../Rounds/RB4.2.php?w=$w&g=$g&q=$q&z=$z&s2=$s2&m=$m");
    }


    ?>
</header>
<style>
    table {
        margin: 0 auto;
        width: 300px;
        text-align: center;
    }
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }
    td:nth-child(9){background: #696969;color: #fff;}
    td:nth-child(-n+8){background: #919191;color: #fff;}
    .link {color: white;text-decoration: none}
    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 10px;
        width: 200px;
        text-align: center;
    }



</style>
<body>

<div style="margin: auto">



    <table  style="float: left;">




    <table>
        <tr>
            <th colspan="8"><h1> Timer :<?= $s2 ?></h1></th>

        </tr>
        <tr>
            <th colspan="8"><?= $w ?></th>
        </tr>
        <tr>
            <th>Очки</th>
            <th>Жребий</th>
            <th>ФИО</th>
            <th>Страна</th>
            <th colspan="2">Предупреждение</th>

        </tr>

        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `cb` where  uid= 3 ORDER BY `cb`.`id` ASC  ");
        $info1 = mysqli_fetch_all($info1);
        foreach ($info1 as $info1){
            ?>
            <td><?=$info1[8]?></td><!-- победа-->
            <td><?=$info1[1]?></td>
            <td><?=$info1[2]?></td>
            <td><?=$info1[3]?></td> <!-- команда-->
            <td><a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch1=red&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>&o1=<?=$info1[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>" class="button">1</a></td>
            <td><a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch2=red&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&ch3=<?= $ch3 ?>&o1=<?=$info1[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>" class="button">2</a></td>
            </tr>


            <?php
        }
        ?>
        <?php
        $info0 = mysqli_query($conn, "SELECT * FROM `cb` where uid = 4 ORDER BY `cb`.`id` ASC  ");
        $info0 = mysqli_fetch_all($info0);
        foreach ($info0 as $info0){

            ?>
            <td><?=$info0[8]?></td><!-- победа-->
            <td><?=$info0[1]?></td>
            <td><?=$info0[2]?></td>
            <td><?=$info0[3]?></td>
            <td><a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch3=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch4=<?= $ch4 ?>&o2=<?=$info0[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>&o1=<?=$info1[0]?>" class="button">1</a></td>
            <td><a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &ch4=red&ch2=<?= $ch2 ?>&ch1=<?= $ch1 ?>&ch3=<?= $ch3 ?>&o2=<?=$info0[0]?>&m=<?= $m ?>&s2=<?= $s2 ?>&o1=<?=$info1[0]?>" class="button">2</a></td><!-- команда-->

            </tr>


            <?php
        }
        ?>

        <tr>
            <th colspan="8"><a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&m=<?= $m ?> &ch1=yellow&ch2=yellow&ch3=yellow&ch4=yellow&o1=<?=$info1[0]?>&o2=<?=$info0[0]?>" class="button">restart</a>
            </th>

        </tr>

        <div class="button-box">
        <a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=1&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button2">stop</a>
        <a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=3&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button2">start</a>
        <a href="RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &m=2&o1=<?=$info1[0]?>&ch1=<?= $ch1 ?>&ch2=<?= $ch2 ?>&ch3=<?= $ch3 ?>&ch4=<?= $ch4 ?>" class="button2">reset</a>
        </div>




    </table>

        <h1><?= $o?></h1>





        <form action="RB4.2.php" method="Get">



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

        <form action="RB4.2.php" method="Get">


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
                $info = mysqli_query($conn, "SELECT * FROM `category` where `gender` = '$g'ORDER BY `category`.`id` ASC");
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




</div>

</body>
</html>
