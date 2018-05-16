<?php
echo "Task 1 <br>";
$i = 0;
while ($i <= 100) {
    echo "$i ";
    $i++;
}

echo "<br><br>  Task 2 <br>";
$i = 0;
do {
    if ($i === 0) {
        echo "$i - это ноль. <br>";
        
    } else if ($i % 2 === 0) {
        echo "$i - четное число. <br>";
    } else {
        echo "$i - нечетное число. <br>";
    }
    $i++;
} while ($i <= 10);

echo "<br><br>  Task 3 <br>";
$arr["Московская область: <br>"] = [
    "Москва,", "Зеленоград,", "Клин"
];
$arr["<br><br>Ленинградская область: <br>"] = [
    "Санкт-Петербург,", "Всеволожск,", "Павловск,", "Кронштадт"
];
foreach ($arr as $key => $value) {
    echo "$key";
    for ($i = 0; $i < count($value); $i++) {
        echo("$value[$i] ");
    }
}

?>