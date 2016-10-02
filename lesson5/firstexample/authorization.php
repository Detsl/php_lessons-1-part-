<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 26.09.16
 * Time: 18:07
 */

session_start();
$_SESSION['name'] = $_POST['name'];
$_SESSION['password'] = $_POST['password'];
var_dump($_SESSION);
var_dump($_POST);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>

</head>
<body>
<h1>Добро пожаловать</h1>
<form action="" method="post">
    <p>Введите своё имя</p> <input type="text" name="name" value="<?=$_SESSION['name']?>"/>
    <p>Введите пароль</p> <input type="password" name="password" "<?=$_SESSION['password']?>"/><br>
    <input type="submit" name="sendForm" value="Войти">
    <input type="submit" name="clear" value="Clear">



</form>

</body>
</html>