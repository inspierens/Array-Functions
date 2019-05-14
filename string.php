<?php

$str1 = 'Hello my broth';
$str2 = 'my <b>dick</b> is big';
$str3 = 'your little dick';

//chr - Генерирует односимвольную строку по заданному числу

$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str . PHP_EOL;

//convert_uudecode - Декодирует строку из формата uuencode в обычный вид

echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`") . PHP_EOL;

//convert_uuencode - Кодирует строку в формат uuencode

echo convert_uuencode($str3) . PHP_EOL;

//count_chars - Возвращает информацию о символах, входящих в строку

foreach (count_chars($str2, 1) as $i => $val) {
    echo '"', chr($i), '" ', $val . ' раз(а).' . PHP_EOL;
}

//crypt - Необратимое хеширование строки

//$hash = crypt(rand);
//echo $hash;

//explode - Разбивает строку с помощью разделителя

print_r(explode(' ', $str1, 3));

//htmlentities - Преобразует все возможные символы в соответствующие HTML-сущности

echo htmlentities($str2) . PHP_EOL;
echo htmlentities($str2, ENT_QUOTES) . PHP_EOL;

//htmlspecialchars - Преобразует специальные символы в HTML-сущности

$str = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $str . PHP_EOL;

//htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы

$str = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str) . PHP_EOL;

//implode (join) — Объединяет элементы массива в строку

$arr = ['name', 'email', 'phone'];
$str = implode(", ", $arr);
echo $str . PHP_EOL;
$str = join(", ", $arr);
echo $str . PHP_EOL;

//lcfirst — Преобразует первый символ строки в нижний регистр

$str = lcfirst($str1);
echo $str . PHP_EOL;
