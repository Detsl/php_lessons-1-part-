<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 19.09.16
 * Time: 15:57
 * Напишите функцию, которая вычисляет текущее время и возвращает его в формате
с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
итд.
Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP –
date.
 */


$hour = date(g);
$minute = date(i);
$hour = ++$hour;


//часы
// 1 2 3 4 5 6 7 8 9 10 11 12
//час 1
//часа 2 3 4
//часов 5 6 7 8 9 10 11 12
//Минуты
//минута 1
//минуты 2 3 4
//минут 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20

if ($hour >= 5 ){
    echo "сейчас $hour часов";
}
elseif ($hour < 5 && $hour !=1){
    echo "сейчас $hour часа";
}
else{
    echo "сейчас $hour час";
}

function minuteCut($x){
           return $x % 10;

}


if (minuteCut($minute) >= 5 || minuteCut($minute) == 0 ){
    echo " и  $minute минут";
}
elseif (minuteCut($minute) < 5 || minuteCut($minute)!= 1){
    echo " и $minute минуты";
}
else{
    echo " и $minute минутa";
}





