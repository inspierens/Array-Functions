<?php
//Создайте класс Session - оболочку над сессиями. Он должен иметь следующие методы: создать переменную сессии,
// получить переменную, удалить переменную сессии, проверить наличие переменной сессии.
//
//Сессия должна стартовать (session_start) в методе __construct.

/**
 * Class Session
 */
class Session
{
    /**
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * @param string $sessionName
     * @param string $sessionValue
     *
     * @return Session
     */
    public function setSession(string $sessionName, string $sessionValue) : self
    {
        $_SESSION[$sessionName] = $sessionValue;

        return $this;
    }

    /**
     * @param string $sessionName
     *
     * @return string
     */
    public function getSession(string $sessionName) : string
    {
        return $_SESSION[$sessionName];
    }

    /**
     * @param string $sessionName
     */
    public function delSession(string $sessionName) : void
    {
        unset($_SESSION[$sessionName]);
    }

    /**
     * @param string $sessionName
     *
     * @return bool
     */
    public function checkSession(string $sessionName) : bool
    {
        return ((!isset($_SESSION[$sessionName])) ? false : true);
    }
}

$mySession = new Session();
$mySession->setSession('id', '523');
$mySession->checkSession('id');
$mySession->getSession('id');
$mySession->delSession('id');
