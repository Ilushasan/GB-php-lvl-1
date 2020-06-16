<!--Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;-->
<?php
$a = rand(-10,10);
$b = rand(-10,10);

function compare ($a,$b) {
    if ($a >= 0 && $b >= 0) {
        return $a - $b;
    }
    elseif ($a < 0 && $b < 0) {
        return $a * $b;
    }
    else {
        return $a + $b;
    }
};

//echo (compare($a, $b));

//Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

$c = rand(0 , 15);

switch($c) {
    case 0:
        echo " ".$c++;
    case 1: 
        echo " ".$c++;
    case 2:
        echo " ".$c++;
    case 3: 
        echo " ".$c++;
    case 4: 
        echo " ".$c++;
    case 5: 
        echo " ".$c++;
    case 6: 
        echo " ".$c++;
    case 7: 
        echo " ".$c++;
    case 8:
        echo " ".$c++;
    case 9: 
        echo " ".$c++;
    case 10: 
        echo " ".$c++;
    case 11: 
        echo " ".$c++;
    case 12: 
        echo " ".$c++;
    case 13: 
        echo " ".$c++;
    case 14: 
        echo " ".$c++;
    case 15:
        echo " ".$c++;
}

//Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

function sum ($x, $y) {
    return $x + $y;
}
function subtraction ($x, $y) {
    return $x - $y;
}
function multy ($x, $y) {
    return $x * $y;
}
function divide ($x, $y) {
    return $x / $y;
}

//Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "Сложение":
            echo sum($arg1, $arg2);
            break;
        case "Вычитание":
            echo subtraction($arg1, $arg2);
            break;
        case "Умножение":
            echo multy($arg1, $arg2);
            break;
        case "Деление":
            echo divide ($arg1, $arg2);
            break;
        default:
            echo "Что-то пошло не так -_-";
    }
}

mathOperation(3,2,"Вычитание");

//5 задание сделал в прошлый раз
//С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    }
    if ($pow < 0) {
        return power(1/$val, -$pow);
    }
    return $val * power($val, $pow-1);
}

echo(power(3, 2));


function trueTime ($hours, $minuts=0) {
    if($hours>=5 && $hours<=20 || $hours == 0) {
        if(($minuts>=5 && $minuts<=20) || ($minuts>=25 && $minuts<=30) || ($minuts>=35 && $minuts<=40) || ($minuts>=45 && $minuts<=50) || ($minuts>=55 && $minuts<=60) || $minuts%100 == 0) {
            echo "$hours часов $minuts минут";
        }elseif ($minuts == 1 || $minuts == 21 || $minuts == 31 || $minuts == 41 || $minuts == 51) {
            echo "$hours часов $minuts минутa";
        }elseif (($minuts >= 1 && $minuts <=4)||($minuts>=22 && $minuts <=24)||($minuts >= 32 && $minuts <=34)||($minuts>=42 && $minuts <=44)||($minuts>=52 && $minuts <=54)){
            echo "$hours часов $minuts минуты";
        }else {
            echo "Где-то кто-то накосячил";
        }
    }elseif($hours == 1 || $hours == 21) {
        if(($minuts>=5 && $minuts<=20) || ($minuts>=25 && $minuts<=30) || ($minuts>=35 && $minuts<=40) || ($minuts>=45 && $minuts<=50) || ($minuts>=55 && $minuts<=60) || $minuts%100 == 0) {
            echo "$hours час $minuts минут";
        }elseif ($minuts == 1 || $minuts == 21 || $minuts == 31 || $minuts == 41 || $minuts == 51) {
            echo "$hours час $minuts минутa";
        }elseif (($minuts >= 1 && $minuts <=4)||($minuts>=22 && $minuts <=24)||($minuts >= 32 && $minuts <=34)||($minuts>=42 && $minuts <=44)||($minuts>=52 && $minuts <=54)){
            echo "$hours час $minuts минуты";
        }else {
            echo "Где-то кто-то накосячил";
        }
    }elseif(($hours >= 1 && $hours <=4)||($hours>=22 && $hours <=24)) {
        if(($minuts>=5 && $minuts<=20) || ($minuts>=25 && $minuts<=30) || ($minuts>=35 && $minuts<=40) || ($minuts>=45 && $minuts<=50) || ($minuts>=55 && $minuts<=60) || $minuts%100 == 0) {
            echo "$hours часа $minuts минут";
        }elseif ($minuts == 1 || $minuts == 21 || $minuts == 31 || $minuts == 41 || $minuts == 51) {
            echo "$hours часа $minuts минутa";
        }elseif (($minuts >= 1 && $minuts <=4)||($minuts>=22 && $minuts <=24)||($minuts >= 32 && $minuts <=34)||($minuts>=42 && $minuts <=44)||($minuts>=52 && $minuts <=54)){
            echo "$hours часа $minuts минуты";
        }else {
            echo "Где-то кто-то накосячил";
        }
    }else{
        echo "---";
    }
}

echo (trueTime(22, 24));


