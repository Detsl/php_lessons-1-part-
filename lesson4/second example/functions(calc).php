<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 19.09.16
 * Time: 14:13
 * 3. Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с
двумя параметрами. Обязательно используйте оператор return.
 * 5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
function power($val, $pow), где $val – заданное число, $pow – степень.
 */
?>

<h1>Арифметические функции</h1>
<?php

    function plus($int1,$int2){
        return $int1 + $int2;

    }
    function minus($int1,$int2){
        return $int1 - $int2;
    }
    function multiply($int1,$int2){
        return $int1 * $int2;
    }
    function modulo($int1,$int2){
        return $int1 % $int2;
    }


    function fumathOperation($arg1, $arg2,
    $operation){
        switch ($operation){
            case $operation == "+":
                    return plus($arg1,$arg2);
            case $operation == "-":
                return minus($arg1,$arg2);
            case $operation == "*":
                return multiply($arg1,$arg2);
            case $operation == "%":
                return modulo($arg1,$arg2);

        }
        
    }
    function power($val, $pow){
        $val*($pow-1);

    }