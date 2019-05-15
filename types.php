<?php

$val1 = 5;
$val2 = '3fd';
$val3 = 'fd3';
$val4 = true;
$val5 = 4.3;
$val6 = NAN;
$val7 = [3, 2];
$val8 = false;
$val9 = null;
$val0 = '';

$val = (int)((0.1 + 0.7) * 10); // выводит int 7!
var_dump($val);
$val = (int)$val9; // int null - выводит int 0
var_dump($val);
$val = (int)$val6; // int NAN - выводит int 0
var_dump($val);
$val = (int)$val0; // int Infinity - выводит int 0
var_dump($val);
$val = (int)$val4; // int true - выводит int 1
var_dump($val);
$val = (int)$val5; // int 4.3 - выводит int 4
var_dump($val);
$val = (int)$val2; // int '3fd' - выводит int 3
var_dump($val);
$val = (int)$val3; // int 'fd3' - выводит int 0
var_dump($val);
$val = (int)$val7; // int [3, 2] - выводит int 1
var_dump($val);

$val = (string)$val1; // string 5 - выводит "5"
var_dump($val);
$val = (string)$val4; // string true - выводит "1"
var_dump($val);
$val = (string)$val8; // string false - выводит ""
var_dump($val);
$val = (string)$val9; // string null - выводит ""
var_dump($val);
$val = (string)$val6; // string NAN - выводит "NAN"
var_dump($val);
$val = (string)$val7; // string [3, 2] - выводит "Array"
var_dump($val);

$val = (boolean)$val1; // boolean 5 - выводит true
var_dump($val);
$val = (boolean)$val2; // boolean '3fd' - выводит true
var_dump($val);
$val = (boolean)$val5; // boolean 4.3 - выводит true
var_dump($val);
$val = (boolean)$val6; // boolean NAN - выводит true
var_dump($val);
$val = (boolean)$val7; // boolean [3, 2] - выводит true
var_dump($val);
$val = (boolean)$val9; // boolean null - выводит false
var_dump($val);
$val = (boolean)0; // boolean 0 - выводит false
var_dump($val);

$val = (array)$val1; // array 5 - выводит arr[int 5]
var_dump($val);
$val = (array)$val2; // array '3fd' - выводит arr[string '3fd']
var_dump($val);
$val = (array)$val5; // array 4.3 - выводит arr[double 4.3]
var_dump($val);
$val = (array)$val6; // array NAN - выводит arr[double NAN]
var_dump($val);
$val = (array)$val4; // array true - выводит arr[bool true]
var_dump($val);
$val = (array)$val9; // array null - выводит arr[]
var_dump($val);
$val = (array)$val8; // array false - выводит arr[bool false]
var_dump($val);

$val = (object)$val1; // object 5 - выводит class stdClass#1 {public $scalar => int 5}
var_dump($val);
$val = (object)$val2; // object '3fd' - выводит class stdClass#2 {public $scalar => string '3fd'}
var_dump($val);
$val = (object)$val5; // object 4.3 - выводит class stdClass#1 {public $scalar => double(4.3)}
var_dump($val);
$val = (object)$val6; // object NAN - выводит class stdClass#2 (1) {public $scalar => double(NAN)}
var_dump($val);
$val = (object)$val4; // object true - выводит class stdClass#1 {public $scalar => bool(true)}
var_dump($val);
$val = (object)$val9; // object null - выводит class stdClass#2 { }
var_dump($val);
$val = (object)$val8; // object false - выводит class stdClass#1 {public $scalar => bool(false)}
var_dump($val);
$val = (object)$val7; // object [3] - выводит class stdClass#2 {public $0 => int(3) public $1 => int(2)}
var_dump($val);


$val = (unset)$val8; // unset false - выводит NULL
var_dump($val);      //(unset) - приведение к NULL
//устарело, не используется

$val = $val1 + $val2; // 5 + '3fd' = int (8)
var_dump($val);
$val = $val1 + $val3; // 5 + 'fd3' = int (5)
var_dump($val);
$val = $val2 + $val1; // '3fd' + 5 = int (8)
var_dump($val);
$val = $val3 + $val1; // 'fd3' + 5 = int (5)
var_dump($val);

$val = $val1 + $val4; // 5 + true = int (6)
var_dump($val);
$val = $val1 + $val8; // 5 + false = int (5)
var_dump($val);

$val = $val1 + $val6; // 5 + NAN = double (NAN)
var_dump($val);
$val = $val1 + $val9; // 5 + null = int (5)
var_dump($val);

$val = $val4 + $val8; // true + false = int (1)
var_dump($val);
$val = $val4 + $val4; // true + true = int (2)
var_dump($val);
$val = $val8 + $val8; // false + false = int (0)
var_dump($val);
$val = $val8 + $val6; // false + NAN = double (NAN)
var_dump($val);
$val = $val4 + $val9; // true + null = int (1)
var_dump($val);

$val = $val5 + $val1; // 4.3 + 5 = double (9.3)
var_dump($val);
$val = $val5 + $val2; // 4.3 + '3fd' = double (7.3)
var_dump($val);
$val = $val2 + $val5; // '3fd' + 4.3 = double (7.3)
var_dump($val);
$val = $val3 + $val5; // 'fd3' + 4.3 = double (4.3)
var_dump($val);
$val = $val3 + $val2; // 'fd3' + '3fd' = int (3)
var_dump($val);

$val = 1 + "10.5";                // double (11.5)
var_dump($val);
$val = 1 + "-1.3e3";              // double (-1299)
var_dump($val);
$val = 1 + "bob-1.3e3";           // integer (1)
var_dump($val);
$val = 1 + "bob3";                // integer (1)
var_dump($val);
$val = 1 + "10 Small Pigs";       // integer (11)
var_dump($val);
$val = 4 + "10.2 Little Piggies"; // double (14.2)
var_dump($val);
$val = "10.0 pigs " + 1;          // double (11)
var_dump($val);
$val = "10.0 pigs " + 1.0;        // double (11)
var_dump($val);

