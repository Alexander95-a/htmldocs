<?php
mysqli_report(MYSQLI_REPORT_ERROR|MYSQLI_REPORT_STRICT);
require_once("includes/connect.php");
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
    <?php require_once ("includes/header.php");?>

    <title>Каталог соревнований</title>

</head>

<style>
    th, td {
        padding: 10px;
        text-align: center;
        font-size: 14px;

    }

    th {
        background: #606060;
        color: #fff;

    }

    td {
        background: #b5b5b5;
    }
    table {
        margin: 0 auto;
        padding: 2px;
        width: auto;
        text-align: center;
    }

    form {
        background-color: #d5d5d5;
        border: 1px solid #333;
        margin: 0 auto;
        padding: 10px;
        width: 200px;
        height: 520px;
        text-align: center;
    }
    .field {clear:both; text-align:right; line-height:10px;}
    label {float:left; padding-right:10px;}
    .main {float:left}
</style>
<body>
<table style="width: 1500px;">

    <tr>

        <th>Date of the event </th><!-- 1-->
        <th>Place</th><!-- 2-->
        <th>Country</th><!-- 3-->
        <th>Name of the competition</th><!-- 4-->
        <th>m.Referee</th><!-- 8-->
        <th>Category of m.Referee</th><!-- 10-->
        <th>Country/city</th><!-- 7-->
        <th>m.Secretary</th><!-- 5-->
        <th>Country/city</th><!-- 9-->
        <th>Category of m.Secretary</th><!-- 6-->
         <th>number of 3 seats</th><!-- 11-->
        <th>Competition status</th><!-- 12-->





    </tr>
    <?php
    $info = mysqli_query($conn, "SELECT * FROM `comp`");
//    $infoCount = $info->num_info;
    $info = mysqli_fetch_all($info);

    foreach ($info as $info){
        ?>
        <tr>
            <td><?=$info[1]?> - <?=$info[2]?></td>
            <td><?=$info[3]?></td>
            <td><?=$info[4]?></td>
            <td><?=$info[5]?></td>
            <td><?=$info[6]?></td>
            <td><?=$info[12]?></td>
            <td><?=$info[9]?></td>
            <td><?=$info[7]?></td>
            <td><?=$info[10]?></td>
            <td><?=$info[11]?></td>
            <td><?=$info[13]?></td>
            <td><?php
                if ($info[14]==2) {

                ?>

                    <p>International</p>

                    <?php
                }
                ?>
                <?php

                if ($info[14]==1) {
                ?>
                    <p>Local</p>

                    <?php
                }
                ?></td>
            <td><a href="compu.php?q=<?=$info[0]?>&1=<?= $info[1] ?>&2=<?= $info[2] ?>&3=<?= $info[3] ?>&4=<?= $info[4] ?>&5=<?= $info[5] ?>&6=<?= $info[6] ?>">Spend</a></td>
            <td><a href="compupdate.php?q=<?=$info[0]?>">Update</a></td>
            <td><a href="/scripts/compd.php?q=<?=$info[0]?>" style="color: red">Delete</a></td>

        </tr>
        <?php
    }
    ?>

</table>


<form action="comform.php" method="post">
    <h3>Adding a new competition</h3>
    <div class="main">
        <div class="main">
            <div class="field">
            <label>Start date</label>
            <input type="date" name="date" value="">
            </div>
            <div class="field">
                <label>End date</label>
            </div>
            <div class="field">
                <input type="date" name="date2">
            </div>
            <label>Place</label>
            <div class="field">
                <input type="text" name="place">
            </div>
            <label>Country</label>
            <div class="field">
                <input type="text" name="country">
            </div>
            <label>Name of the competition</label>
            <div class="field">
            <input type="text" name="name">
            </div>
            <label>m.Referee</label>
            <div class="field">
            <input type="text" name="mre">
            </div>
            <select name="rc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <label>Country/city</label>
            <div class="field">
            <input type="text" name="mrc">
            </div>
            <label>m.Secretary</label>
            <div class="field">
            <input type="text" name="mse">
            </div>
            <select name="sc">
                <option value="I кат">I кат</option>
                <option value="II кат">II кат</option>
                <option value="III кат">III кат</option>
                <option value="BK кат">BK кат</option>
                <option value="MK кат">MK кат</option>
            </select>
            <label>Country/City</label>
            <div class="field">
            <input type="text" name="msc">
            </div>
            <label>number of 3 seats</label>
            <div class="field">
            <select name="mesto">
                <option value="1">1 seats</option>
                <option value="2">2 seats</option>
            </select>
            </div>
            <label>Competition status</label>
            <div class="field">
            <select name="stat">
                <option value="1">Local</option>
                <option value="2">International</option>
            </select>
            </div>
        </div>
        <br>
    <br>
    <br>
    <br>
    <br>
    
    <br>
    
    <br>
    <button type="submit" class="add">Add</button>
        
    </div>
    
    
</form>



</body>
</html>