<?php
// Создайте класс Cookie - оболочку над работой с куками. Класс должен иметь следующие методы:
// установка куки set(имя куки, ее значение), получение куки get(имя куки), удаление куки del(имя куки).

/**
 * Class Cookie
 */
class Cookie
{
    /**
     * @param string $cookieName
     * @param string $cookieValue
     */
    public function setCookie(string $cookieName, string $cookieValue)
    {
        setcookie($cookieName, $cookieValue);
    }

    /**
     * @param string $cookieName
     */
    public function getCookie(string $cookieName)
    {
        echo $_COOKIE[$cookieName];
    }

    /**
     * @param string $cookieName
     */
    public function delCookie(string $cookieName)
    {
        setcookie($cookieName, '', time() - 3600);
    }
}

$myCookie = new Cookie();
$myCookie->setCookie('someName', 'someValue');
$myCookie->setCookie('userName', 'Dima');
$myCookie->setCookie('userPass', 'qwerty');
$myCookie->getCookie('someName');
$myCookie->delCookie('someName');
