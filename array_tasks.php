<?php
/**
 * @param $num
 */
function numbTask($num)
{
    echo "<hr>" . $num . "</br>" . PHP_EOL;
}

$sep = "<br>" . PHP_EOL;

//Task 1
numbTask(1);

$color = ['white', 'green', 'red', 'blue', 'black'];

echo 'The memory of that scene for me is like a frame of film forever frozen at that moment: the ' .
    $color[2] . ' carpet, the ' . $color[1] . ' lawn, the ' . $color[0] . ' house, the leaden sky. ' .
    'The new president and his first lady. - Richard M. Nixon';

//Task 2
numbTask(2);

$color = ['white', 'green', 'red'];
foreach ($color as $val) {
    echo $val . ', ';
}
echo $sep . $sep;
foreach ($color as $val) {
    echo '•' . $val . $sep;
}

//Task 3
numbTask(3);

$ceu = [
    "Italy"          => "Rome",
    "Luxembourg"     => "Luxembourg",
    "Belgium"        => "Brussels",
    "Denmark"        => "Copenhagen",
    "Finland"        => "Helsinki",
    "France"         => "Paris",
    "Slovakia"       => "Bratislava",
    "Slovenia"       => "Ljubljana",
    "Germany"        => "Berlin",
    "Greece"         => "Athens",
    "Ireland"        => "Dublin",
    "Netherlands"    => "Amsterdam",
    "Portugal"       => "Lisbon",
    "Spain"          => "Madrid",
    "Sweden"         => "Stockholm",
    "United Kingdom" => "London",
    "Cyprus"         => "Nicosia",
    "Lithuania"      => "Vilnius",
    "Czech Republic" => "Prague",
    "Estonia"        => "Tallin",
    "Hungary"        => "Budapest",
    "Latvia"         => "Riga",
    "Malta"          => "Valetta",
    "Austria"        => "Vienna",
    "Poland"         => "Warsaw",
];

foreach ($ceu as $country => $capital) {
    echo 'The capital of ' . $country . ' is ' . $capital . $sep;
}

//Task 4
numbTask(4);

$x = [1, 2, 3, 4, 5];

array_splice($x, 3, 1);
print_r($x);

echo $sep;

$x = [1, 2, 3, 4, 5];

unset($x[3]);
$x = array_values($x);
print_r($x);

//Task 5
numbTask(5);

$color = [4 => 'white', 6 => 'green', 11 => 'red'];

echo $color[4] . $sep;
echo array_shift($color) . $sep;

//Task 6
numbTask(6);

$json = '{
    "Title": "The Cuckoos Calling",
    "Author": "Robert Galbraith",
    "Detail": {
        "Publisher": "Little Brown"
    }
}';

$json = json_decode($json, true);
foreach ($json as $key => $val) {
    if (is_array($val)) {
        foreach ($val as $k => $v) {
            echo $k . ': ' . $v . $sep;
        }
    } else {
        echo $key . ': ' . $val . $sep;
    }
}

//Task 7
numbTask(7);

$arr = [1, 2, 3, 4, 5];

array_splice($arr, 3, 1, '$');
print_r($arr);

//Task 8
numbTask(8);

$arr = ["Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40"];

asort($arr);
print_r($arr);
echo $sep;
arsort($arr);
print_r($arr);
echo $sep;
ksort($arr);
print_r($arr);
echo $sep;
krsort($arr);
print_r($arr);
echo $sep;

//Task 9
numbTask(9);

$temperatures = [
    78,
    60,
    62,
    68,
    71,
    68,
    73,
    85,
    66,
    64,
    76,
    63,
    75,
    76,
    73,
    68,
    62,
    73,
    72,
    65,
    74,
    62,
    62,
    65,
    64,
    68,
    73,
    75,
    79,
    73,
];

$lowest = 'List of seven lowest temperatures : ';
$highest = 'List of seven highest temperatures : ';

sort($temperatures);
$temp = array_reverse($temperatures);


for ($i = 0; $i <= 7; $i++) {
    $lowest .= $temperatures[$i] . ', ';
    $highest .= $temp[$i] . ', ';
}

echo 'Average Temperature is : ' . round((array_sum($temperatures) / count($temperatures)), 2) . $sep;
echo $lowest . $sep;
echo $highest . $sep;

//Task 10
numbTask(10);

echo 'proceeded to the next task';

//Task 11
numbTask(11);

$array1 = [[77, 87], [23, 45]];
$array2 = ["w3resource", "com"];

for ($i = 0; $i <= count($array1) - 1; $i++) {
    print_r(array_merge((array)$array2[$i], $array1[$i])) . $sep;
}

//Task 12
numbTask(12);

$Color = ['A' => 'Blue', 'B' => 'Green', 'c' => 'Red'];

echo 'Values are in lower case.' . $sep;
print_r(array_map('strtolower', $Color));
echo $sep;
echo 'Values are in upper case.' . $sep;
print_r(array_map('strtoupper', $Color));
echo $sep;

//Task 13
numbTask(13);

foreach (range(200,250) as $val) {
    if ($val%4 == 0) {
        echo $val. ',';
    }
}

//Task 14
numbTask(14);

$arr = ["abcd","abc","de","hjjj","g","wer"];
$lenMax = strlen($arr[0]);
$lenMin = strlen($arr[0]);

foreach ($arr as $val) {
    if ($lenMax<=strlen($val)) {
        $lenMax = strlen($val);
    }
    if ($lenMin>=strlen($val)) {
        $lenMin = strlen($val);
    }
}
echo 'The shortest array length is ' . $lenMin . '. The longest array length is ' . $lenMax . '.' . $sep;

//Task 15
numbTask(15);

for ($i=0;$i<10;$i++) {
    echo rand(11,20) . ' ';
}
echo $sep;

//Task 16
numbTask(16);

$lenMax = strlen(key($ceu));

foreach ($ceu as $key => $val) {
    if ($lenMax<=strlen($key)) {
        $lenMax = strlen($key);
    }
}
echo 'The biggest key in the array is ' . $lenMax . '.' . $sep;

//Task 17
numbTask(17);