<?php
echo "Task 1: <br>";
echo task1(28,-28) . "<br>";
function task1($a,$b) {
    if ($a >= 0 && $b >= 0) {
        echo $a - $b;
    } else if ($a < 0 && $b < 0) {
        echo $a * $b;
    } else if (($a >= 0 && $b < 0) || ($a < 0 && $b >= 0)) {
        echo $a + $b;
    }
}

echo "Task 2: <br>";
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
?>