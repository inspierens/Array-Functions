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

$str = 'hello bro';

echo strtoupper($str) . $sep;
echo strtolower($str) . $sep;
echo ucfirst($str) . $sep;
echo lcfirst($str) . $sep;

//Task 2
numbTask(2);

$str = '082307';
echo chunk_split($str, 2, ':') . $sep;

//Task 3
numbTask(3);

$str = 'The quick brown fox jumps over the lazy dog.';
$find = 'jumps';
if (strstr($str, $find) !== false) {
    echo $find . ' present in the array';
} else {
    echo $find . ' not found';
}

//Task 4
numbTask(4);

$val = 45;

echo $str = (string)$val;

//Task 5
numbTask(5);

$str = 'www.example.com/public_html/index.php';
$last = substr(strrchr($str, '/'), 1);
echo $last;

//Task 6
numbTask(6);

$str = 'rayy@example.com';
echo strstr($str, '@', true);

//Task 7
numbTask(7);

$str = 'rayy@example.com';

echo substr(strstr($str, '.'), 1);

//Task 8
numbTask(8);

$val1 = 65.45;
$val2 = 104.35;

echo number_format(($sum = $val1 + $val2), 2);

//Task 9
numbTask(9);

$str = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
$pass = substr(str_shuffle($str), 0, 8);

echo $pass;

//Task 10
numbTask(10);

$str = 'the quick brown fox jumps over the lazy dog.';

echo substr_replace($str, 'That', 0, 3);

//Task 11
numbTask(11);

$str1 = 'football';
$str2 = 'footboll';

for ($i = 0; $i < strlen($str1); $i++) {
    if ($str1[$i] !== $str2[$i]) {
        echo 'First difference between two strings at position ' . $i . ': "' . $str1[$i] . '" vs "' . $str2[$i] . '"';
    }
}

//Task 12
numbTask(12);

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arr = explode("\n", $str);
print_r($arr);

//Task 13
numbTask(13);

$str = 'https://www.w3resource.com/index.php';

echo strstr(substr(strrchr($str, '/'), 1), '.', true);

//Task 14
numbTask(14);

$str = 'z';
echo substr(++$str, 0, 1);

//Task 15
numbTask(15);

$str = 'rayy@example.com';
echo substr(strstr($str, '@'), 1);

//Task 16
numbTask(16);

$str = 'rayy@example.com';
echo bin2hex($str);

//Task 17
numbTask(17);

$str = 'The brown fox';
$insert = 'quick';

echo substr_replace($str, $insert . ' ', 4, 0) . $sep;

//Task 18
numbTask(18);

$str = 'The quick brown fox';
$word = explode(' ', $str);
echo $word[0];

//Task 19
numbTask(19);

$str = '000547023.24';

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($str, '0') === 0) {
        $str = substr($str, 1);
    }
}

echo $str;

//Task 20
numbTask(20);

$str = 'The quick brown fox jumps over the lazy dog';
$remove = 'fox';

echo $str = str_replace($remove . ' ', '', $str);

//Task 21
numbTask(21);

$str = 'The quick brown fox jumps over the lazy dog///';
$find = '/';

echo $str = str_replace($find, '', $str);

//Task 22
numbTask(22);

$str = 'http://www.example.com/5478631';

echo $last = substr(strrchr($str, '/'), 1);

//Task 23
numbTask(23);

$str = '\"\1+2/3*2:2-3/4*3';
$characters = '\"+/*:-';

for ($i = 0; $i < strlen($str); $i++) {
    for ($j = 0; $j < strlen($characters); $j++) {
        if ($str[$i] == $characters[$j]) {
            $str[$i] = ' ';
        }
    }
}

echo $str;

//Task 24
numbTask(24);

$str = 'The quick brown fox jumps over the lazy dog';
$arr = explode(" ", $str);

for ($i = 0; $i < 5; $i++) {
    echo $arr[$i] . ' ';
}

//Task 25
numbTask(25);

$str = '2,543.12';
$find = ',';

echo $str = str_replace($find, '', $str);

//Task 26
numbTask(26);

foreach (range('a', 'z') as $char) {
    echo $char;
}
