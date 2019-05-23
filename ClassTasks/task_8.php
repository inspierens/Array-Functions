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
    /** @var */
    private $htmlString = '';

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
     *
     * @return Form
     */
    public function input(array $arr) : self
    {
        $str = $this->setValue($arr);
        $this->htmlString .= '<input' . $str . '><br>';

        return $this;
    }

    /**
     * @param array $arr
     *
     * @return Form
     */
    public function submit(array $arr) : self
    {
        $str = $this->setValue($arr);
        $this->htmlString .= '<input type="submit"' . $str . '><br>';

        return $this;
    }

    /**
     * @param array $arr
     *
     * @return Form
     */
    public function password(array $arr) : self
    {
        $str = $this->setValue($arr);
        $this->htmlString .= '<input type="password"' . $str . '><br>';

        return $this;
    }

    /**
     * @param array $arr
     *
     * @return Form
     */
    public function textarea(array $arr) : self
    {
        $str = $this->setOtherValue($arr);
        $this->htmlString .= '<textarea' . $str . '</textarea><br>';

        return $this;
    }

    /**
     * @param array $arr
     *
     * @return Form
     */
    public function open(array $arr) : self
    {
        $str = $this->setValue($arr);
        $this->htmlString .= '<form' . $str . '><br>';

        return $this;

    }

    /**
     * @return Form
     */
    public function close() : self
    {
        $this->htmlString .= '</form><br>';

        return $this;
    }

    /**
     * @return string
     */
    public function getHtmlCode() : string
    {
        return $this->htmlString;
    }
}

/**
 * Class SmartForm
 */
class SmartForm extends Form
{
    /** @var */
    private $name;
    /** @var */
    private $pass;

    /**
     *
     */
    public function saveAll() : void
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
echo $form2->getHtmlCode();
$form2->saveAll();
