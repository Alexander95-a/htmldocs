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
$mesto = $_POST['mesto'];
$stat = $_POST['stat'];
/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"INSERT INTO `comp` (`date`, `date2`, `place`, `country`, `name`, `mreferee`, `msecretary`, `cid`, `mrc`, `msc`, `sc`, `rc`, `mesto` , `stat`) VALUES ( '$date', '$date2', '$place', '$country', '$name', '$mre', '$mse', '0', '$mrc', '$msc', '$sc', '$rc', '$mesto' , '$stat');");

/*
* Переадресация на главную страницу
*/

header("Location:/index.php?w=$w&g=$g&a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&q=$q&z=$z");
