<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 20.09.16
 * Time: 13:58
 * 4. Объявите массив, где в качестве ключей будут использоваться названия областей, а
в качестве значений – массивы с названиями городов из соответствующей области.
Выведите в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область
…
(названия городов можно найти на maps.yandex.ru)
5. Задание со звездочкой. Повторите предыдущее задание, но выводите на экран
только города, начинающиеся с буквы «К».
6. Объявите массив, индексами которого являются буквы русского языка, а
значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’
=> ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Напишите функцию транслитерации строк.
7. Напишите функцию, которая заменяет в строке пробелы на подчеркивания и
возвращает видоизмененную строчку.
8. Объедините две ранее написанные функции в одну, которая получает строку на
русском языке, производит транслитерацию и замену пробелов на подчеркивания
(аналогичная задача решается при конструировании url-адресов на основе названия
статьи в блогах).
 */

    $states = [
    'Moscow state' => [
        'Zelenograd',
        'Klin',
        'Moscow'
        ],
    'Leningrad state' => [
        'Spb',
        'Luki',
        'KPavlovsk'
        ],
    'Volgograd state' => [
        'KVlg',
        'Vlz',
        'Sloboda'
     ]
    ];
    
    foreach ($states as $state => $cities) {

        print "<ul>$state</ul><br>";

        foreach ($cities as $key => $citiesName) {

            $firstSymbol = str_split($citiesName);

            if ($firstSymbol[0] == 'K') {


                print "<li>" . $citiesName . "</li> <br>";
            };

        }
    }



        
