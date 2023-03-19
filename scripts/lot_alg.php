<?php require_once("../includes/connect.php");
$id = $_POST['id'];
$lot = $_POST['lot'];
$weight = $_POST['weight'];
$w=$_POST['w'];
$g=$_POST['g'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];
$f=$_POST['f'];
$q=$_POST['q'];
$z=$_POST['z'];
$wc=$_POST['wc'];
$n=$_POST['n'];


/*
 * Делаем запрос на изменение строки в таблице products
 */

mysqli_query($conn,"UPDATE `tablo1` SET `qwc`  = '$wc', `lot`  = '$lot', `weight` = '$weight', `qid` = '$z'  WHERE `tablo1`.`id` = '$id';");
mysqli_query($conn,"UPDATE `person` SET `wc` = '$wc' WHERE `person`.`id` = '$id'");
/*
 * Переадресация на главную страницу
 */
header("Location:/Lot_add.php?w=$w&g=$g&a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&q=$q&z=$z");
?>
<p><?= $z ?></p>
<p><?= $lot ?></p>
<p><?= $id ?></p>
<p><?= $weight ?></p>
