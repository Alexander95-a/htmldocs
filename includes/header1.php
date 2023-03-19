<?php require_once("connect.php");
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_NOTICE);

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];

$cc=$_GET['cc'];
$sr=$_GET['sr'];

$info2 = mysqli_query($conn, "SELECT * FROM `comp` WHERE `comp`.`id` = '$q'");

$info2 = mysqli_fetch_assoc($info2);

$a=$info2['date'];
$b=$info2['place'];
$c=$info2['country'];
$d=$info2['name'];
$e=$info2['mreferee'];
$f=$info2['msecretary'];
$e1=$info2['mrc'];
$f1=$info2['msc'];
$e2=$info2['rc'];
$e2=$info2['sc'];

$info3 = mysqli_query($conn, "SELECT * FROM `category` WHERE `category`.`gender` = '$g'" );

$info3 = mysqli_fetch_assoc($info3);

$p=$info3['pol'];

?>
<style>
    .button{
        background-color: dimgrey ;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        margin: auto;
        cursor: pointer;
    }
    .button2{
        background-color: dimgrey ;
        color: white;
        padding: 5px 13.4%;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 15px;
        cursor: pointer;
    }
    .button-box{
        margin: 0 auto;
        width: 450px;
    }
</style>

<div>
<!--    <form action="Person.php" method="Get">-->
<!---->
<!---->
<!--        <input type="text" hidden name="g" value="--><?//= $g ?><!--">-->
<!--        <input type="text" hidden name="a" value="--><?//= $a ?><!--">-->
<!--        <input type="text" hidden name="b" value="--><?//= $b ?><!--">-->
<!--        <input type="text" hidden name="c" value="--><?//= $c ?><!--">-->
<!--        <input type="text" hidden name="d" value="--><?//= $d ?><!--">-->
<!--        <input type="text" hidden name="e" value="--><?//= $e ?><!--">-->
<!--        <input type="text" hidden name="f" value="--><?//= $f ?><!--">-->
<!--        <input type="text" hidden name="q" value="--><?//= $q ?><!--">-->
<!--        <input type="text" hidden name="z" value="--><?//= $z ?><!--">-->
<!---->
<!--        <p>весовая категория</p>-->
<!--        <select name="g">-->
<!--            <option value="--><?//= $g ?><!--">--><?//= $p?><!--</option>-->
<!--            <option value="w">Женщины</option>-->
<!--            <option value="m">Мужчины</option>-->
<!--        </select>-->
<!---->
<!---->
<!---->
<!--        <select name="w">-->
<!--            <option value="--><?//= $w ?><!--">--><?//= $w ?><!--</option>-->
<!---->
<!--            <option value="40">40</option>-->
<!--            <option value="50">50</option>-->
<!--            <option value="55">55</option>-->
<!--            <option value="60">60</option>-->
<!--            <option value="65">65</option>-->
<!--            <option value="66">65+</option>-->
<!--            <option value="70">70</option>-->
<!--            <option value="71">70+</option>-->
<!--            <option value="80">80</option>-->
<!--            <option value="81">80+</option>-->
<!--            <option value="85">85</option>-->
<!--            <option value="86">85+</option>-->
<!--            <option value="90">90</option>-->
<!--            <option value="105">105</option>-->
<!--            <option value="106">105+</option>-->
<!--            <option value="125">125</option>-->
<!--            <option value="126">125+</option>-->
<!--            <option value="130">Абсолютная</option>-->
<!---->
<!--        </select>-->
<!--        <br> <br>-->
<!--        <button type="submit">Enter</button>-->
<!--    </form>-->
</div>

