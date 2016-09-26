<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 26.09.16
 * Time: 11:53
 */
function mpass($a){
    $password = $a;
    $password= md5($password);
    return($password);
}

$xcrypt = mpass(1234);