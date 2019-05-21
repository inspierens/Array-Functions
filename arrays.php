<?php

$mainData = [1, 7, 4, 3];
$keyData = ['jet' => 3, 'mot' => 'fre', 'ret' => 32];
$someData = [
    ['x' => 1, 'y' => 2],
    ['x' => 5, 'y' => 7],
    ['x' => 6, 'y' => 4],
];

//array_column
$result = array_column($someData, 'x');
print_r($result);

//array_map

function showMeArray($val)
{
    return ("Элемент $val");
}

foreach ($someData as $data) {
    $newData = array_map("showMeArray", $data);
    print_r($newData);
}

$result = array_map("showMeArray", $mainData);
print_r($result);

//array_chunk

$result = array_chunk($someData, 2);
print_r($result);
$result = array_chunk($someData, 2, true);
print_r($result);

//array_merge

$result = array_merge($someData, $mainData);
print_r($result);

$beginning = 'foo';
$result = array_merge((array)$beginning, (array)$someData);
print_r($result);

//array_merge_recursive

$result = array_merge_recursive($someData, $mainData);
print_r($result);

//array_multisort

$result = array_multisort($mainData, SORT_NUMERIC, SORT_DESC);
var_dump($result);

//array_pad

$result = array_pad($mainData, 9, 0);
print_r($result);

//array_product

$result = array_product($mainData);
echo $result . PHP_EOL;

//array_replace

$result = array_replace($someData, $mainData);
print_r($result);

//array_reverse

$result = array_reverse($mainData); //not work
print_r($mainData);
$result = array_reverse($mainData, true);
print_r($result);

//array_search

$key = array_search(3, $mainData);
echo $key . PHP_EOL;

//array_slice

$result = array_slice($mainData, 2, -1);
print_r($result);
$result = array_slice($mainData, 2, -1, true);
print_r($result);

//array_splice

array_splice($mainData, 2, 0, 100);
var_dump($mainData);
array_splice($mainData, count($mainData), 0, [10, 100]); //array_push($mainData, 10, 20);
print_r($mainData);

//array_sum

echo array_sum($mainData) . PHP_EOL;

//array_unique

$result = array_unique($mainData);
print_r($result);

//array_unshift

array_unshift($mainData, 2, 3);
print_r($mainData);

//array_walk

function testAlter(&$item1, $key, $prefix)
{
    $item1 = "$prefix: $item1";
}

function testPrint($item2, $key)
{
    echo $key . '. ' . $item2 . PHP_EOL;
}

array_walk($keyData, 'testPrint');
array_walk($keyData, 'testAlter', 'value');
array_walk($keyData, 'testPrint');

//arsort asort rsort sort

arsort($mainData);
print_r($mainData);
asort($mainData);
print_r($mainData);
rsort($mainData);
print_r($mainData);
sort($mainData);
print_r($mainData);

//count

echo count($someData, COUNT_RECURSIVE) . PHP_EOL;
echo count($someData) . PHP_EOL;

//current pos

$result = current($mainData);
echo $result . PHP_EOL;
$result = next($mainData);
$result = current($mainData);
echo $result . PHP_EOL;
$result = end($mainData);
$result = current($mainData);
echo $result . PHP_EOL;
$result = prev($mainData);
$result = pos($mainData);
echo $result . PHP_EOL;

//each

$result = each($keyData);
print_r($result);

//extract

$mot = 5;
extract($keyData, EXTR_PREFIX_SAME, 'wddx');

echo "$jet, $mot, $ret \n";

//

if (array_key_exists('mot', $keyData)) {
    echo 'array contains an element "mot"' . PHP_EOL;
}

//in_array

if (in_array(100, $mainData)) {
    echo 'find 100' . PHP_EOL;
} else {
    echo 'nothing' . PHP_EOL;
}

//key

while ($nameArr = current($keyData)) {
    if ($nameArr == 'value: 32') {
        echo 'key = ' . key($keyData) . PHP_EOL;
    }
    next($keyData);
}

//krsort ksort

krsort($mainData);
print_r($mainData);
ksort($mainData);
print_r($mainData);

//list

list($assessment, , , , $year, $family) = $mainData;
echo "my assessment is $assessment, " .
    "my grandfather is $year years old, " .
    "my family consists of $family people.\n";

//natcasesort natsort

$keyData['mot'] = 'Value: 5';
natcasesort($keyData);
print_r($keyData);
natsort($keyData);
print_r($keyData);

//range

foreach (range(0, 100, 10) as $number) {
    echo $number . ' ';
}
echo "\n";

//is_array

$anyValue = 0;
echo (is_array($mainData) ? 'array' : 'not array') . PHP_EOL;
echo (is_array($anyValue) ? 'array' : 'not array') . PHP_EOL;

//explode

$data = "foo:*:1023:1000::/home/foo:/bin/sh";
list($user, $pass, $uid, $gid, $gecos, $home, $shell) = explode(":", $data);
echo $user . PHP_EOL;
$userData = explode(":", $data);
echo $userData[5] . PHP_EOL;

//implode

$commaSeparated = implode(",", $keyData);
echo $commaSeparated . PHP_EOL;

//preg_split str_split

$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);

$str = "Hello Friend";

$arr1 = str_split($str);
$arr2 = str_split($str, 3);

print_r($arr1);
print_r($arr2);

//unset

unset($mainData[7]);
print_r($mainData);

$a = [1, 2, 3, 4, 5];
$b = ["one", "two", "three", "four", "five"];
$c = ["uno", "dos", "tres", "cuatro", "cinco"];

$d = array_map(null, $a, $b, $c);
print_r($d);