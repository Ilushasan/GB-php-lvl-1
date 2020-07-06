<?php
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
    if($y == 0) {
        return "Ошибка. На ноль делить нельзя";
    }
    else {
        return $x / $y;
    }
    
}

function mathOperation($arg1, $arg2, $operation) {
    switch($operation) {
        case "+":
            return sum($arg1, $arg2);
            break;
        case "-":
            return subtraction($arg1, $arg2);
            break;
        case "*":
            return multy($arg1, $arg2);
            break;
        case "/":
            return divide ($arg1, $arg2);
            break;
        default:
            return "Что-то пошло не так -_-";
    }
}