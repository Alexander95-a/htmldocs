<?php require_once("../includes/connect.php");
$sr=$_GET['sr'];
$l=$_GET['l'];
$n=$_GET['n'];

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$l=$_GET['l'];
$n=$_GET['n'];
$cc=$_GET['cc'];
$sr=$_GET['sr'];

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<header>

    <?php require_once ("../includes/header.php");?>
</header>
<style>
    table {

        width: 300px;

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

    @media print { /* Стиль для печати */
        body{
            visibility: hidden;
        }
        /* Блок который нужно отобразить */
        #print-title {
            visibility: visible;
            margin-top: 250px;
        }
        #print-text {
            visibility: visible;
            margin-top: -250px;
        }
        #print-text2 {
            visibility: visible;
            margin-top: 550px;
        }
    }

</style>
<body>
<div style="float:left;">

    <p><?= $d ?>, <?= $g ?>:<?= $w ?></p>

    <div>
        <form action="Admin.php" method="Get">


            <input type="text" hidden name="g" value="<?= $g ?>">
            <input type="text" hidden name="a" value="<?= $a ?>">
            <input type="text" hidden name="b" value="<?= $b ?>">
            <input type="text" hidden name="c" value="<?= $c ?>">
            <input type="text" hidden name="d" value="<?= $d ?>">
            <input type="text" hidden name="e" value="<?= $e ?>">
            <input type="text" hidden name="f" value="<?= $f ?>">
            <input type="text" hidden name="q" value="<?= $q ?>">
            <input type="text" hidden name="z" value="<?= $z ?>">
            <input type="text" hidden name="l" value="<?= $l ?>">
            <input type="text" hidden name="n" value="<?= $n ?>">

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
<!--            <select name="l">-->
<!--                <option value="--><?//= $l ?><!--">--><?//= $l?><!--</option>-->
<!--                <option value="g">Раунд 1</option>-->
<!--                <option value="a">A Group</option>-->
<!--                <option value="b">B Group</option>-->
<!--                <option value="c">Круговая</option>-->
<!--            </select>-->
<!--            <select name="n">-->
<!--                <option value="--><?//= $n ?><!--">--><?//= $n?><!--</option>-->
<!--                <option value="1">Раунд 1</option>-->
<!--                <option value="2">Раунд 2</option>-->
<!--                <option value="3">Раунд 3</option>-->
<!--                <option value="4">Раунд 4</option>-->
<!--                <option value="5">Раунд 5</option>-->
<!--                <option value="6">Раунд 6</option>-->
<!--                <option value="7">Раунд 7</option>-->
<!--                <option value="8">Раунд 8</option>-->
<!--                <option value="9">Раунд 9</option>-->
<!--                <option value="10">Раунд 10</option>-->
<!---->
<!--            </select>-->

            <!--                --><?php
            //                if ($sr== 0){?>
            <!--                    <select class="empty" name="sr">-->
            <!--                        <option value="0">Выберите секретаря</option>-->
            <!--                        <option value="1">Секретарь 1</option>-->
            <!--                        <option value="2">Секретарь 2</option>-->
            <!--                        <option value="3">Секретарь 3</option>-->
            <!--                    </select>-->
            <!--                    --><?php
            //                }
            //                ?>
            <!---->
            <!--                --><?php
            //                if ($sr!= 0){?>
            <!--                    <select class="confirm" name="sr">-->
            <!--                        <option value="--><?//= $sr ?><!--">Секретарь--><?//= $sr?><!--</option>-->
            <!--                        <option value="1">Секретарь 1</option>-->
            <!--                        <option value="2">Секретарь 2</option>-->
            <!--                        <option value="3">Секретарь 3</option>-->
            <!--                    </select>-->
            <!--                    --><?php
            //                }
            //                ?>

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
                <option value="76">75+</option>
                <option value="80">80</option>
                <option value="81">80+</option>
                <option value="85">85</option>
                <option value="86">85+</option>
                <option value="90">90</option>
                <option value="91">90+</option>
                <option value="105">105</option>
                <option value="106">105+</option>
                <option value="125">125</option>
                <option value="126">125+</option>
                <option value="130">Абсолютная</option>

            </select>
            <?php
            if ($sr!= 0){?>
                <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
                <?php
            }
            ?>
            <br> <br>
            <button class="button" type="submit">Enter</button>
        </form>
    </div>
    <div id="print-text"  style="text-align: center">
        <h2><?= $d ?></h2>
    </div>
    <div id="print-title">
        <div id="print-text">
            <h4> Round <?=$n?>, Group <?=$l?> </h4>
        </div>


        <table  style="float: left;">





            <tr>
                <th colspan="6">Round 1 </th>

            </tr>
            <tr>

                <th>№</th>
                <th>Draw</th>
                <th>Name</th>
                <th colspan="2">Win/Lose</th>
                <!--            <th>Date of birth</th>-->






            </tr>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `g1` INNER JOIN `tablo1` using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`uid` ASC ");

            foreach ($info as $info){
            ?>
            <tr>

                <td><?=$info['uid']?></td>
                <td><?= $info['lot']?></td>
                <td><?= $info['Name']?></td>
                <td ><?=$info['R1']?></td> <!-- команда-->
                <td ><?=$info['L1']?></td> <!-- команда-->



                <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief Referee:--><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
        </table>

        <table>
            <tr>
                <th colspan="6"> Round 2, Group A </th>

            </tr>

            <tr>
                <th>№</th>
                <th>Draw</th>
                <th>Name</th>
                <th colspan="2">Win/Lose</th>
                <!--            <th>Date of birth</th>-->

            </tr>

            <?php
            $info1 = mysqli_query($conn, "SELECT * FROM `a2` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a2`.`uid` ASC  ");

            foreach ($info1 as $info1){
                ?>
                <td><?=$info1['uid']?></td>
                <td><?= $info1['lot']?></td>
                <td><?= $info1['Name']?></td>
                <td ><?=$info1['R2']?></td> <!-- команда-->
                <td ><?=$info1['L2']?></td> <!-- команда-->
                </tr>


                <?php
            }
            ?>
            <!--                <tr>-->
            <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
            <!---->
            <!--                </tr>-->
        </table>
        <table >
            <tr>
                <th colspan="6"> Round 2, Group B </th>

            </tr>

            <tr>
                <th>№</th>
                <th>Draw</th>
                <th>Nadme</th>
                <th colspan="2">Win/Lose</th>
                <!--            <th>Date of birth</th>-->

            </tr>

            <?php
            $info1 = mysqli_query($conn, "SELECT * FROM `b2` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b2`.`uid` ASC  ");

            foreach ($info1 as $info1){
                ?>
                <td><?=$info1['uid']?></td>
                <td><?= $info1['lot']?></td>
                <td><?= $info1['Name']?></td>
                <td ><?=$info1['R2']?></td> <!-- команда-->
                <td ><?=$info1['L2']?></td> <!-- команда-->
                </tr>


                <?php
            }
            ?>
            <!--                <tr>-->
            <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
            <!---->
            <!--                </tr>-->
        </table>
        <div style="margin-left: 605px; margin-top: -875px" >
            <table>
                <tr>
                    <th colspan="6"> Round 3, Group A </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>

                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `a3` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a3`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td ><?=$info1['uid']?></td>
                    <td> <?= $info1['lot']?></td>
                    <td ><?= $info1['Name']?></td>
                    <td ><?=$info1['R3']?></td> <!-- команда-->
                    <td ><?=$info1['L3']?></td> <!-- команда-->


                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
            <table >
                <tr>
                    <th colspan="6"> Round 3, Group B </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>
                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `b3` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b3`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td><?=$info1['uid']?></td>
                    <td><?= $info1['lot']?></td>
                    <td><?= $info1['Name']?></td>
                    <td ><?=$info1['R3']?></td> <!-- команда-->
                    <td ><?=$info1['L3']?></td> <!-- команда-->
                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
        </div>

        <div style="margin-left: 910px; margin-top: -390px" >
            <table>
                <tr>
                    <th colspan="6"> Round 4, Group A </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>

                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `a4` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a4`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td ><?=$info1['uid']?></td>
                    <td> <?= $info1['lot']?></td>
                    <td ><?= $info1['Name']?></td>
                    <td ><?=$info1['R4']?></td> <!-- команда-->
                    <td ><?=$info1['L4']?></td> <!-- команда-->


                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
            <table >
                <tr>
                    <th colspan="6"> Round 4, Group B </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>
                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `b4` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b4`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td><?=$info1['uid']?></td>
                    <td><?= $info1['lot']?></td>
                    <td><?= $info1['Name']?></td>
                    <td ><?=$info1['R4']?></td> <!-- команда-->
                    <td ><?=$info1['L4']?></td> <!-- команда-->
                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
        </div>
        <div style="margin-left: 1450px; margin-top: -390px" >
            <table>
                <tr>
                    <th colspan="6"> Round 5, Group A </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>

                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `a5` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a5`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td ><?=$info1['uid']?></td>
                    <td> <?= $info1['lot']?></td>
                    <td ><?= $info1['Name']?></td>
                    <td ><?=$info1['R5']?></td> <!-- команда-->
                    <td ><?=$info1['L5']?></td> <!-- команда-->


                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
            <table >
                <tr>
                    <th colspan="6"> Round 5, Group B </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>
                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `b5` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b5`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td><?=$info1['uid']?></td>
                    <td><?= $info1['lot']?></td>
                    <td><?= $info1['Name']?></td>
                    <td ><?=$info1['R5']?></td> <!-- команда-->
                    <td ><?=$info1['L5']?></td> <!-- команда-->
                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
        </div>

        <div style="margin-left: 1450px; margin-top: 90px" >
            <table>
                <tr>
                    <th colspan="6"> Round 6, Group A </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>

                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `a6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a6`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td ><?=$info1['uid']?></td>
                    <td> <?= $info1['lot']?></td>
                    <td ><?= $info1['Name']?></td>
                    <td ><?=$info1['R6']?></td> <!-- команда-->
                    <td ><?=$info1['L6']?></td> <!-- команда-->


                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
            <table >
                <tr>
                    <th colspan="6"> Round 6, Group B </th>

                </tr>

                <tr>
                    <th>№</th>
                    <th>Draw</th>
                    <th>Name</th>
                    <th colspan="2">Win/Lose</th>
                    <!--            <th>Date of birth</th>-->

                </tr>

                <?php
                $info1 = mysqli_query($conn, "SELECT * FROM `b6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b6`.`uid` ASC  ");

                foreach ($info1 as $info1){
                    ?>
                    <td><?=$info1['uid']?></td>
                    <td><?= $info1['lot']?></td>
                    <td><?= $info1['Name']?></td>
                    <td ><?=$info1['R6']?></td> <!-- команда-->
                    <td ><?=$info1['L6']?></td> <!-- команда-->
                    </tr>


                    <?php
                }
                ?>
                <!--                <tr>-->
                <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                <!---->
                <!--                </tr>-->
            </table>
            <div style="margin-left: 1450px; margin-top: 90px" >
                <table>
                    <tr>
                        <th colspan="6"> Round 7, Group A </th>

                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>

                        <!--            <th>Date of birth</th>-->

                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a6`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid']?></td>
                        <td> <?= $info1['lot']?></td>
                        <td ><?= $info1['Name']?></td>
                        <td ><?=$info1['R6']?></td> <!-- команда-->
                        <td ><?=$info1['L6']?></td> <!-- команда-->


                        </tr>


                        <?php
                    }
                    ?>
                    <!--                <tr>-->
                    <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                    <!---->
                    <!--                </tr>-->
                </table>
                <table >
                    <tr>
                        <th colspan="6"> Round 7, Group B </th>

                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                        <!--            <th>Date of birth</th>-->

                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b6`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid']?></td>
                        <td><?= $info1['lot']?></td>
                        <td><?= $info1['Name']?></td>
                        <td ><?=$info1['R6']?></td> <!-- команда-->
                        <td ><?=$info1['L6']?></td> <!-- команда-->
                        </tr>


                        <?php
                    }
                    ?>
                    <!--                <tr>-->
                    <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                    <!---->
                    <!--                </tr>-->
                </table>
        </div>


        <br>
        <br>
        <br>
        <br>
            <div style="margin-top: 450px" id="print-text2">
            <br>
            <br>
                <br>

                <h4>
                Chief secretary: ____________________\<?= $e ?>

            </h4>
            <h4>
                Chief Referee:_____________________\<?= $e ?>
            </h4>
            </div>

    </div>

    <!---->
    <!--<h1 id="print-title">Заголовок</h1>-->
    <!--<div id="print-img"><img src="img.jpg" /></div>-->
    <!--<div id="print-text">Текст</div>-->
    <!--<a href="#" onclick="javascript:callPrint();">Печать</a>-->
    <a href="#" onclick="window.print();return false;">Распечатать</a>
    <!--    <iframe name="print_frame" width="1" height="1" border="0" src="about:blank"></iframe>-->


    <script>
        function callPrint() {
            var printCSS = '<link rel="stylesheet" href="css/print.css" type="text/css" />';
            var printTitle = document.getElementById('print-title').innerHTML;
            // var printImg = document.getElementById('print-img').innerHTML;
            var printText = document.getElementById('print-text').innerHTML;
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
    <script >
        setTimeout(function(){
            location.reload();
        }, 9000);
    </script>


</body>
</html>
