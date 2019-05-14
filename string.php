<?php

$str1 = 'Hello my broth';
$str2 = "\t\tmy <b>dick</b> is big ...  ";
$str3 = 'your little dick';
$str4 = 1743.32456;

//chr - Генерирует односимвольную строку по заданному числу

$str = chr(240) . chr(159) . chr(144) . chr(152);
echo $str . PHP_EOL . PHP_EOL;

//convert_uudecode - Декодирует строку из формата uuencode в обычный вид

echo convert_uudecode("+22!L;W9E(%!(4\"$`\n`") . PHP_EOL . PHP_EOL;

//convert_uuencode - Кодирует строку в формат uuencode

echo convert_uuencode($str3) . PHP_EOL . PHP_EOL;

//count_chars - Возвращает информацию о символах, входящих в строку

foreach (count_chars($str2, 1) as $i => $val) {
    echo '"', chr($i), '" ', $val . ' раз(а).' . PHP_EOL;
}
echo PHP_EOL;

//crypt - Необратимое хеширование строки

//$hash = crypt(rand);
//echo $hash;

//explode - Разбивает строку с помощью разделителя

print_r(explode(' ', $str1, 3));

//htmlentities - Преобразует все возможные символы в соответствующие HTML-сущности

echo htmlentities($str2) . PHP_EOL;
echo htmlentities($str2, ENT_QUOTES) . PHP_EOL . PHP_EOL;

//htmlspecialchars - Преобразует специальные символы в HTML-сущности

$str = htmlspecialchars("<a href='test'>Test</a>", ENT_QUOTES);
echo $str . PHP_EOL . PHP_EOL;

//htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы

$str = "<p>this -&gt; &quot;</p>\n";
echo htmlspecialchars_decode($str) . PHP_EOL . PHP_EOL;

//implode (join) — Объединяет элементы массива в строку

$arr = ['name', 'email', 'phone'];
$str = implode(", ", $arr);
echo $str . PHP_EOL;
$str = join(", ", $arr);
echo $str . PHP_EOL . PHP_EOL;

//lcfirst — Преобразует первый символ строки в нижний регистр

$str = lcfirst($str1);
echo $str . PHP_EOL . PHP_EOL;

//levenshtein — Вычисляет расстояние Левенштейна между двумя строками

$str = levenshtein($str1, $str3);
echo $str . PHP_EOL . PHP_EOL;

//ltrim — Удаляет пробелы (или другие символы) из начала строки
//rtrim — Удаляет пробелы (или другие символы) из конца строки
//trim — Удаляет пробелы (или другие символы) из начала и конца строки

$trimmed = ltrim($str2, " \t.");
print_r($str2);
echo PHP_EOL;
print_r($trimmed);
echo PHP_EOL;
$trimmed = rtrim($str2, " .");
print_r($trimmed);
echo PHP_EOL . PHP_EOL;

//md5 — Возвращает MD5-хеш строки
//sha1 — Возвращает SHA1-хеш строки

if (sha1($str1) === 'c5bb3038bfcf2e3b18df72ed4ed2eda205ff13f4') {
    echo "hi, man" . PHP_EOL;
}

if (md5($str1) === 'ab902127138558f5caa898e0be30aeb6') {
    echo "hi, man again" . PHP_EOL . PHP_EOL;
}

//metaphone — Возвращает ключ metaphone для строки

print_r(metaphone($str1));
echo PHP_EOL . PHP_EOL;

//money_format — Форматирует число как денежную величину
//setlocale — Устанавливает настройки локали


$loc_de = setlocale(LC_ALL, 'de_DE@euro', 'de_DE', 'de', 'ge');
echo "On this system, the German locale has the name $loc_de" . PHP_EOL; //not work

setlocale(LC_MONETARY, 'en_US');
echo money_format('%i', $str4) . PHP_EOL . PHP_EOL;

//number_format — Форматирует число с разделением групп

$en = number_format($str4);
$en2 = number_format($str4, 2, ',', '');
$fr = number_format($str4, 2, '.', ' ');
echo $en . PHP_EOL . $en2 . PHP_EOL . $fr . PHP_EOL . PHP_EOL;

//nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки

echo nl2br("Hello!\r\nThis is my HTML-doc", false) . PHP_EOL . PHP_EOL;

//parse_str — Разбирает строку в переменные

$str = "first=value&arr[]=foo+bar&arr[]=baz";
parse_str($str, $output);
print_r($output);
echo $output['first'] . PHP_EOL;
echo $output['arr'][0] . PHP_EOL;
echo $output['arr'][1] . PHP_EOL . PHP_EOL;

//print - выводит строку, printf — Выводит отформатированную строку

print "this is {$output['first']} !" . PHP_EOL;
print $str1 . PHP_EOL;

printf("[%20s]\n", $str1);
printf("[%-20s]\n", $str1);
printf("[%'#20s]\n", $str1);

//similar_text — Вычисляет степень похожести двух строк

$sim = similar_text($str1, $str3, $perc);
echo "similarity: $sim ($perc %)" . PHP_EOL;
$sim = similar_text('barfoob', 'bafoobar', $perc);
echo "similarity: $sim ($perc %)" . PHP_EOL . PHP_EOL;

//sprintf — Возвращает отформатированную строку

$format = '%s, where is my money %f';
echo sprintf($format, $str1, $str4) . PHP_EOL . PHP_EOL;

//str_pad — Дополняет строку другой строкой до заданной длины

echo str_pad($str1, 20, "-=", STR_PAD_BOTH) . PHP_EOL;
echo str_pad($str1, 30, $str3, STR_PAD_RIGHT) . PHP_EOL . PHP_EOL;

//str_repeat — Возвращает повторяющуюся строку

echo str_repeat("-=", 10) . PHP_EOL . PHP_EOL;

//str_replace — Заменяет все вхождения строки поиска на строку замены
//str_ireplace — Регистронезависимый вариант функции str_replace()

$phrase = "You should eat fruits, vegetables, and fiber every day.";
$healthy = ["fruits", "vegetables", "fiber"];
$yummy = ["pizza", "beer", "ice cream"];
$str = str_replace($healthy, $yummy, $phrase);
echo $str . PHP_EOL;

$str = str_replace('little', 'small', $str3);
echo $str . PHP_EOL;

$str = "Строка 1\nСтрока 2\rСтрока 3\r\nСтрока 4\n";
$order = ["\r\n", "\n", "\r"];
$replace = '<br />';
echo $str = str_replace($order, $replace, $str) . PHP_EOL . PHP_EOL;

//str_shuffle — Переставляет символы в строке случайным образом

echo $str = str_shuffle($str1) . PHP_EOL . PHP_EOL;

//str_split — Преобразует строку в массив

$arr1 = str_split($str1);
print_r($arr1);
echo PHP_EOL . PHP_EOL;

//str_word_count — Возвращает информацию о словах, входящих в строку

print_r(str_word_count($str1, 1));
echo PHP_EOL . PHP_EOL;

//strcasecmp — Бинарно-безопасное сравнение строк без учета регистра
//strcmp — Бинарно-безопасное сравнение строк

$str = "helLo mY bROth";
if (strcasecmp($str1, $str) === 0) {
    echo 'str equals str1 when comparing case insensitive' . PHP_EOL;
}
if (strcmp($str1, $str) !== 0) {
    echo 'str is not equal to str1 when case-sensitive comparison' . PHP_EOL . PHP_EOL;
}

//strstr — Находит первое вхождение подстроки
//stristr — Регистронезависимый вариант функции

$str = strstr($str1, 'my');
echo $str . PHP_EOL;
$str = strstr($str1, 'my', true);
echo $str . PHP_EOL . PHP_EOL;

//strip_tags — Удаляет теги HTML и PHP из строки

echo strip_tags($str2) . PHP_EOL;
echo strip_tags($str2, '<b>') . PHP_EOL . PHP_EOL;

//stripos — Возвращает позицию первого вхождения подстроки без учета регистра
//strpos — Возвращает позицию первого вхождения подстроки
//strripos — Возвращает позицию последнего вхождения подстроки без учета регистра
//strrpos — Возвращает позицию последнего вхождения подстроки в строке

$findMe1 = 'lL';
$findMe2 = 'll';
$pos1 = stripos($str1, $findMe1);
$pos2 = stripos($str, $findMe1);
$pos3 = strpos($str1, $findMe2);

if ($pos2 === false) {
    echo "Строка '$findMe1' не найдена в строке '$str'" . PHP_EOL;
}

if ($pos1 !== false) {
    echo "Нашел '$findMe1' в '$str1' в позиции $pos1" . PHP_EOL;
}

if ($pos3 === false) {
    echo "Строка '$findMe2' не найдена в строке '$str1'" . PHP_EOL;
} else {
    echo "Строка '$findMe2' найдена в строке '$str1'";
    echo " в позиции $pos3" . PHP_EOL;
}

$pos = strpos($str1, 'o', 5);
echo $pos . PHP_EOL . PHP_EOL;

//strlen — Возвращает длину строки

echo strlen($str1) . PHP_EOL;
echo strlen($str2) . PHP_EOL;
echo strlen($str3) . PHP_EOL;
echo $str1[strlen($str1) - 1] . PHP_EOL . PHP_EOL;

//strpbrk — Ищет в строке любой символ из заданного набора

echo strpbrk($str1, 'my') . PHP_EOL;
echo strpbrk($str1, 'h') . PHP_EOL . PHP_EOL;

//strrchr — Находит последнее вхождение символа в строке

$text = "Line 1\nLine 2\nLine 3";
$last = substr(strrchr($text, 10), 1);
echo $last . PHP_EOL . PHP_EOL;

//strrev — Переворачивает строку задом наперед

echo strrev($str1) . PHP_EOL . PHP_EOL;

//strtolower — Преобразует строку в нижний регистр
//strtoupper — Преобразует строку в верхний регистр

echo strtoupper($str1) . PHP_EOL;
echo $str1 = strtolower($str1);
echo PHP_EOL . PHP_EOL;

//substr_count — Возвращает число вхождений подстроки

echo strlen($str1) . PHP_EOL;
echo substr_count($str1, 'h') . PHP_EOL . PHP_EOL;

//substr_replace — Заменяет часть строки

echo "original: $str3" . PHP_EOL;
echo substr_replace($str3, 'Dima, ', 0, 0) . PHP_EOL;
echo substr_replace($str3, 'small', 5, -5) . PHP_EOL;
echo substr_replace($str3, 'small', -11, -5) . PHP_EOL;
echo substr_replace($str3, '', 4, -5) . PHP_EOL . PHP_EOL;

//substr — Возвращает подстроку

echo $str = substr($str1, -6) . PHP_EOL;
echo $str = substr($str1, 5, 3) . PHP_EOL;
echo $str = substr($str1, -9, 6) . PHP_EOL . PHP_EOL;

//ucfirst — Преобразует первый символ строки в верхний регистр
//ucwords — Преобразует в верхний регистр первый символ каждого слова в строке

echo ucfirst($str1) . PHP_EOL;
echo ucwords($str1) . PHP_EOL;
echo $str1 = ucfirst(strtolower($str1));
echo PHP_EOL . PHP_EOL;

//vprintf — Выводит отформатированную строку
//vsprintf — Возвращает отформатированную строку

vprintf("%04d-%02d-%02d", explode('-', '2019-5-14'));
echo PHP_EOL;
print vsprintf("%04d-%02d-%02d", explode('-', '2019-5-01'));
echo PHP_EOL . PHP_EOL;

//wordwrap — Переносит строку по указанному количеству символов

$str = wordwrap($str1, 5, "<br />\n");
echo $str . PHP_EOL . PHP_EOL;
$str = wordwrap($str1, 3, "\n", true);
echo $str . PHP_EOL . PHP_EOL;

//preg_match — Выполняет проверку на соответствие регулярному выражению

preg_match('/(a)(b)*(c)/', 'ac', $str);
var_dump($str);
