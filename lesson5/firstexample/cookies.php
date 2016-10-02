<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 26.09.16
 * Time: 18:05
 */


session_start();
if(isset($_SESSION['name']) && isset($_SESSION['password'])) {
    if ($_COOKIE['lastpage'] == 'a') {
        header('Location: page_a.php');
    } elseif ($_COOKIE['lastpage'] == 'b') {
        header('Location: page_b.php');
    }
}
else
    {
        header ('Location: authorization.php');
    }
?>


