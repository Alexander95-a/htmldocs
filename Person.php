<?php require_once("includes/connect.php");
$info1 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q';");
$info1 = mysqli_fetch_assoc($info1);
$z=$info1['cid'];
$z=$_GET['z'];
$h=$_GET['h'];
$ask=$_GET['ask'];
$tab=$_GET['tab'];
$title=$_GET['title'];
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <?php require_once ("includes/header1.php");
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot`!= '0' and  `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w' and  `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` like '$w'");

    $info5 = mysqli_fetch_all($info5);
    foreach ($info5 as $info5)
        $cc2 = $info5 [0];
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `person` WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w'");
    $info5 = mysqli_fetch_all($info5);
    foreach ($info5 as $info5)
        $cc = $info5 [0]
    ?>
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
    /*form2 {*/
    /*    background-color: #d5d5d5;*/
    /*    border: 1px solid #333;*/
    /*    margin: 0 auto;*/
    /*    padding: 20px;*/
    /*    width: 150px;*/
    /*    text-align: center;*/
    /*}*/
.field {clear:both; text-align:right; line-height:25px;}
label {float:left; padding-right:20px;}
.main {float:left}
</style>
<body>
<form action="Person.php" method="Get">


    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">
    <input type="text" hidden name="ask" value="id">
    <input type="text" hidden name="tab" value="person">

    <h3>First, choose a weight category.</h3>
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
    <br> <br>
    <button type="submit" class="add">Enter</button>
</form>

<?php
            if($w!=0){?> 
            
            <form action="personform.php" method="post">

                 <h3 >Adding a new participant: Weight category <?php
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
                </h3>
                 <h3 >(Total participants: <?= $cc ?>)</h3>
                 <h3 >(Passed the weigh-in: <?= $cc2 ?>)</h3>
                 <h3 style="color: red;">(Previous: <?= $title ?>)</h3>
                    <input type="text" hidden name="g" value="<?= $g ?>">
                    <input type="text" hidden name="w" value="<?= $w ?>">
                    <input type="text" hidden name="q" value="<?= $q ?>">
                    <input type="text" hidden name="z" value="<?= $z ?>">
                    <input type="text" hidden name="ask" value="<?= $ask ?>">
                    <input type="text" hidden name="tab" value="<?= $tab ?>">
                 <div class="main">
                    <div class="main">
                        <div class="field">
                        <label>Name-Surname</label>
                        <input type="text" name="title">
                        </div>
                        <div class="field">
                        <label>Date of birth</label>
                        <input type="date" name="price" value="<?php echo date("2022-m-d");?>">
                        </div>
                        <div class="field">
                        <label>Team</label>
         
                            <?php
                            $info5 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `cid` = '$z' ");
                            $info5 = mysqli_fetch_assoc($info5);
                            $c2 = $info5['stat'];
                            if ($c2==1) {
                    
                                ?>
                                <input type="text" name="team" placeholder="Введите название команды">
                    
                                <?php
                            }
                            ?>
                            <?php
                    
                            if ($c2==2) {
                                ?>
                                <select name="team">
                                    <option value="AFG">Афганистан</option>
                                    <option value="DZA">Алжир</option>
                                    <option value="AGO">Ангола</option>
                                    <option value="ARG">Аргентина</option>
                                    <option value="BLR">Беларусь</option>
                                    <option value="BEN">Бенин</option>
                                    <option value="BRA">Бразилия</option>
                                    <option value="HUN">Венгрия</option>
                                    <option value="HTI">Гаити</option>
                                    <option value="GHA">Гана</option>
                                    <option value="DEU">Германия</option>
                                    <option value="EGY">Египет</option>
                                    <option value="ZMB">Замбия</option>
                                    <option value="IND">Индия</option>
                                    <option value="IDN">Индонезия</option>
                                    <option value="JOR">Иордания</option>
                                    <option value="IRQ">Ирак</option>
                                    <option value="IRN">Иран</option>
                                    <option value="YEM">Йемен</option>
                                    <option value="KAZ">Казахстан</option>
                                    <option value="CMR">Камерун</option>
                                    <option value="KEN">Кения</option>
                                    <option value="COL">Колумбия</option>
                                    <option value="COG">Конго</option>
                                    <option value="CIV">Кот-Д'Ивуар</option>
                                    <option value="KGZ">Кыргызстан</option>
                                    <option value="MRT">Мавритания</option>
                                    <option value="MAR">Марокко</option>
                                    <option value="MNG">Монголия</option>
                                    <option value="NGA">Нигерия</option>
                                    <option value="PAK">Пакистан</option>
                                    <option value="RUS">Россия</option>
                                    <option value="SRB">Сербия</option>
                                    <option value="SYR">Сирия</option>
                                    <option value="SVK">Словакия</option>
                                    <option value="SOM">Сомали</option>
                                    <option value="TJK">Таджикистан</option>
                                    <option value="TGO">Того</option>
                                    <option value="TUN">Тунис</option>
                                    <option value="TKM">Туркменистан</option>
                                    <option value="UZB">Узбекистан</option>
                                    <option value="CAF">Центральноафриканская республика</option>
                                    <option value="IMWF">IMWF</option>
                                </select>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="field">
                        <label>Coach</label>
                            <input type="text" name="trener" value="none">
                            </div>
                            <div class="field">
                        <label>Class</label>
                            <select name="ks">
                                <option value="Без разряда">Без разряда</option>
                                <option value="III Юношеский">III Юношеский</option>
                                <option value="II Юношеский">II Юношеский</option>
                                <option value="I Юношеский">I Юношеский</option>
                                <option value="III Разряд">III Разряд</option>
                                <option value="II Разряд">II Разряд</option>
                                <option value="I Разряд">I Разряд</option>
                                <option value="КМС">КМС</option>
                                <option value="МС">МС</option>
                                <option value="МС МК">МС МК</option>
                                <option value="МС РФ">МС РФ</option>
                                <option value="ЗМС">ЗМС</option>
                            </select>
                        </div>
                    </div>
                 </div>
         
                 
                
                 <br> <br>
                 <button type="submit" class="add">Add</button>
                 <br> <br>
                 <br> <br>
                 <p>Navigation</p>
                 <a href="../index.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&cc=<?= $rowsCount?>"class="button" >Back</a>

                <!--    <a href="scripts/addR.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Обновить</a>-->
                <?php
                if ($cc>5){?>
                    <a href="G1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Next</a>
                    <?php
                }
                ?>
                <div> <!-- утешиловка -->

                    <?php
                    if ($cc==64){?>
                        <p>Утещительные</p>
                        <a href="G5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Дальше ut 64</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc==32){?>
                        <p>Утещительные</p>
                        <a href="G5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Дальше ut 32</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc==16){?>
                        <p>Утещительные</p>
                        <a href="G5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Дальше ut 16</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc==8){?>
                        <p>Утещительные</p>
                        <a href="G5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Дальше ut 8</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc==4){?>
                        <p>Утещительные</p>
                        <a href="G5.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Дальше ut 4</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc<128 && $cc>64){?>
                        <p>Утещительные</p>
                        <a href="G4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&k=<?= ($cc-64)*2?>&k2=<?= $cc-(($cc-64)*2)?>" class="button">Дальше ut 64</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc<64 && $cc>32){?>
                        <p>Утещительные</p>
                        <a href="G4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&k=<?= ($cc-32)*2?>&k2=<?= $cc-(($cc-32)*2)?>" class="button">Дальше ut 32</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc<32 && $cc>16){?>
                        <p>Утещительные</p>
                        <a href="G4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&k=<?= ($cc-16)*2?>&k2=<?= $cc-(($cc-16)*2)?>" class="button">Дальше ut 16</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc<16 && $cc>8){?>
                        <p>Утещительные</p>
                        <a href="G4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&k=<?= ($cc-8)*2?>&k2=<?= $cc-(($cc-8)*2)?>" class="button">Дальше ut 8</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                    <?php
                    if ($cc<8 && $cc>4){?>
                        <p>Утещительные</p>
                        <a href="G4.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&k=<?= ($cc-4)*2?>&k2=<?= $cc-(($cc-4)*2)?>" class="button">Дальше ut 4</a> <!-- Это круговая -->
                        <?php
                    }
                    ?>
                </div>




                <?php
                if ($cc<6){?>
                    <p>Круговая</p>
                    <a href="G2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>" class="button">Next</a> <!-- Это круговая -->
                    <?php
                }
                ?>
                <br>
                
                <p>Search</p>
                <a href="../scripts/Search.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&tab=<?=$tab?>&ask=<?=$ask?>" class="button">Search</a> <!-- Это круговая -->
                <br>
                <br>
             </form>
                <?php
            }
            ?>
    


    <table>
        <tr>

            <th>  <a class="link" href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=Name&tab=person">Name-Surname</a></th>
            <th>Date of birth</th>
            <th>Class</th>
            <th><a class="link" href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=Team&tab=person">Team</a></th>
            <th>Coach</th>
            <th>Gender & age</th>
            <th>Weight category</th>
            <th>Weight</th>
            <th><a class="link" href="../Person.php?w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&ask=lot&tab=tablo1">Draw</a></th>
            <th>Update</th>
            <th>Delete</th>



        </tr>
        <?php

        $info1 = mysqli_query($conn,  "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w' ORDER BY `$tab`.`$ask` ASC ");
//        $info1 = mysqli_fetch_all($info1);

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
            <td> <a href="../scripts/updateP.php?id=<?= $info1['id'] ?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&tab=<?=$tab?>&ask=<?=$ask?>">Edit</a> </td>
            <td> <a href="../scripts/delete.php?id=<?= $info1['id'] ?>&w=<?=$w?>&g=<?=$g?>&q=<?=$q?>&z=<?=$z?>&tab=<?=$tab?>&ask=<?=$ask?>" style="color: red">X</a> </td>

        </tr>

        <?php
        }

        ?>



    </table>


</body>
</html>