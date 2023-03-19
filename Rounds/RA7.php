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

    <title><?= $g ?>:<?php
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
        ?> кг, раунд <?= $n ?>, группа <?php
        if($l=="g"){?> без группы
            <?php
        }
        ?>
        <?php
        if($l!="g"){?>
            <?=$l?>
            <?php
        }
        ?></title>
</head>
<header>

    <?php require_once ("../includes/header.php");?>
</header>
<style>
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
    }

</style>
<body>
<div style="float:left;">

    <p><?= $d ?>, <?= $g ?>:<?php
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
        ?></p>

    <div>
        <form action="RA7.php" method="Get">


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
                <option value="VMI">Ветераны-мужчины </option>
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
                <option value="<?= $w ?>"><?php
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
                    ?></option>

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
                <th colspan="6">Date:<?= $a ?></th>
                <th ><?= $g ?> : <?php
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
                    ?></th>

            </tr>


            <tr>
                <th colspan="6">Red side</th>

            </tr>
            <tr>

                <th>№</th>
                <th>Draw</th>
                <th>Name</th>
                <th>Team</th>
                <th colspan="2">Score</th>
                <!--            <th>Date of birth</th>-->


                <th>___VS___</th>



            </tr>
            <?php
            $info = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1` using (lot) WHERE `$l$n`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC ");

            foreach ($info as $info){
            ?>
            <tr>

                <td height="40px"><?=$info['uid']?></td>
                <td ><?= $info['lot']?></td>
                <td ><?= $info['Name']?></td>
                <td ><?=$info['Team']?></td> <!-- команда-->
                <!--            <td>--><?//=$info['BD']?><!--</td> победа-->
                <td > <?=$info["R$n"]?></td>
                <td > <?=$info["L$n"]?></td>




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
                <th colspan="6"> <?= $c ?> ,  <?= $b ?></th>

            </tr>
            <tr>
                <th colspan="6">Blue side</th>
            </tr>
            <tr>
                <th>№</th>
                <th>Draw</th>
                <th>Name</th>
                <th>Team</th>
                <th colspan="2">Score</th>
                <!--            <th>Date of birth</th>-->

            </tr>

            <?php
            $info1 = mysqli_query($conn, "SELECT * FROM `$l$n` INNER JOIN `tablo1`  using (lot) WHERE `$l$n`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND qid = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w'  AND `gendage` LIKE '$g' AND `wc` = '$w' ORDER BY `$l$n`.`uid` ASC  ");

            foreach ($info1 as $info1){
                ?>
                <td height="40px"><?=$info1['uid']?></td>
                <td ><?= $info1['lot']?></td>
                <td ><?= $info1['Name']?></td>
                <td ><?=$info1['Team']?></td> <!-- команда-->
                <td > <?=$info1["R$n"]?></td>
                <td > <?=$info1["L$n"]?></td>

                </tr>


                <?php
            }
            ?>
            <!--                <tr>-->
            <!--                    <th colspan="4">Chief secretary: --><?//= $e ?><!--</th>-->
            <!---->
            <!--                </tr>-->
        </table>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h4>
            Chief secretary: ____________________\<?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4>
            Chief Referee:_____________________\<?= $e ?> (<?= $e1 ?>)
        </h4>


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
    <script>

    </script>


</body>
</html>