<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 21.09.16
 * Time: 13:09
 */

// Вывод заголовка с данными о кодировке страницы
header('Content-Type: text/html; charset=utf-8');
// Настройка локали
setlocale(LC_ALL, 'ru_RU.65001', 'rus_RUS.65001', 'Russian_Russia. 65001', 'russian');
// Настройка подключения к базе данных

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pictures</title>
</head>
<body>
<h1> Картинная галерея</h1>
<?php
     for( $i=3; $i<=8; ++$i)
        echo "<a href=photo.php?id=$i> Картинка #$i</a><br>";
echo "<a href=photo.php?id=2> Картинка #2(S)</a><br>";
    ?>



</body>
</html>

