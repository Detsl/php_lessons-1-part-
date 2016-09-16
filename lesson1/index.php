<?php
/**
 * Created by PhpStorm.
 * User: ghettogeek
 * Date: 16.09.16
 * Time: 10:01
 */
echo "hello world! <br/>";

?>


<?php
$int = 100;
$one = "Значение переменной равно $int<br/>";
$two = 'Значение переменной равно $int<br/>';
echo $one;
echo $two;

/**
 * Created by PhpStorm.
 * using echo
 *i need to return 1) int 2)Float 3)Bulean 4)str 5)CONST
 *
 */
$int = 5;
$float = 5.5;
$bulean = true;
$str = "hello world!";

define("CONSTANT", "HELLO WORLD! I AM CONSTANT.");



echo "$int <br/> $float <br/> $bulean <br/> $str<br/>  " . CONSTANT ."<br/>";
?>


<?php
$x = 10;
$y = 15;

$y+=$x;
$x = $y -$x;
$y-=$x;
echo "Икс теперь =$x.<br/> А игрик тперь =$y";


?>


