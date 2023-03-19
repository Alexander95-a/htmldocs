<?php require_once("../includes/connect.php");

$q=$_GET['q'];
$g=$_GET['g'];
$w=$_GET['w'];
$z=$_GET['z'];
?>




//Добавление нового




/*
* Делаем запрос на добавление новой строки в таблицу
*/
<?php
mysqli_query($conn,"INSERT INTO tablo1 (id, name2, qid, qwc, qga) SELECT id, Name, cid, wc, gendage  FROM person WHERE `cid` = '$z'  AND `gendage` LIKE '$g' AND `wc` = '$w'  ON DUPLICATE KEY UPDATE `UO10` = '0' ;");



/*
* Переадресация на главную страницу
*/

header("Location: /Lot_add.php?w=$w&g=$g&q=$q&z=$z");
