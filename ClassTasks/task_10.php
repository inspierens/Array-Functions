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
    function __construct()
    {
        session_start();
    }

    /**
     * @param string $sessionName
     * @param        $sessionValue
     */
    public function setSession(string $sessionName, $sessionValue)
    {
        $_SESSION[$sessionName] = $sessionValue;
    }

    /**
     * @param string $sessionName
     */
    public function getSession(string $sessionName)
    {
        echo $_SESSION[$sessionName];
    }

    /**
     * @param string $sessionName
     */
    public function delSession(string $sessionName)
    {
        unset($_SESSION[$sessionName]);
    }

    /**
     * @param string $sessionName
     *
     */
    public function checkSession(string $sessionName)
    {
        if (!isset($_SESSION[$sessionName])) {
            echo 'false'; //return 0
        } else {
            echo 'true'; //return 1
        }
    }
}

$mySession = new Session();
$mySession->setSession('id', '523');
$mySession->checkSession('id');
$mySession->getSession('id');
$mySession->delSession('id');
