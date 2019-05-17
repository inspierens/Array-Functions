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

//Task 5
numbTask(5);

$color = [4 => 'white', 6 => 'green', 11 => 'red'];

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

$arr = ['Sophia' => '31', 'Jacob' => '41', 'William' => '39', 'Ramesh' => '40'];

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
    0,
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

foreach (range(200, 250) as $val) {
    if ($val % 4 == 0) {
        echo $val . ',';
    }
}

//Task 14
numbTask(14);

$arr = ['abcd', 'abc', 'de', 'hjjj', 'g', 'wer'];
$lenMax = strlen($arr[0]);
$lenMin = strlen($arr[0]);

foreach ($arr as $val) {
    if ($lenMax <= strlen($val)) {
        $lenMax = strlen($val);
    }
    if ($lenMin >= strlen($val)) {
        $lenMin = strlen($val);
    }
}
echo 'The shortest array length is ' . $lenMin . '. The longest array length is ' . $lenMax . '.' . $sep;

//Task 15
numbTask(15);

for ($i = 0; $i < 10; $i++) {
    echo rand(11, 20) . ' ';
}
echo $sep;

//Task 16
numbTask(16);

$lenMax = strlen(key($ceu));

foreach ($ceu as $key => $val) {
    if ($lenMax <= strlen($key)) {
        $lenMax = strlen($key);
    }
}
echo 'The biggest key in the array is ' . $lenMax . '.' . $sep;

//Task 17
numbTask(17);

/**
 * @param $arr
 *
 * @return mixed
 */
function returnMinNumb($arr)
{
    $minNumb = max($arr);

    foreach ($arr as $val) {
        if (($minNumb >= $val) and ($val != 0)) {
            $minNumb = $val;
        }
    }

    return $minNumb;
}

echo returnMinNumb($temperatures) . $sep;

//Task 18
numbTask(18);

/**
 * @param $numb
 * @param $sep
 * @param $str
 *
 * @return float
 */
function numbFormat($numb, $sep, $str)
{
    $number = round($numb, $sep, PHP_ROUND_HALF_DOWN);

    return $number;
}

echo numbFormat(1.155, 2, '.') . $sep;
echo numbFormat(100.25781, 4, '.') . $sep;
echo numbFormat(-2.9636, 3, '.') . $sep;

//Task 19
numbTask(19);

$color = [
    'color'   => ['a' => 'Red', 'b' => 'Green', 'c' => 'White'],
    'numbers' => [1, 2, 3, 4, 5, 6],
    'holes'   => ['First', 5 => 'Second', 'Third'],
];

echo $color['holes'][5] . ' ' . $color['color']['a'] . $sep;

//Task 20 ?
numbTask(20);

$ar1 = [3, 2, 4, 1];

/**
 * @param $leftItem
 * @param $rightItem
 *
 * @return bool
 */
function sortArray($leftItem, $rightItem)
{
    $order = [1, 3, 2, 4];
    $flipped = array_flip($order);
    $leftPos = $flipped[$leftItem];
    $rightPos = $flipped[$rightItem];

    return $leftPos >= $rightPos;
}

usort($ar1, 'sortArray');
print_r($ar1);

//Task 21 ?
numbTask(21);

/**
 * @param $x
 * @param $y
 *
 * @return int
 */
function sortSubnet($x, $y)
{
    $arrX = explode('.', $x);
    $arrY = explode('.', $y);

    foreach (range(0, 4) as $i) {
        if ($arrX[$i] < $arrY[$i]) {
            return -1;
        } elseif ($arrX[$i] > $arrY[$i]) {
            return 1;
        }
    }

    return -1;
}

$subnetList =
    [
        '192.16.122.1',
        '192.15.188.2',
        '192.14.122.7',
        '168.16.122.32',
        '192.16.147.5',
        '172.16.122.2',
        '192.16.122.143',
    ];

usort($subnetList, 'sortSubnet');
print_r($subnetList);
echo $sep;

//Task 22
numbTask(22);

$arraySort = [
    ['username' => 'alex', 'pageId' => 321, 'status' => 'online'],
    ['username' => 'den', 'pageId' => 432, 'status' => 'offline'],
    ['username' => 'dima', 'pageId' => 301, 'status' => 'online'],
    ['username' => 'vitalik', 'pageId' => 3, 'status' => 'deleted'],
    ['username' => 'valik', 'pageId' => 3, 'status' => 'offline'],
];

$pageId = array_column($arraySort, 'pageId');
$username = array_column($arraySort, 'username');
array_multisort($pageId, SORT_DESC, $username, SORT_ASC, $arraySort);
print_r($arraySort);
echo $sep;

//Task 23
numbTask(23);

$status = array_column($arraySort, 'status');
array_multisort($status, SORT_DESC, $arraySort);
print_r($arraySort);
echo $sep;

//Task 24
numbTask(24);

$arrIMG = ['IMG0.png', 'img12.png', 'img10.png', 'img2.png', 'img1.png', 'IMG3.png'];

natcasesort($arrIMG);
print_r($arrIMG);
echo $sep;

//Task 25
numbTask(25);

$arrLetters = ['v', 'a', 'd', 'c', 'b'];

/**
 * @param $arr
 *
 * @return mixed
 */
function sortLetters($arr)
{
    sort($arr, SORT_STRING);

    return $arr;
}

print_r(sortLetters($arrLetters));

//Task 26
numbTask(26);

$arrForShuffle = ['a' => 'alla', 'b' => 'big', 'c' => 'cell', 'm' => 'more', 'v' => 'vendetta'];

/**
 * @param $arr
 *
 * @return array
 */
function shuffleArr($arr)
{
    $arrKeys = array_keys($arr);
    $arrShuffle = [];
    shuffle($arrKeys);

    foreach ($arrKeys as $key) {
        $arrShuffle[$key] = $arr[$key];
    }

    return $arrShuffle;
}

print_r(shuffleArr($arrForShuffle));

//Task 27
numbTask(27);

/**
 *
 */
function generatePass()
{
    $arr = array_merge(range('A', 'Z'), range('a', 'z'), range(0, 9));
    $pass = '';
    shuffle($arr);
    for ($i = 0; $i < 8; $i++) {
        $pass .= $arr[$i];
    }

    return $pass;
}

echo generatePass() . $sep;

//Task 28
numbTask(28);

$arr = [5, 7, 32, 4, 7, 56, 4, 3, 2];

rsort($arr);
print_r($arr);

//Task 29
numbTask(29);

$string = 'bk';
$arr = range($string[0], $string[1]);
print_r($arr);

//Task 30
numbTask(30);

$length = 8;
$lettersRange = [];
$letters = range('A', 'z');

for ($i = 0; $i < $length; $i++) {
    $lettersRange[$i] = $letters[$i];
}

print_r($lettersRange);

//Task 31
numbTask(31);

$arr = [43, 65, 34, 23, 45, 666, 54, 34, 2];
$maxValue = min($arr);
$keyMaxValue = 0;

foreach ($arr as $key => $val) {
    if ($maxValue < $val) {
        $maxValue = $val;
        $keyMaxValue = $key;
    }
}

echo $keyMaxValue;

//Task 32
numbTask(32);

echo 'proceeded to the next task';

//Task 33
numbTask(33);

$arrSearch = ['a' => 'alla', 'b' => 'big', 'c' => 'cell', 'm' => 'more', 'v' => 'vendetta'];

/**
 * @param $val
 * @param $arr
 *
 * @return string
 */
function searchValue($val, $arr)
{
    $key = array_search($val, $arr);

    return $key . ': ' . $arr[$key];
}

echo searchValue('big', $arrSearch);

//Task 34
numbTask(34);

$arrSearch = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta'];

asort($arrSearch);
print_r($arrSearch);

//Task 35
numbTask(35);

$arr = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta'];

/**
 * @param $item1
 * @param $key
 * @param $prefix
 */
function trimElements(&$item1, $key, $prefix)
{
    global $sep;
    $item1 = $prefix . ': ' . $item1;
    echo $key . '. ' . $item1 . $sep;
}

array_walk($arr, 'trimElements', 'name=');

//Task 36
numbTask(36);

$arr = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta'];

print_r(array_map("strtoupper", $arr));
print_r(array_map("strtolower", $arr));

//Task 37
numbTask(37);

$arr = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta', 5, 'Cell', 'Cell', 2];

$countArr = array_count_values($arr);
$countMax = max($countArr);

foreach ($countArr as $key => $item) {
    if ($item === $countMax) {
        echo $key . ' встречается ' . $countMax . ' раз' . $sep;
    }
}

//Task 38
numbTask(38);

/**
 * @param $elem
 * @param $n
 *
 * @return array
 */
function multiDimensional($elem, $n)
{
    for ($i = 0; $i < $n; $i++) {
        $oneArr = range(1, $elem);
        $arr[] = $oneArr;
    }

    return $arr;
}

print_r(multiDimensional(3, 4));

//Task 39
numbTask(39);

$arr = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta', 5, 'Cell', 'Cell', 2];

print_r(array_unique($arr));

//Task 40
numbTask(40);

sort($arr);
print_r($arr);

//Task 41
numbTask(41);

$arrEmail = [];
$arr = [
    'alla@mail.ru',
    'alla@gmail.com',
    'vendetta@gmail.com',
    'Cell@mail.ru',
    'Cell@mail.ru',
    'more@mail.ru',
    'vendetta@gmail.com',
    'Cell@mail.ru',
    'Cell@gmail.com',
];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr); $j++) {
        if (($arr[$i] === $arr[$j]) and ($i !== $j)) {
            $arrEmail[] = $arr[$i];
        }
    }
}

print_r(array_unique($arrEmail));

//Task 42
numbTask(42);

$arr = [
    [3, 4, 6, 7],
    [3, 6, 6, 8],
    [2, 8, 5, 2],
];

foreach ($arr as $data) {
    foreach ($data as $value) {
        $unique[] = $value;
    }
}

$unique = array_unique($unique);
print_r($unique); // or array_values($unique)

//Task 43
numbTask(43);

$arr1 = [3, 4, 6, 7, 6, 4, 4, 5];
$arr2 = [3, 6, 6, 8, 1, 9, 5, 9];

$arr1 = array_unique($arr1);
$arr2 = array_unique($arr2);
$arrMerge = array_merge($arr1, $arr2);

print_r($arrMerge);

//Task 44
numbTask(44);

$arr = [3, 4, 6, 7, 6, 4, 4, 5];

/**
 * @param $arr
 * @param $record
 *
 * @return mixed
 */
function findDuplicate($arr, $record)
{
    foreach ($arr as $key => $value) {
        if ($record === $value) {
            unset($arr[$key]);
        }
    }

    return $arr;
}

$arr = findDuplicate($arr, 4);
print_r($arr);

//Task 45
numbTask(45);

$arr1 = [3, 4, 6, 7, 6, 4, 4, 5];
$arr2 = [3, 6, 6, 8, 1, 9, 5, 9];

$result = array_diff($arr1, $arr2);
print_r($result);

//Task 45
numbTask(45);

$arr1 = [3, 4, 6, 7, 6, 4, 4, 5];
$arr2 = [3, 6, 6, 8, 1, 9, 5, 9];

/**
 * @param $a
 * @param $b
 *
 * @return int
 */
function difference($a, $b)
{
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0;
    }
}

print_r(array_udiff($arr1, $arr2, 'difference'));

//Task 46
numbTask(46);

$arr1 = ['alla', '5', 'Cell', 'more', 'vendetta', 5, 'Cell', 'Cell', 2];
$arr2 = ['alla', '5', 'Cell', 'more', 'vendetta', 'Cell', 'Cell'];

/**
 * @param $arr
 *
 * @return string
 */
function checkString($arr)
{
    foreach ($arr as $value) {
        if (!is_string($value)) {
            return 'false';
            break;
        }
    }

    return 'true';
}

echo checkString($arr1) . $sep;
echo checkString($arr2) . $sep;


//Task 47
numbTask(47);

$arr = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta', 5, 'Cell', 'Cell', 2];

/**
 * @param $arr
 *
 * @return array
 */
function firstElement($arr)
{
    list($key) = array_keys($arr);
    $first = [$key => $arr[$key]];

    return $first;
}

print_r(firstElement($arr));

//Task 48
numbTask(48);

$arr1 = ['alla', '5', 'Cell', 'more', 'vendetta', 5, 'Cell', 'Cell', 2];
$arr2 = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta', 5, 'Cell', 'Cell', 2];

/**
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function mergeArr($arr1, $arr2)
{
    return array_merge($arr1, $arr2);

}

print_r(mergeArr($arr1, $arr2));

//Task 49
numbTask(49);

$arr1 = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'];
$arr2 = ['c2', 'c4'];

$arr1 = array_flip($arr1);
$anotherArr = array_intersect($arr1, $arr2);
$anotherArr = array_flip($anotherArr);

print_r($anotherArr);

//Task 50
numbTask(50);

$arr1 = ['a' => 'alla', 'b' => '5', 'c' => 'Cell', 'm' => 'more', 'v' => 'vendetta', 5, 'Cell', 'Cell'];
$arr2 = ['alla', '5', 'Cell', 'more', 'vendetta', 'Cell', 'Cell', 2];

$last1 = array_pop($arr1);
$last2 = $arr2[count($arr2) - 1];
echo $last1 . $sep;
echo $last2 . $sep;

//Task 51
numbTask(51);

$arr1 = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'];
$arr2 = ['c2', 'c4'];

$arr1 = array_flip($arr1);
$anotherArr = array_diff($arr1, $arr2);
$anotherArr = array_flip($anotherArr);

print_r($anotherArr);

//Task 52
numbTask(52);

$arr = [
    [3, 4],
    [3, 6],
    [5, 8],
    [2, 1],
    [6, 8],
    [3, 9],
    [2, 5],
    [1, 8],
];

/**
 * @param $arr
 * @param $val1
 * @param $val2
 *
 * @return array
 */
function filterValue($arr, $val1, $val2)
{
    $filterArr = [];

    foreach ($arr as $key => $data) {
        if (($val1 <= $key) and ($val2 >= $key)) {
            $filterArr[$key] = $data;
        }
    }

    return $filterArr;
}

print_r(filterValue($arr, 2, 5));

//Task 53
numbTask(53);

$arr = [5, 3, 6, 7, 2, 3, 2, 1, 6, 2];

/**
 * @param $val
 *
 * @return int
 */
function deleteValue($val)
{
    if ($val === 2) {
        unset($val);
    } else {
        return $val;
    }
}

print_r(array_filter($arr, "deleteValue"));

//Task 54
numbTask(54);

$arr = [5, ' ', 6, ' ', ' ', ' ', 1, ' ', ' ', 2];

foreach ($arr as $key => $value) {
    if ($value == ' ') {
        unset($arr[$key]);
    }
}

print_r($arr);

//Task 55
numbTask(55);

/**
 * @param $str
 *
 * @return array
 */
function createArr($str)
{
    $arr = str_split($str);

    foreach ($arr as $key => $value) {
        if ($value == ' ') {
            unset($arr[$key]);
        }
    }

    return $arr;

}

print_r(createArr('sdfgsg g dfgfd gdfh bvdfsjbh shbdf lshjbdfhb dfhb'));

//Task 56
numbTask(56);

$arrCreate = [];

foreach (range(0, 3) as $i => $value) {
    foreach (range(0, 3) as $j => $val) {
        $arrCreate[$i][$j] = rand(1, 10);
    }
}

print_r($arrCreate);

//Task 57
numbTask(57);

$arr1 = [[5, 6, 4, 3], [2, 4, 7, 6], [5, 4, 2, 1]];
$arr2 = [[5, 2, 3, 3], [5, 4, 6, 6], [5, 4, 5, 3]];

/**
 * @param $arr1
 * @param $arr2
 *
 * @return array
 */
function comparesArr($arr1, $arr2)
{
    $compareArr = [];

    foreach ($arr1 as $key => $item) {
        $compareArr[] = array_diff($item, $arr2[$key]);
    }

    return $compareArr;
}

print_r(comparesArr($arr1, $arr2));

//Task 58
numbTask(58);

$arr1 = ['x', 'y', 'y'];
$arr2 = [10, 20, 30];

$combineArr = array_combine($arr1, $arr2);
print_r($combineArr);

//Task 59
numbTask(59);

$i = 2;
$arrRan = array_flip(range(20, 25));

foreach ($arrRan as $key => $item) {
    $arrRan[$key] = $i;
    $i++;
}
print_r($arrRan);