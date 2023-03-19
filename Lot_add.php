<?php require_once("includes/connect.php");
$z=$_GET['z'];
    

?>

<!doctype html>
<html lang="ru">
<head fixed;>
    <meta charset="UTF-8">

    <title>Жеребьевка</title>
    <?php require_once ("includes/header1.php");
    
    
    $info5 = mysqli_query($conn, "SELECT count(*) FROM `person` INNER JOIN `tablo1` using (id) WHERE `lot`!= '0' and  `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w'");

    $info5 = mysqli_fetch_all($info5);
    foreach ($info5 as $info5)
    $cc = $info5 [0];

    $info4 = mysqli_query($conn, "SELECT count(*) FROM `person`  WHERE  `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w'");

    $info4 = mysqli_fetch_all($info4);
    foreach ($info4 as $info4)
    $cc2 = $info4 [0]
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
</style>
<body>
<form action="Lot_add.php" method="Get">


    <input type="text" hidden name="g" value="<?= $g ?>">
    <input type="text" hidden name="a" value="<?= $a ?>">
    <input type="text" hidden name="b" value="<?= $b ?>">
    <input type="text" hidden name="c" value="<?= $c ?>">
    <input type="text" hidden name="d" value="<?= $d ?>">
    <input type="text" hidden name="e" value="<?= $e ?>">
    <input type="text" hidden name="f" value="<?= $f ?>">
    <input type="text" hidden name="q" value="<?= $q ?>">
    <input type="text" hidden name="z" value="<?= $z ?>">

    <p> Choose a weight category. </p>
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
    <h3>Add weight & draw</h3>



    <!--            <p>Введите вес </p>-->
    <!--            <div class="text-field text-field_floating-2">-->
    <!--                <input class="text-field__input" type="text" value="--><?//= $info['weight'] ?><!--" name="weight" required  pattern="\d+(\.\d{2})?" placeholder="Разделение точкой (.)!">-->
    <!---->
    <!--            </div>-->
    <!--            <p>Введите жребий </p>-->
    <!---->
    <!--            <div class="text-field text-field_floating-2">-->
    <!--                <input class="text-field__input" type="text" value="--><?//= $info['lot'] ?><!--" name="lot" required  pattern="[0-9]{1,5}" placeholder="Только цифры ">-->
    <!---->
    <!--            </div>-->


   

    <p>Navigation</p>
    <a href="Person.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>" class="button">Back</a>
<!--    <a href="scripts/addR.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">Обновить</a>-->
    <?php
    if ($cc>5){?>
    <p>По системе А и Б</p>
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
<!--    <p>Другое</p>-->
<!--    <br>-->
<!--    <a href="GD.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!-- &cc=--><?//= $cc?><!--" class="button">Одно поражение</a>-->

    <!--        <a href="G3.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!-- &cc=--><?//= $cc?><!--" class="button">role</a>-->
    <!---->
    <!--        <a href="scripts/Truncate.php?w=--><?//=$w?><!--&g=--><?//=$g?><!--&q=--><?//= $q ?><!--&z=--><?//= $z ?><!--" class="button">truncate</a>-->
    <p><?= $p ?> : <?php
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
    <h3 >(Всего участников: <?= $cc2 ?>)</h3>
    <h3 >(Прошли взвешивание: <?= $cc ?>)</h3>

</form>

    <table>



        <tr>
            
            <th>Name-Surname</th>
            <th>Date of birth</th>
            <th>Team</th>
            <th>Coach</th>
            <th>Weight</th>
            <th>Draw</th>




        </tr>
        <?php
            $info = mysqli_query($conn, "SELECT * FROM `person` INNER JOIN `tablo1` using (id) WHERE `cid` = '$z' AND `gendage` LIKE '$g' AND `wc` like '$w'AND `qid` = '$z' AND `qga` LIKE '$g' AND `qwc` = '$w' ORDER BY `person`.`id` DESC");


            foreach ($info as $info){
               ?>
                <tr>
                    
                    <td><?=$info["Name"]?></td>
                    <td><?=$info["BD"]?></td>
                    <td><?=$info["Team"]?></td>
                    <td><?=$info["trener"]?></td>
                    <td><?=$info["weight"]?></td>
                    <td><?=$info["lot"]?></td>
<!--                    <td> <input  type="text" value="--><?//= $info['weight'] ?><!--" name="weight"  placeholder="Только цифры "></td>-->
<!---->
<!--                    <td>  <input  type="text" value="" name="lot"  placeholder="Только цифры "></td>-->

                    <td><a href="/scripts/lot.php?id=<?= $info["id"] ?>&w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> ">Update</a></td>

                </tr>
                <?php
            }
        ?>

    </table>






</body>
</html>
