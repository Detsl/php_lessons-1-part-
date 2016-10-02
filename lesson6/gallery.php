<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 28.09.16
 * Time: 17:44
 */





include "functions/checkFunctions.php";


if (isset($_FILES['file']))
{
    upload_file($_FILES['file']);
    writeTxt($_FILES['file']['name']);
}

$result = upload_file($_FILES['file']);




$a = (file('newfiles.txt'));



// выводит кол-во новыйх секций для фотографий




?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Добро пожаловать в нашу галерею</h1>
    </header>

    <main>
    <div class="container">
        <h2>Вы загрузили:<?=$_FILES['file']['name']?></h2>
        <?php
        for ($i = 0 ; $i < count($a) ; $i++){
            print "<section class=\"photo\"><a href=\"pictures/$a[$i]\" target=\"_blank\"><img src=\"pictures/$a[$i]\" width=\"100%\" height=\"100%\" align=\"top\" alt=\"\"></a><span>$a[$i]</span></section>";
        }
        ?>
        <form  class="formPic" enctype="multipart/form-data"method="post">
            <input class="buttons" type="file" name="file" value="загрузить новую картинку">
            <input class="buttons" type="submit" name="sub" value="Отправить картинку">

        </form>
    </div>

    </main>




    <footer>
<h3>alll rights reserve</h3>
    </footer>
</body>
</html>
