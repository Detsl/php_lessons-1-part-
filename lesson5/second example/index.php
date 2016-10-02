<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 26.09.16
 * Time: 19:16
 */
session_start();


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
if(isset($_POST['clear'])){
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    session_destroy();
    header ('Location: controller.php');
}
var_dump($_SESSION['style']);

?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/<?=$style?>.css">
</head>
<body>
<h1>Добро пожаловать, вы выбали <?=$_SESSION['style']?></h1>
<a href="controller.php">Контроллер</a>
<a href="secondPage.php">Second page</a>
<form action="" method="post">
    <input type="submit" name="clear" value="сброс">

</form>


<footer></footer>
</form>




</body>
</html>
