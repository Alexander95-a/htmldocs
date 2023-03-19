<?php require_once("includes/connect.php");

//Добавление нового продукта

$gen = $_POST['gen'];
$pol = $_POST['pol'];
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



/*
* Делаем запрос на добавление новой строки в таблицу products
*/

mysqli_query($conn,"INSERT INTO `category` (`id`, `gender`, `weight` ) VALUES (NULL, '$gen', '$weight');");


/*
* Переадресация на главную страницу
*/

header("Location:/category.php?w=$w&g=$g&a=$a&b=$b&c=$c&d=$d&e=$e&f=$f&q=$q&z=$z");
