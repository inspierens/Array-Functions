<?php
//Реализуйте класс Flash, который будет использовать внутри себя класс Session из предыдущей задачи
// (именно использовать, а не наследовать).
//
//Этот класс будет использоваться для сохранения сообщений в сессию и вывода их из сессии. Зачем это нужно:
// такой класс часто используется для форм. Например на одной странице пользователь отправляет форму, мы сохраняем в
// сессию сообщение об успешной отправке, редиректим пользователя на другую страницу и там показываем сообщение из сессии.
//
//Класс должен иметь да метода - setMessage, который сохраняет сообщение в сессию и getMessage, который получает
// сообщение из сессии.
include 'task_10.php';

/**
 * Class Flash
 */
class Flash
{
    /**
     * @var Session
     */
    private $message;

    /**
     */
    public function __construct()
    {
        $this->message = new Session();
    }

    /**
     * @param string $val
     *
     * @return Flash
     */
    public function setMessage(string $val) : self
    {
        $this->message->setSession('message', $val);

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage() : string
    {
        $this->message->getSession('message');
    }
}

$message = new Flash();
$message->setMessage('hi');
$message->getMessage();
