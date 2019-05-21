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

echo '© ' . date("Y") . ' PHP Exercises - w3resource';

//Task 2
numbTask(2);

//Create a simple 'birthday countdown' script, the script will count the number of days between current day and birthday
//Создайте простой сценарий «обратного отсчета дня рождения», который подсчитает количество дней между текущим днем ​​и днем ​​рождения

$startdate = strtotime('now');
$enddate = strtotime('09 June 2019', $startdate);

while ($startdate < $enddate) {
    echo date('M d', $startdate) . $sep;
    $startdate = strtotime('+1 day', $startdate);
}

//Task 3
numbTask(3);

$date = strtotime('September 01, 2013');

echo date('Y/m/d', $date) . $sep;
echo date('y.m.d', $date) . $sep;
echo date('d-m-y', $date) . $sep;

//Task 4
numbTask(4);

$date1 = date_create('1981-11-04');
$date2 = date_create('2013-09-04');
$diff = date_diff($date1, $date2);

echo $diff->format('%y years %m months %d days') . $sep;

//Task 5
numbTask(5);

$date = strtotime('2012-09-12');
echo date('d-m-Y', $date);

//Task 6
numbTask(6);

$date = date_create('12-05-2014');
echo date_timestamp_get($date);

//Task 7
numbTask(7);

$startdate = new DateTime('2013-10-04');
$enddate = new DateTime('2013-11-04');

echo $diff = $enddate->diff($startdate)->format("%a") . 'days' . $sep;

//Task 8
numbTask(8);

echo (new DateTime('first day of 12-05-2014'))->format('jS, F Y') . $sep;
echo (new DateTime('last day of 12-05-2014'))->format('jS, F Y') . $sep;

//Task 9
numbTask(9);

$date = new DateTime();
echo $date->format('l  jS');

//Task 10
numbTask(10);

$date = '2-29-2001';
$dateArr = explode('-', $date);
if (checkdate($dateArr[0], $dateArr[1], $dateArr[2])) {
    echo 'Correct date';
} else {
    echo 'Incorrect date';
}

//Task 11
numbTask(11);

$date1 = new DateTime('2016-08-11 03:14:56');
$date2 = new DateTime('2018-07-22 11:10:00');
$diff = $date1->diff($date2);

echo $diff->days . ' Total days' . $sep;
echo $diff->y . ' years, ' .
    $diff->m . 'months, ' .
    $diff->d . ' days, ' .
    $diff->h . ' hours, ' .
    $diff->i . ' minutes, ' .
    $diff->s . ' seconds';

//Task 12
numbTask(12);

$date = new DateTime('2019-05-20');
echo date('d-F-Y');

//Task 13
numbTask(13);

$date = strtotime('yesterday');
echo date('d-m-Y', $date);

//Task 14
numbTask(14);

$date = new DateTime('now', new DateTimeZone('Australia/Melbourne'));
echo $date->format('Y-m-d H:i:s');

//Task 15
numbTask(15);

$date = strtotime('2019-05-19');
if (((int)date('w', $date) === 0) or ((int)date('w', $date) === 6)) {
    echo 'is a weekend';
} else {
    echo 'not weekend';
}

//Task 16
numbTask(16);

$date = '2011-01-01';
$days = 40;

$next = strtotime('+' . $days . ' days', strtotime($date));
$prev = strtotime('-' . $days . ' days', strtotime($date));
echo 'After 40 days : ' . date('Y-m-d', $next) . $sep;
echo 'Before 40 days : ' . date('Y-m-d', $prev);

//Task 17
numbTask(17);

$week = 12;
$year = 2014;

/**
 * @param $week
 * @param $year
 *
 * @return array
 */
function WeekRange($week, $year)
{
    $date = strtotime($year . '-01-01 + ' . $week . ' week');
    $start = (date('w', $date) == 0) ? $date : strtotime('last sunday + 1 day', $date);

    return [
        date('Y-n-d', $start),
        date('Y-n-d', strtotime('next saturday + 1 day', $start)),
    ];
}

$arrDate = WeekRange($week, $year);

echo 'Starting date of the week: ' . $arrDate[0] . $sep;
echo 'End date the week: ' . $arrDate[1] . $sep;

//Task 18
numbTask(18);

$date1 = date_create('11.4.1987');
$date2 = date_create('now');
$diff = date_diff($date1, $date2);

echo 'Your age : ' . $diff->format('%y years %m months %d days') . $sep;

//Task 19
numbTask(19);

$date1 = '1/1/2014';
$date2 = '12/31/2014';
$diff = date_create($date2)->diff(date_create($date1));

echo 'Weeks between ' . $date1 . ' and ' . $date2 . ' is ' . $diff->days / 7;

//Task 20
numbTask(20);

$date = strtotime('now -1 month');
echo date('m', $date);

//Task 21
numbTask(21);

$sec = 200000;
$date1 = date_create($sec . ' seconds');
$date2 = date_create('now - 1 second');
$diff = date_diff($date2, $date1);

echo $diff->format('%d days, %h hours, %i minutes and %s second');

//Task 22
numbTask(22);

$enddate = strtotime('now - 1 month');
$startdate = strtotime('-6 month', $enddate);

while (($startdate) <= ($enddate)) {
    echo date('M', $startdate) . $sep;
    $startdate = strtotime('+1 month', $startdate);
}

//Task 23
numbTask(23);

$enddate = strtotime('now');
$startdate = strtotime('-3 month', $enddate);
echo 'now: ' . date('M', $enddate) . $sep;
while (($startdate) < ($enddate)) {
    echo date('M', $startdate) . $sep;
    $startdate = strtotime('+1 month', $startdate);
}

//Task 24
numbTask(24);

$date = strtotime('2012-12-21');
echo date('Y-m-d', strtotime('+1 month', $date));

//Task 25
numbTask(25);

$date = new DateTime('06-10-2014', new DateTimeZone('Europe/Rome'));

echo 'Today is ' . $date->format('D') . ' on ' . $date->format('M d, Y');

//Task 26
numbTask(26);

$numb = 4;
$startdate = strtotime('01-01-2019');
$enddate = strtotime('31-12-2019');

while (($startdate) < ($enddate)) {
    if (date('n', $startdate) == $numb) {
        echo date('F', $startdate);
    }

    $startdate = strtotime('+1 month', $startdate);
}

//Task 27
numbTask(27);

echo (new DateTime('last day of now'))->format('j') . $sep;

//Task 28
numbTask(28);

$date = new DateTime('now', new DateTimeZone('Europe/London'));
$tz = $date->getTimezone();
echo $tz->getName() . $sep;
echo $date->format('Y-M-D');
