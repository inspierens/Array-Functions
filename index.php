<?php

$mainData = [1,7,4,3];
$someData = [
    ['x' => 1, 'y' => 2],
    ['x' => 5, 'y' => 7],
    ['x' => 6, 'y' => 4],
];

//array_column

print_r(array_column($someData, 'x'));


//array_map

function showMeArray($val)
{
    return("Элемент $val");
}

foreach ($someData as $data) {
    $newData = array_map("showMeArray", $data);
    print_r($newData);
}

print_r(array_map("showMeArray", $mainData));

//array_chunk

print_r(array_chunk($someData, 2));
print_r(array_chunk($someData, 2, true));

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

array_multisort($mainData, SORT_NUMERIC, SORT_DESC);
var_dump($mainData);
