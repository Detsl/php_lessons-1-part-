<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 27.09.16
 * Time: 19:50
 */
session_start();
if(isset($_SESSION['style'])) {
    print 'Вы уже выбрали стиль';
    switch ($_SESSION['style']) {

        case 'soccer':
            $style = 'style1';
            break;
        case 'basketball':
            $style = 'style2';
            break;
        case 'voleyball':
            $style = 'style3';
            break;
        default;
    }
}
else {
    $save = $_POST['sports'];
    $_SESSION['style'] = $save;


    switch ($_POST['sports']) {

        case 'soccer':
            $style = 'style1';
            break;
        case 'basketball':
            $style = 'style2';
            break;
        case 'voleyball':
            $style = 'style3';
            break;
        default;
    }
    var_dump($_SESSION['style']);
}

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/<?=$style?>.css">
</head>
<body>
<h1>Выбирете любимый спорт</h1>
<form action="" method="post">
    <input type="radio" value="soccer" name="sports">soccer
    <input type="radio" value="basketball" name="sports">basketball
    <input type="radio" value="voleyball" name="sports">voleyball
    <p><input type="submit" value="Отправить">
        <a href="index.php">Главная</a>


        <footer></footer>
</form>