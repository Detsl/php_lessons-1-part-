<?php
/**
1. Объявите две целочисленные переменные $a и $b и задайте им произвольные
начальные значения. Затем напишите скрипт, который работает по следующему
принципу:
a. если $a и $b положительные, выведите их разность;
b. если $а и $b отрицательные, выведите их произведение;
c. если $а и $b разных знаков, выведите их сумму.
Ноль можно считать положительным числом.
 */
$a = 28;
$b = -19;

if ($a  >=  0 && $b  >= 0 )
{
    echo $a    -   $b;
}

elseif ($a <    0 && $b  <   0){

    echo $a    *   $b  ;
}
elseif ($a != $b){
    echo    $a  +   $b;
};
?>


    <h1>Второе задание</h1>
    <span>2. Присвойте переменной $а значение в промежутке [0..15]. С помощью оператора
switch организуйте вывод чисел от $a до 15;</span>
    <br>
    <div>Исполнение:
        <br>
    <?php

    function countDown ($b){
        if($b   <= 15){
            echo $b++;
            echo ",";
            countDown($b);
        }

    }

   $a = 4;
    switch ($a) {

        case $a < 15 :
            countDown($a);
            break;

        case $a > 15:
            echo "не верные параметры";
            break;
        default:
            echo "Введите параметр от 1 до 15";

    }


            ?>  
        </div>
<p><h2>
    Третье задание
</h2>
</p>
    <span>3. Реализуйте основные 4 арифметические операции (+, -, *, %) в виде функций с
двумя параметрами. Обязательно используйте оператор return.
<p>
    4. Реализуйте функцию с тремя параметрами: function mathOperation($arg1, $arg2,
$operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием
операции. В зависимости от переданного значения операции выполните одну из
арифметических операций (используйте функции из пункта 4) и верните
полученное значение (используйте switch).
</p>
    </span>
    <div>
        <p>Исполнение третьего задания:
        </p>
        <?php

        function plus ($a, $b){
            return $a   +   $b;
        }
        function minus ($a, $b){
            return $a   -   $b;
        }
        function multiply ($a, $b){
            return $a   *   $b;
        }
        function remind ($a, $b){
            return $a   %   $b;
        }


?>
        <br>   <? echo plus(5,7);?>
        <br> <? echo minus(10,2);?>
        <br> <? echo multiply(48,90);?>
        <br> <? echo remind(1000,10);?>


</div>
<div>
    <p>Исполнение 4го задания
    </p>

    <?php
    function doMath ($par1, $par2, $math)
    {
        if ($math == "+")
        {
            return plus($par1, $par2);
        }
        elseif ($math == "-")
        {
            return minus($par1, $par2);

        }
        elseif ($math ==    "*")
        {
            return multiply($par1,$par2);
        }
        elseif ($math ==    "%")
           {
            return remind($par1, $par2);
           }
           else {
               return "Error";
           }


    }

    function calculate ($var1, $var2, $operation)
    {
          switch($operation) {
              case '+':
                  return $var1 + $var2;
                  break;
              case '-':
                  return $var1 - $var2;
                  break;
              case '*':
                  return $var1 * $var2;
                  break;
              case '%   ':
                  return $var1 % $var2;
                  break;

          }
    }

    ?>

    <p>
Математикa</p>
    <br>
    <?  echo doMath(12, 14, "+");?>
    <? echo calculate(14,32,"+");?>
<div>
    <h3>Продвинутый блок
        5. С помощью рекурсии организуйте функцию возведения числа в степень. Формат:
        function power($val, $pow), где $val – заданное число, $pow – степень.
        6. Напишите функцию, которая вычисляет текущее время и возвращает его в формате
        с правильными склонениями, например:
        22 часа 15 минут
        21 час 43 минуты
        итд.
        Подсказка: часы и минуты можно узнать с помощью встроенной функции PHP –
        date
    </h3>
</div>


<?php
function power($val,$pow)
{
    if ($pow)
    {
        return $val * power ($val, $pow -1);
    }
    return 1;
}
var_dump (power(5, 3));



$hello = 'Hello!';
for($i = 0; $i <= 3; $i++)
{
    echo $hello[$i];
}
echo $hello[strlen($hello)-1];





