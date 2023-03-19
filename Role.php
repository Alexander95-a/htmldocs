<?php require_once("includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
$cc=$_GET['cc'];
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
        margin: 2px 2px;
        cursor: pointer;
    }

</style>

<body>
<div
    <p>выберите</p>
    <a href="../Role.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=1&cc=<?= $cc?>" class="button">Секретарь 1</a>
    <a href="../Role.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=2&cc=<?= $cc?>" class="button">Секретарь 2 </a>
    <a href="../Role.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sr=3&cc=<?= $cc?>" class="button">Секретарь 3</a>
    <a href="Rounds/RB4.1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sk=1" class="button">Секундант 1</a>
    <a href="Rounds/RB4.2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sk=2" class="button">Секундант 2 </a>
    <a href="Rounds/RB4.3.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?>&sk=3" class="button">Секундант 3</a>

<a href="Rounds/R1.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&sr=<?= $sr ?>" class="button">Система А Б</a>
<a href="G2.php?w=<?=$w?>&g=<?=$g?>&q=<?= $q ?>&z=<?= $z ?> &cc=<?= $cc?>&sr=<?= $sr ?>" class="button">Круговая на <?= $cc?></a>

</div>

</body>