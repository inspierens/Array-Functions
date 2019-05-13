<?php

$mainData = [1, 7, 4, 3];
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

$result = array_product($mainData) . PHP_EOL;
echo $result;

//array_replace

$result = array_replace($someData, $mainData);
print_r($result);

//array_reverse

$result = array_reverse($mainData); //not work
print_r($mainData);
$result = array_reverse($mainData, true);
print_r($result);
