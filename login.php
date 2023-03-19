<?php require_once("includes/connection.php"); ?>
<?php
session_start();
if(isset($_SESSION["session_username"])){
    header("location:index.php");
}

?>


<?php
if(isset($_POST["login"])){
    if(empty($_POST['username']) or empty($_POST['password'])) {
        echo "All fields are required!";
    }
    else {
        $username=htmlspecialchars($_POST['username']);
        $password=htmlspecialchars($_POST['password']);
        $query =mysqli_query("SELECT * FROM user WHERE username= '".$username."' AND password='".$password."'");
        $numrows=mysqli_num_rows($query);
        if($numrows!=0)
        {
            $_SESSION['session_username']=$username;
            /* Перенаправление браузера */
            if(isset($_SESSION["session_username"])){
                echo '<meta http-equiv="refresh" content="0;URL=/index.php">';

            }
            else {
                echo "Invalid username or password!";
            }
        }
    }
}
?>
<!DOCTYPE html>
	<html lang="en">
	<head>
<meta charset="utf-8">
<title> Как с помощью PHP и MySQL создать систему регистрации и авторизации пользователей</title>
<link href="css/style.css" media="screen" rel="stylesheet">
<link href= 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="container mlogin">
<div id="login">
<h1>Вход</h1>
<form action="" id="loginform" method="post"name="loginform">
<p><label for="user_login">Имя опльзователя<br>
<input class="input" id="username" name="username"size="20"
type="text" value=""></label></p>
<p><label for="user_pass">Пароль<br>
 <input class="input" id="password" name="password"size="20"
  type="password" value=""></label></p>
	<p class="submit"><input class="button" name="login"type= "submit" value="Log In"></p>
	<p class="regtext">Еще не зарегистрированы?<a href= "register.php">Регистрация</a>!</p>
   </form>
 </div>
  </div>
<footer>
© 2014 <ahref="http://www.1stwebdesigner.com/">1stwebdesigner</a>. Все права защищены.

</footer>
</body>
</html>
