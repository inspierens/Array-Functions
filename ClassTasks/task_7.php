<?php
//Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open,
// close. Каждый метод принимает массив атрибутов.
//Передаваемые атрибуты могут быть любыми:

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

$form = new Form();
$form->open(
    ['action' => 'index.php', 'method' => 'POST']
)->input(
    ['type' => 'text', 'value' => '!!!', 'class' => 'hi']
)->password(
    ['value' => '!!!']
)->submit(
    ['value' => 'go']
)->textarea(
    ['placeholder' => '123', 'value' => '!!!']
)->close();

echo $form->getHtmlCode();

$form2 = new Form();
$form2->open(
    ['action' => 'index.php', 'method' => 'POST']
)->input(
    ['type' => 'text', 'placeholder' => 'Ваше имя', 'name' => 'name']
)->password(
    ['placeholder' => 'Ваш пароль', 'name' => 'pass']
)->submit(
    ['value' => 'Отправить']
)->close();

echo $form2->getHtmlCode();
