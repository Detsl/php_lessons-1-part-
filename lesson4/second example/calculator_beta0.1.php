
<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 24.09.16
 * Time: 20:12
 */
include "functions(calc).php";

    if(isset($_POST['a']) && isset($_POST['b'])) {
        if ($_POST['calc'] == '+') {
            $result = plus($_POST['a'], $_POST['b']);
        } elseif ($_POST['calc'] == '-') {
            $result = minus($_POST['a'], $_POST['b']);
        } elseif ($_POST['calc'] == '%') {
            $result = modulo($_POST['a'], $_POST['b']);
        } elseif ($_POST['calc'] == '*') {
            $result = multiply($_POST['a'], $_POST['b']);
        }
    }
    else "You need a write some digits";

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Калькулятор сложения</h1>
    <form method="post" name="calc">
            <p>Введите первое число</p><input type="text" name="a"  value="<?=$_POST['a']?>"/>
            <p>+</p>
            <p>Введите второе число</p><input type="text" name="b" value="<?=$_POST['b']?>"/>
            <p>Выберите действие</p>
            <select name="calc">
                <option value="+">+</option>
                <option selected="selected" value="-">-</option>
                <option value="%">%</option>
                <option value="*">*</option>
            </select>
            <input type="submit" value="=" />
             <p>Ваш ответ равен =<?=$result?></p>
    </form>








</body>
</html>