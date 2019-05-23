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
     *
     * @return Cookie
     */
    public function setCookie(string $cookieName, string $cookieValue) : self
    {
        setcookie($cookieName, $cookieValue);

        return $this;
    }

    /**
     * @param string $cookieName
     *
     * @return string
     */
    public function getCookie(string $cookieName) : string
    {
        return $_COOKIE[$cookieName];
    }

    /**
     * @param string $cookieName
     */
    public function delCookie(string $cookieName) : void
    {
        setcookie($cookieName, '', time() - 3600);
    }
}

$myCookie = new Cookie();
$myCookie->setCookie('someName', 'someValue')->setCookie('userName', 'Dima')->setCookie('userPass', 'qwerty');
$myCookie->getCookie('someName');
$myCookie->delCookie('someName');
