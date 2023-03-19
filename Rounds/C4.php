<?php require_once("../includes/connect.php");
$cc=$_GET['cc'];
$sr=$_GET['sr'];
require_once ("../includes/headerC.php");
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Round 4 <?= $g ?>:<?php
        if($w==66){?> 65+
            <?php
        }
        ?>

        <?php
        if($w==71){?> 70+
            <?php
        }
        ?>
        <?php
        if($w==76){?> 75+
            <?php
        }
        ?>
        <?php
        if($w==81){?> 80+
            <?php
        }
        ?>
        <?php
        if($w==86){?> 85+
            <?php
        }
        ?>
        <?php
        if($w==96){?> 90+
            <?php
        }
        ?>
        <?php
        if($w==106){?> 105+
            <?php
        }
        ?>
        <?php
        if($w==126){?> 125+
            <?php
        }
        ?>
        <?php
        if($w!=66&$w!=76&$w!=71&$w!=81&$w!=86&$w!=96&$w!=106&$w!=126){?>
            <?=$w?>
            <?php
        }
        ?>
        кг

        </title>
</head>
<header>
    <h2> Round 4 </h2>
    <?php
//    require_once("../includes/headerC.php");
//    $info5 = mysqli_query($conn, "SELECT count(*) FROM `person` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` = '$w'");
//    $info5 = mysqli_fetch_all($info5);
//    foreach ($info5 as $info5)
//        $cc = $info5 [0];
//
//    if ($cc == 5) {
//        header("Location:../Rounds/C4.$cc.php?w=$w&g=$g&q=$q&z=$z&l=$l&n=$n&cc=$cc&sr=$sr");
//    }


    ?>
</header>
<style>
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
    table {
        margin: 0px;

        width: 500px;

        border-collapse: collapse;

        border: 2px solid black;

    }

    th, td {
        padding: 10px;
        text-align: center;
    }

    th {
        background: #606060;
        color: #fff;
        border-collapse: collapse;

        border: 2px solid black
    }




    td {


        padding: 3px;

        border: 1px solid ;

        text-align: center;

    }

    /* td:nth-child(9){background: #696969;color: #fff;}
    td:nth-child(-n+8){background: #919191;color: #fff;} */
    .link {color: white;text-decoration: none}

    @media print { /* Стиль для печати */
        body{
            visibility: hidden;
        }
        /* Блок который нужно отобразить */
        #print-title {
            visibility: visible;
            margin-top: -250px;

        }
        #print-text {
            visibility: visible;
            margin-top: -250px;
        }
        #no {
            visibility: hidden;
            margin-top: -250px;

        }

    }

</style>
<body>
<div style="float:left;">
    <div id="print-title">

    <p><?= $d ?>  </p>

    <table  style="float: left;">
        <tr>
            <th colspan="5">Date:<?= $a ?></th>
            <th><?= $p ?></th>

        </tr>

        <tr>
            <th colspan="5">Red side</th>
            <th><?= $w ?> kg</th>

        </tr>
        <tr>

            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
<!--            <th>Tecnical actions</th>-->
            <th>Win</th>
            <th>Lose</th>
<!--            <th>Med</th>-->
<!--            <th>Noun</th>-->
            <th>VS</th>



        </tr>
        <?php
        $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=4 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");

        foreach ($info as $info){
        ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
<!--            <td></td>-->
            <td id="no"><?=$info['R4']?></td><!-- победа-->
            <td id="no"><?=$info['L4']?></td><!-- поражение-->
<!--            <td></td>-->
<!--            <td></td>-->
            <td  id="no"></td>


            <?php
            }
            ?>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=3 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

            foreach ($info as $info){
            ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
<!--            <td></td>-->
            <td id="no"><?=$info['R4']?></td><!-- победа-->
            <td id="no"><?=$info['L4']?></td><!-- поражение-->
<!--            <td></td>-->
<!--            <td></td>-->
            <td  id="no"></td>


            <?php
            }
            ?>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1` using (lot) WHERE `c4`.`uid`=2 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ");

            foreach ($info as $info){
            ?>
        <tr>

            <td><?=$info['lot']?></td>
            <td><?= $info['Name']?></td>
            <td><?=$info['Team']?></td> <!-- команда-->
<!--            <td></td>-->
            <td id="no"><?=$info['R4']?></td><!-- победа-->
            <td id="no"><?=$info['L4']?></td><!-- поражение-->
<!--            <td></td>-->
<!--            <td></td>-->
            <td  id="no"></td>


            <?php
            }
            ?>
<!--        <tr>-->
<!--            <th colspan="5" id="no">M.Referee:--><?//= $e ?><!--</th>-->
<!---->
<!--        </tr>-->
    </table>
    <table>
        <tr>
            <th colspan="5"><?= $c ?>:<?= $b ?></th>

        </tr>
        <tr>
            <th colspan="5">Blue side</th>
        </tr>
        <tr>
            <th>Win</th>
            <th>Lose</th>
            <th>lot</th>
            <th>ФИО</th>
            <th>Team</th>
<!--            <th>Noun</th>-->
<!--            <th>Med</th>-->
<!--            <th>Tecnical actions</th>-->

        </tr>

        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1`  using (lot) WHERE `c4`.`uid`= 5 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");

        foreach ($info1 as $info1){
            ?>
            <td id="no"><?=$info1['R4']?></td><!-- победа-->
            <td id="no"><?=$info1['L4']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->
<!--            <td></td>-->
<!--            <td></td>-->
<!--            <td></td>-->
            <td id="no"> <a href="../scripts/updC.php?l=c&&x=4&y=5&n=4&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?= $sr ?>&cc=<?= $cc ?>&t=3">Update</a> </td>
            </tr>

            <?php
        }
        ?>
        <?php
        $info1 = mysqli_query($conn, "SELECT * FROM `c4` INNER JOIN `tablo1`  using (lot) WHERE `c4`.`uid` = 1 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w' ");

        foreach ($info1 as $info1){
            ?>
            <td id="no"><?=$info1['R4']?></td><!-- победа-->
            <td id="no"><?=$info1['L4']?></td><!-- поражение-->
            <td><?=$info1['lot']?></td>
            <td><?=$info1['Name']?></td>
            <td><?=$info1['Team']?></td> <!-- команда-->
<!--            <td></td>-->
<!--            <td></td>-->
<!--            <td></td>-->
            <td id="no"> <a href="../scripts/updC.php?l=c&&x=3&y=1&n=4&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?= $sr ?>&cc=<?= $cc ?>&t=3">Update</a> </td>
            </tr>

            <?php
        }
        ?>
<!--        <tr>-->
<!--            <th colspan="5" id="no">M.Secretary:--><?//= $e ?><!--</th>-->
<!---->
<!--        </tr>-->
    </table>
<!--    <a href="../scripts/lone1C.php?r=4&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--&id=1&n=5&sr=--><?//= $sr ?><!--&cc=--><?//= $cc ?><!--" class="button">END Round</a>-->
        <br>
        <br>
        <br>
        <br>
        <h4>
            Chief secretary
            : ____________________\<?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4>
            Chief Referee
            :_____________________\<?= $e ?> (<?= $e1 ?>)
        </h4>
        <br>
    </div>

    <!--    <a href="../scripts/lone1C.php?r=4&w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--&id=3&n=3" class="button">END Round</a>-->

</div>
<a href="#" onclick="window.print();return false;">Распечатать</a>
<!--    <iframe name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>-->


<script>
    function callPrint() {
        var printCSS = '<link rel="stylesheet" href="css/print.css" type="text/css" />';
        var printTitle = document.getElementById('print-title').innerHTML;
        // var printImg = document.getElementById('print-img').innerHTML;
        // var printText = document.getElementById('print-text').innerHTML;
        var windowPrint = window.open('','','left=200,top=50,width=800,height=640,toolbar=0,scrollbars=1,status=0');
        // windowPrint.document.write(printCSS);
        windowPrint.document.write(printTitle);
        windowPrint.document.write(printImg);
        windowPrint.document.write(printText);
        windowPrint.document.close();
        windowPrint.focus();
        windowPrint.print();
        windowPrint.close();
    }
</script>
</body>
</html>
