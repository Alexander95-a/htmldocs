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
    .add2{
            background-color: #00ffff;

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

        /*width: 300px;*/

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


    tr:nth-child(2n){
        background: #0000ff;
        color: #fff;
        border-collapse: collapse;

        border: 2px solid black
    }
    tr:nth-child(2n+1){
        background: red;
        color: #fff;
        border-collapse: collapse;

        border: 2px solid black
    }



    td {

        /*background: #606060;*/
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

    form {
        
       
        margin: 0 auto;
        padding: 20px;
        width: 800px;
        text-align: center;
    }

</style>
<body>
<div style="float:left;">

    <p><?= $d ?>, <?= $g ?>:<?= $w ?></p>

    <div>
        <form action="Admin2.php" method="Get">
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
                <option value="JU-15B">Юноши (14-15 лет)</option>
                <option value="JU-17B">Юноши (16-17 лет)</option>
                <option value="JU-15G">Девушки (14-15 лет)</option>
                <option value="JU-17G">Девушки (16-17 лет)</option>
                <option value="JUN">Юниоры</option>
                <option value="JUR">Юниорки</option>
                <option value="VMI">Ветераны-мужчины (I мастер) </option>
                <option value="VMII">Ветераны-мужчины (II мастер)</option>
                <option value="VW">Ветераны-женщины</option>
            </select>


            <select name="w">
                <option value="<?= $w ?>"><?= $w ?></option>
                <option value="40">40</option>
                <option value="45">45</option>
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
    <table width="1500" border="0" cellpadding="5" cellspacing="0">
        <col width="150" valign="top">
        <col width="250" valign="top">
        <col width="150" valign="top">
        <col width="250" valign="top">
        <tr>
            <td style="background: #ffffff; vertical-align: top"><!--1 Round-->
                <table style="float: left;">
                        <tr>
                            <th colspan="6">Round 1 </th>
                        </tr>
                        <tr>
                            <th>№</th>
                            <th>Draw</th>
                            <th>Name</th>
                            <th colspan="2">Win/Lose</th>
                        </tr>
                        <?php
                        $info = mysqli_query($conn, "SELECT * FROM `g1` INNER JOIN `tablo1` using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `g1`.`uid` ASC ");

                        foreach ($info as $info){
                        ?>
                        <tr>
                            <td><?=$info['uid'];
                                $jr = $info['lot'];
                                $info1 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                                $info1 = mysqli_fetch_assoc($info1);
                                $jq = $info1['lot'];
                                $cn = $info1['round'];
                                ?></td>
                            <td><?= $info['lot']?></td>
                            <td class="<?php
                                if($jr==$jq){
                                    if($cn==1){?>
                                        add
                                        <?php
                                }
                                }?>"><?= $info['Name']?></td>
                            <td ><?=$info['R1']?></td> <!-- команда-->
                            <td ><?=$info['L1']?></td> <!-- команда-->
                            <?php
                            }
                            ?>
                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--2 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 2, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a2` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a2`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==2){?>
                                    add
                                    <?php
                                }
                            }
                            ?>"><?= $info1['Name']?></td>
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
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b2` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b2`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==2){?>
                                    add
                                    <?php
                                }
                            }
                            ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R2']?></td> <!-- команда-->
                        <td ><?=$info1['L2']?></td> <!-- команда-->
                        </tr>


                        <?php
                    }
                    ?>
                </table>
            </td>

            <td style="background: #ffffff; vertical-align: top"><!--3 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 3, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a3` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a3`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==3){?>


                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R3']?></td> <!-- команда-->
                        <td ><?=$info1['L3']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
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
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b3` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b3`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==3){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R3']?></td> <!-- команда-->
                        <td ><?=$info1['L3']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--4 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 4, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a4` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a4`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==4){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R4']?></td> <!-- команда-->
                        <td ><?=$info1['L4']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
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
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b4` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b4`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==4){?>


                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R4']?></td> <!-- команда-->
                        <td ><?=$info1['L4']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--5 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 5, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a5` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a5`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==5){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R5']?></td> <!-- команда-->
                        <td ><?=$info1['L5']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
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
                    </tr>
                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b5` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b5`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==5){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R5']?></td> <!-- команда-->
                        <td ><?=$info1['L5']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>
        </tr>
        <tr><!--нижняя таблица-->
            <td style="background: #ffffff; vertical-align: top"><!--6 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 6, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>
                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a6`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==6){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R6']?></td> <!-- команда-->
                        <td ><?=$info1['L6']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
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
                    </tr>
                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b6` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b6`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                            if($jr==$jq){
                                if($cn==6){?>
                                    add
                                    <?php
                                }
                            }?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R6']?></td> <!-- команда-->
                        <td ><?=$info1['L6']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>

            <td style="background: #ffffff; vertical-align: top" ><!--7 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 7, Group A </th>
                    </tr>
                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a7` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a7`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==7){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R7']?></td> <!-- команда-->
                        <td ><?=$info1['L7']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
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
                    </tr>
                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b7` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b7`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==7){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R7']?></td> <!-- команда-->
                        <td ><?=$info1['L7']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>

                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--8 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 8, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a8` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a8`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==8){?>
                                add
                                <?php
                            }
                        }
                        ?>" ><?= $info1['Name']?></td>
                        <td ><?=$info1['R8']?></td> <!-- команда-->
                        <td ><?=$info1['L8']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <table >
                    <tr>
                        <th colspan="6"> Round 8, Group B </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b8` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b8`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==8){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R8']?></td> <!-- команда-->
                        <td ><?=$info1['L8']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--9 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 9, Group A </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a9` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a9`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==9){?>
                                add
                                <?php
                            }
                        }
                        ?>
                        "><?= $info1['Name']?></td>
                        <td ><?=$info1['R9']?></td> <!-- команда-->
                        <td ><?=$info1['L9']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <table >
                    <tr>
                        <th colspan="6"> Round 9, Group B </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b9` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b9`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==9){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R9']?></td> <!-- команда-->
                        <td ><?=$info1['L9']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </td>
            <td style="background: #ffffff; vertical-align: top"><!--10 Round-->
                <table>
                    <tr>
                        <th colspan="6"> Round 10, Group A </th>
                    </tr>
                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `a10` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `a10`.`uid` ASC  ");
                    foreach ($info1 as $info1){
                        ?>
                        <td ><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==10){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R10']?></td> <!-- команда-->
                        <td ><?=$info1['L10']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <table >
                    <tr>
                        <th colspan="6"> Round 10, Group B </th>
                    </tr>

                    <tr>
                        <th>№</th>
                        <th>Draw</th>
                        <th>Name</th>
                        <th colspan="2">Win/Lose</th>
                    </tr>

                    <?php
                    $info1 = mysqli_query($conn, "SELECT * FROM `b10` INNER JOIN `tablo1`  using (lot) WHERE  `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `b10`.`uid` ASC  ");

                    foreach ($info1 as $info1){
                        ?>
                        <td><?=$info1['uid'];
                            $jr = $info1['lot'];
                            $info2 = mysqli_query($conn, "SELECT * FROM `cb` INNER JOIN `tablo1` using (lot) WHERE `cb`.`lot`= '$jr'");
                            $info2 = mysqli_fetch_assoc($info2);
                            $jq = $info2['lot'];
                            $cn = $info2['round'];
                            ?></td>
                        <td><?= $info1['lot']?></td>
                        <td class="<?php
                        if($jr==$jq){
                            if($cn==10){?>
                                add
                                <?php
                            }
                        }
                        ?>"><?= $info1['Name']?></td>
                        <td ><?=$info1['R10']?></td> <!-- команда-->
                        <td ><?=$info1['L10']?></td> <!-- команда-->
                        </tr>
                        <?php
                    }
                    ?>
                    <!--                <tr>-->
                    <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
                    <!---->
                    <!--                </tr>-->
                </table>
            </td>
        </tr>
    </table>
    <script >
        setTimeout(function(){
            location.reload();
        }, 9000);
    </script>

</body>
</html>
