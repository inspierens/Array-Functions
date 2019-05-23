<?php
//Создайте класс SmartForm, который будет наследовать от Form из предыдущей задачи и сохранять значения инпутов
// после отправки.
//
//То есть если мы сделали форму, нажали на кнопку отправки - то значения из инпутов не должны пропасть. Мало ли что-то
// пойдет не так, например, форма некорректно заполнена, а введенные данные из нее пропали и их следует вводить заново.
// Этого следует избегать.

/**
 * Class Form
 */
class Form
{
    /**
     * @param array $arr
     *
     * @return string
     */
    private function setValue(array $arr) : string
    {
        $str = '';

        foreach ($arr as $key => $val) {
            $str .= ' ' . $key . '="' . $val . '"';
        }

        return $str;
    }

    /**
     * @param array $arr
     *
     * @return string
     */
    private function setOtherValue(array $arr) : string
    {
        $str = '';

        foreach ($arr as $key => $val) {
            if ($key === 'value') {
                $str .= '>' . $val;
            } else {
                $str .= ' ' . $key . '="' . $val . '"';
            }
        }

        return $str;
    }

    /**
     * @param array $arr
     */
    public function input(array $arr)
    {
        $str = $this->setValue($arr);
        echo '<input' . $str . '><br>' . PHP_EOL;
    }

    /**
     * @param array $arr
     */
    public function submit(array $arr)
    {
        $str = $this->setValue($arr);
        echo '<input type="submit"' . $str . '><br>' . PHP_EOL;
    }

    /**
     * @param array $arr
     */
    public function password(array $arr)
    {
        $str = $this->setValue($arr);
        echo '<input type="password"' . $str . '><br>' . PHP_EOL;
    }

    /**
     * @param array $arr
     */
    public function textarea(array $arr)
    {
        $str = $this->setOtherValue($arr);
        echo '<textarea' . $str . '</textarea><br>' . PHP_EOL;
    }

    /**
     * @param array $arr
     */
    public function open(array $arr)
    {
        $str = $this->setValue($arr);
        echo '<form' . $str . '><br>' . PHP_EOL;

    }

    /**
     *
     */
    public function close()
    {
        echo '</form><br>' . PHP_EOL;
    }
}

/**
 * Class SmartForm
 */
class SmartForm extends Form
{
    /**
     * @var
     */
    private $name;
    /**
     * @var
     */
    private $pass;

    /**
     *
     */
    public function saveAll()
    {
        $this->name = $_POST['name'];
        $this->pass = $_POST['pass'];
    }
}

$form2 = new SmartForm();
$form2->open(['action' => 'task_8.php', 'method' => 'POST']);
$form2->input(['type' => 'text', 'placeholder' => 'Ваше имя', 'name' => 'name']);
$form2->password(['placeholder' => 'Ваш пароль', 'name' => 'pass']);
$form2->submit(['value' => 'Отправить']);
$form2->close();

$form2->saveAll();
