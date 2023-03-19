<?php require_once("includes/connect.php");

//Добавление нового продукта


$date = $_POST['date'];
$date2 = $_POST['date2'];
$place = $_POST['place'];
$country = $_POST['country'];
$name = $_POST['name'];
$mre = $_POST['mre'];
$mse = $_POST['mse'];
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
$mrc = $_POST['mrc'];
$msc = $_POST['msc'];
$sc = $_POST['sc'];
$rc = $_POST['rc'];
$id = $_POST['id'];
$mesto = $_POST['mesto'];
$stat = $_POST['stat'];
/*
* Делаем запрос на добавление новой строки в таблицу products
*/
mysqli_query($conn,"UPDATE `comp`  set `stat` = '$stat', `date` = '$date', `date2` = '$date2', `mesto` = '$mesto',  `place` = '$place', `country` = '$country', `name`= '$name' , `mreferee`= '$mre' , `msecretary` = '$mse', `mrc` = '$mrc', `msc` = '$msc', `sc` = '$sc', `rc`= '$rc' where `comp`.`id` = '$id';");

/*
* Переадресация на главную страницу
*/

header("Location:/index.php?w=$w&g=$g&a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&q=$q&z=$z");
