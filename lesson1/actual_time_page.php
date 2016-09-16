<?php
/**
Задание
2 странички
на первой  3 переменные
имя
возраст
дату в текущем формате.
Вывод:
меня зовут ИМЯ, мне ЛЕТ, через год будет столько то, чреве год столько то , на моих часа сейчас  «текущее время дата.»
Потом все пробелы заменить на нижнее подчёркивание.
Выделить из этой строки на моих часах сейчас и дату.
Со второй страницы сделать  редирект на первую страничку.
 */


$myName = "Denis";
$myAge = 28;
$actualDate = date(r);


$input = "Hello!<br/> My name is $myName, <br/> I am $myAge years old, <br/> And right now on my clock is $actualDate !!!<br/> 
But after one year i will ".++$myAge." years old<br/>";
echo $input;

$strrep = str_replace(' ', '_', $input);
echo $strrep;


$onlyTime = strstr($input, "And");

echo $onlyTime;