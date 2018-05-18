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
    echo $key;
    for ($i = 0; $i < count($value); $i++) {
        echo $value[$i];
    }
}

echo "<br><br>  Task 4, 5, 9 <br><br>";

$text = 'Задание № 4, 5 и 9';
echo 'Было:<br>' . $text . '<br>';
transliterate ($text);
function transliterate ($text) {
    $translit_arr = [
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'kh', 'ц'=>'ts', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'tch', 'ъ'=>'"', 'ы'=>'y', 'ь'=>'`', 'э'=>'eh', 'ю'=>'yu', 'я'=>'ya',
        'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ё'=>'Yo', 'Ж'=>'ZH', 'З'=>'Z', 'И'=>'I', 'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'Kh', 'Ц'=>'Ts', 'Ч'=>'Ch', 'Ш'=>'Sh', 'Щ'=>'Tch', 'Ы'=>'Y', 'Э'=>'Eh', 'Ю'=>'Yu', 'Я'=>'Ya', ' ' => '_'
    ];
    $text = preg_replace('[,]', '', $text);
    $text = strtr($text, $translit_arr);
    echo 'Стало:<br>' . $text;
}

echo "<br><br>  Task 7: <br><br>";

for ($i = 0; $i <= 9; print $i++ . " ") {

}   

echo "<br><br>  Task 8: <br><br>";

$arr["Московская область: <br>"] = [
    "Москва,", "Зеленоград,", "Клин"
];
$arr["<br><br>Ленинградская область: <br>"] = [
    "Санкт-Петербург,", "Всеволожск,", "Павловск,", "Кронштадт"
];
foreach ($arr as $key => $value) {
    echo $key;
    for ($i = 0; $i < count($value); $i++) {
        if (preg_match('/^К|^к/' , $value[$i])) {
            echo $value[$i];
        }
    }
}
?>