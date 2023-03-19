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

<?php

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");
$info2 = mysqli_fetch_assoc($info2);?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Round 1</title>
</head>
<header>
    
    <?php require_once ("../includes/header.php");?>
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
    td:nth-child(-n+8){background: #919191;color: #fff;}
    form {
        
       
        margin: 0 auto;
        padding: 20px;
        width: 800px;
        text-align: center;
    }
    .container {
    display: grid;
    grid-template-columns: 100px 100px 100px;
    grid-template-rows: 50px 50px;
}
/* задаем относительное позиционирование контейнеру */
.block{position:relative;}
/* Оформление скрытого элемента по умолчанию */ 
.hidden
{display: none;
position: absolute;
bottom: 130%;
left: 0px;
background-color: #fff;
color: #3aaeda;
padding: 5px;
text-align: center;
-moz-box-shadow: 0 1px 1px rgba(0,0,0,.16);
-webkit-box-shadow: 0 1px 1px rgba(0,0,0,.16);
box-shadow: 0 1px 1px rgba(0,0,0,.16);
font-size: 12px;}
/* Дополнительное оформление скрытого элемента(необязательно) */
.focus + .hidden:before
{content: " ";

top: 98%;
left: 50%;
margin-left: -5px;
border-width: 5px;
border-style: solid;
height: 0;
width: 0;
border: 7px solid transparent;
border-right: 7px solid #fff;
border-color: #fff transparent transparent transparent;
z-index: 2;}
/* Дополнительное оформление скрытого элемента(необязательно) */
.focus + .hidden:after
{content: " ";
position: absolute;
top: 100%;
left: 10%;
margin-left: -5px;
border-width: 5px;
border-style: solid;
height: 0;
width: 0;
border: 7px solid transparent;
border-right: 7px solid #fff;
border-color: rgba(0,0,0,.16) transparent transparent transparent;
z-index: 1;}
/* Появление скрытого элемента при клике */
.focus:focus + .hidden{display: block;}

</style>
<body>
    <div >

    
        <form action="R.php" method="Get">


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



            <p>Weight category </p>
            
            <div class="block"> <!-- контейнер -->
                <a href="#" class="focus">Подсказка ?</a> <!-- видимый элемент -->
                <span class="hidden">Здесь можно выбирать весовую категорию при необходимости</span> <!-- скрытый элемент -->
            </div>
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
            <?php
            if ($sr== 0){?>
                <select class="empty" name="sr">
                    <option value="0">Выберите секретаря</option>
                    <option value="1">Секретарь 1</option>
                    <option value="2">Секретарь 2</option>
                    <option value="3">Секретарь 3</option>
                </select>
                <?php
            }
            ?>

            <?php
            if ($sr!= 0){?>
                <select class="confirm" name="sr">
                    <option value="<?= $sr ?>">Секретарь<?= $sr?></option>
                    <option value="1">Секретарь 1</option>
                    <option value="2">Секретарь 2</option>
                    <option value="3">Секретарь 3</option>
                </select>
                <?php
            }
            ?>



            <select name="w">
                <option value="<?= $w ?>">
                    <?php
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
                </option>
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
            <select class="group" name="l">
            <option value="<?$l ?>"><?php
                    if($l=="uc"){?> 
                        Круг приведения
                        <?php
                    }
                    ?>
                    <?php
                    if($l=="u"){?>
                        Бои
                        <?php
                    }
                    ?>
                    <?php
                    if($l=="ub"){?>
                        Утещительные
                        <?php
                    }
                    ?></option>
                <option value="uc">Круг приведения</option>
                <option value="u">Бои</option>
                <option value="ub">Утещительные</option>
            </select>



            <select class="round" name="n" >
                <!-- <option class="<?$l ?>" value="<?= $n ?>">Round <?= $n?></option> -->
                <option value="1">Round 1</option>
                <option value="2">Round 2</option>
                <option value="3">Round 3</option>
                <option value="4">Round 4</option>
                <option value="5">Round 5</option>
                <option value="6">Round 6</option>
                <option value="7">Round 7</option>
                <option value="8">Round 8</option>
                <option value="9">Round 9</option>
                <option value="10">Round 10</option>
            </select>
            <?php
            if ($sr!= 0){?>
                <a href="../tab<?=$sr?>.php" class="button" target="_blank">Табло<?=$sr?></a>
                <?php
            }
            ?>
            <br> <br>

            <button type="submit" class="button">Enter</button>
        </form>
        <div style="float:left;">

            <p style="text-align:center;"><?= $d ?>, <?= $p ?>:<?php
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
                ?> kg</p>
<div style="text-align: center;">
    <table width="100%" border="0" cellpadding="5" cellspacing="0"   >
        <col width="50%" valign="top">
        <col width="50%" valign="top">
        
        <tr>
            <div class="container">
            <div>
                <td  style="background: #ffffff; vertical-align: top; padding: 1px;">
                
                    <table width="600" style="float: right;">
                            <tr>
                                <th colspan="5">Date:<?= $a ?> - <?= $a2 ?></th>

                            </tr>

                            <tr>
                                <th colspan="5">Red side</th>

                            </tr>
                            <tr>

                                <th>lot</th>
                                <th>Name</th>
                                <th>Team</th>

                                <th>Win</th>
                                <th>Lose</th>

                                



                            </tr>
                            <?php
                            $info = mysqli_query($conn, "SELECT * FROM `ub` INNER JOIN `tablo1` using (lot) WHERE `ub`.`uid` % 2 <> 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' and `qga` like '$g' AND `wc` = '$w' and `qwc` = '$w'  ORDER BY `ub`.`lot` ASC ");

                            foreach ($info as $info){
                            ?>
                            <tr>

                                <td><?=$info['lot']?></td>
                                <td><?= $info['Name']?></td>
                                <td><?=$info['Team']?></td> <!-- команда-->

                                <td><?=$info["R$n"]?></td><!-- победа-->
                                <td><?=$info["L$n"]?></td><!-- поражение-->

                                


                                <?php
                                }
                                ?>
                            
                    </table>
                
                    
                </td>
            </div>
                <div> 
                <td style="background: #ffffff; vertical-align: top ; padding: 1px;">   
                
                    <table width="700" style="float: left;">
                        <tr>
                            <th style="background: #fff; color: #fff"></th>
                            <th colspan="6"><?= $c ?>:<?= $b ?></th>

                        </tr>
                        <tr>
                            <th style="background: #fff; color: #fff" ></th>
                            <th colspan="6">Blue side</th>
                        </tr>
                        <tr>
                            <th>VS</th>
                            <th>Win</th>
                            <th>Lose</th>
                            <th>lot</th>
                            <th>Name</th>
                            <th>Team</th>
                            

                        </tr>


                        <?php
                        $info1 = mysqli_query($conn, "SELECT * FROM `ub`  INNER JOIN `tablo1`  using (lot) WHERE `ub`.`uid` % 2 = 0 AND `lot` !=0 AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' and `qga` like '$g' AND `wc` = '$w' and `qwc` = '$w'  ORDER BY `ub`.`lot` ASC ");


                        foreach ($info1 as $info1) {
                            ?>
                            <?php
                                    if ($sr==0) {
                                    ?>
                                <td>Выберите № секретаря</td>
                                <?php
                                    }
                                ?>
                                <?php
                                    if ($sr>0) {
                                    ?>
                                <td <?php 
                                    $jr = $info1['lot'];
                                    $info2 = mysqli_query($conn, "SELECT * FROM `ub` INNER JOIN `tablo1` using (lot) WHERE `ub`.`lot`= '$jr'  AND `cid` = '$z' AND `qid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'");
                                    $info2 = mysqli_fetch_assoc($info2);
                                    $jq = $info2["R$n"];
                                    $cn = $info2["L$n"];
?>
                                    style="text-align: center; <?php
                                        if($cn == 2 || $jq == 2 ){?>
                                            background-color: #28c536;
                                            <?php
                                             }
                                            ?>"> <a href="../scripts/update.php?l=a&id=<?= $info1['lot'] ?>&n=1&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&sr=<?=$sr?>&t=3" class="link">Update</a>  </td>
                                <?php
                                }
                                ?>
                                <td><?=$info1["R$n"]
                                    
                                    ?>
                                </td><!-- победа-->
                            <td><?=$info1["R$n"]?></td><!-- поражение-->
                            <td><?=$info1['lot']?></td>
                            <td><?=$info1['Name']?></td>
                            <td><?=$info1['Team']?></td> <!-- команда-->

                                    

                            </tr>


                            <?php
                        }
                        ?>
                        
                    </table>
                    <a href="../scripts/lone1.php?r=3&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&n=2&sr=<?=$sr?>" class="button" style="align: center">Завершить</a>
                
                </td>
                </div> 
            </div> 
        </tr>
        
    </table>
</div>
<br>
        <br>

        <br>
        <h4 style="text-align:center;">
            Chief secretary,
            <?= $f2 ?>: ____________________\ <?= $f ?> (<?= $f1 ?>)

        </h4>
        <h4 style="text-align:center;">
            
            Chief Referee,
            <?= $e2 ?>: ____________________\ <?= $e ?> (<?= $e1 ?>)
        </h4>
       
 
        
       <!--    <p>--><?//= $g ?><!--</p>-->
        <!--    <p>--><?//= $w ?><!--</p>-->
        <!--    <p>--><?//= $c ?><!--</p>-->
        <!--    <p>--><?//= $d ?><!--</p>-->
        <!--    <p>--><?//= $e ?><!--</p>-->
        <!--    <p>--><?//= $f ?><!--</p>-->
        <!--    <p>--><?//= $q ?><!--</p>-->
        <!--    <p>--><?//= $z ?><!--</p>-->
        <!--    <p>--><?//= $cc ?><!--</p>-->


        </div>



    </div>
</body>
</html>