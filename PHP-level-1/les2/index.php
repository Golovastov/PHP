<?php
echo "Task 1: <br>";
echo task1(28,-28) . "<br>";
function task1($a, $b) {
    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } else if ($a < 0 && $b < 0) {
        echo $a * $b;
    } else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
        echo $a + $b;
    }
}

echo "<br> Task 2: <br>";
$z = 1;
switch ($z) {
    case 1:
        echo " 2";
    case 2:
        echo " 3";
    case 3:
        echo " 4";
    case 4:
        echo " 5";
    case 5:
        echo " 6";
    case 6:
        echo " 7";
    case 7:
        echo " 8";
    case 8:
        echo " 9";
    case 9:
        echo " 10";
    case 10:
        echo " 11";
    case 11:
        echo " 12";
    case 12:
        echo " 13";
    case 13:
        echo " 14";
    case 14:
        echo " 15 <br>";
        break;
}

echo "<br> Task 3-4 <br>";

mathOperation(1, 2, "addition");
mathOperation(1, 2, "subtraction");
mathOperation(1, 2, "multiplication");
mathOperation(1, 2, "division");

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case "addition" :
            echo _addition($arg1, $arg2) . "<br>";
            break;
        case "subtraction" :
            echo _subtraction($arg1, $arg2) . "<br>";
            break;
        case "multiplication" :
            echo _multiplication($arg1, $arg2) . "<br>";
            break;
        case "division" :
            echo _division($arg1, $arg2) . "<br>";
            break;
    }
}

function _addition ($x, $y) {
    return $x + $y;
}
function _subtraction ($x, $y) {
    return $x - $y;
}
function _multiplication ($x, $y) {
    return $x * $y;
}
function _division ($x, $y) {
    return $x / $y;
}

echo "<br> Task 5 <br>";
echo "Текущий год: " . date(Y) . "<br>";

echo "<br> Task 6 <br>";

$val = 2;
$pow = 8;

echo power($val, $pow);

function power($val, $pow) {
    if ($pow == 0) {
        return 1;
    } else if ($pow > 0) {
        return $val * power($val, $pow - 1);
    }  
}

echo "<br> Task 7 <br>";

$hours = date("H");
$min = date("i");
if ($hours == 1 || $hours == 21) {
    $hstr = " час ";
} else if ($hours >= 2 && $hours <= 4 || $hours == 22 || $hours == 23) {
    $hstr = " часа ";
} else if ($hours == 0 || $hours >= 5) {
    $hstr = " часов ";
} 

if ($min == 1 || $min == 21 || $min == 31 || $min == 41 || $min == 51) {
    $mstr = " минута";
} else if (($min >=2 && $min <= 4) || ($min >=22 && $min <= 24) || ($min >=32 && $min <= 34) || ($min >=42 && $min <= 44) || ($min >=52 && $min <= 54)) {
    $mstr = " минуты";
} else
    $mstr = " минут";

echo "Точное время: " . $hours . $hstr . $min . $mstr;

?>
