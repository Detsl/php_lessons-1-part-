
<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 25.09.16
 * Time: 12:01
 */

// Вывод заголовка с данными о кодировке страницы
header('Content-Type: text/html; charset=utf-8');
// Настройка локали
setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
// Настройка подключения к базе данных

include 'functions.php';








if (isset($_POST['name']) && isset($_POST['password'])) {

    if($_POST['name'] == 'denis' && mpass($_POST['password']) == $xcrypt) {

        $result = "Поздравляю Вы вошли";
    }
    else {
        $result ='Вы ввели не корректные данные';
    }
    }




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
    <p>Введите свой имя</p> <input type="text" name="name"/>
    <p>Введите пароль</p> <input type="password" name="password"/><br>
    <input type="submit" name="sendForm" value="Войти">
    <h3><?= $result?></h3>



</form>

</body>
</html>