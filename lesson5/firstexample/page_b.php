<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 26.09.16
 * Time: 18:06
 */


session_start();

    setcookie('lastpage','b', time() + 30);


if(isset($_POST['clearsess'])){
    unset($_SESSION['name']);
    unset($_SESSION['password']);
    session_destroy();
    header ('Location: cookies.php');
}

?>


<h1>Добро пожаловать на старницу B</h1>
<form action=""method="post">
    <input type="submit" value="выйти" name="clearsess">
</form>