
<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 24.09.16
 * Time: 19:48
 */
$id = $_GET['id'];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h2>Какоето описание картинки <?php echo $id?></h2>
<img src="pictures/<?php echo $id?>.jpg" width="300px">


</body>
</html>
