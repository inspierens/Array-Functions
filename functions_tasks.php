<?php
/**
 * @param $num
 */
function numbTask($num)
{
    echo "<hr>" . $num . "</br>" . PHP_EOL;
}

define('SEP', "<br>" . PHP_EOL);

//Task 1
numbTask(1);

/**
 * @param $arg
 *
 * @return float|int
 */
function fuckTorial(int $arg) : int
{
    if ($arg > 0) {
        return $arg * fuckTorial($arg - 1);
    } else {
        return 1;
    }
}

echo fuckTorial(5);

//Task 2
numbTask(2);

/**
 * @param int $numb
 *
 * @return string
 */
function isPrime(int $numb):string
{
    if ($numb == 1) {
        return 'false';
    }

    for ($d = 2; $d * $d <= $numb; $d++) {
        if ($numb % $d == 0) {
            return 'false';
        }
    }

    return 'true';
}

echo isPrime(11);

//Task 3
numbTask(3);

/**
 * @param string $str
 *
 * @return string
 */
function reverseStr(string $str):string
{
    return strrev($str);
}

echo reverseStr('Hello');

//Task 4
numbTask(4);

/**
 * @param array $arr
 */
function sortArr(array &$arr)
{
    sort($arr);
}

$arr = [3, 6, 4, 2, 1, 5];
sortArr($arr);
print_r($arr);

//Task 5
numbTask(5);

/**
 * @param string $str
 *
 * @return string
 */
function loveRcase(string $str):string
{
    return strtolower($str);
}

$str = 'FDg dfk ewfFD SFdgdsj fhas';
echo loveRcase($str);

//Task 6
numbTask(6);


/**
 * @param string $str
 *
 * @return string
 */
function funckyWord(string $str = ''):string
{
    $str = str_replace(' ', '', $str);
    $str2 = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $str2 .= $str[$i];
    }
    if ($str == $str2) {
        return 'true';
    } else {
        return 'false';
    }
}

echo funckyWord('madam');
