<?php
// Создайте класс Tag.
//
//Примеры использования:
//
//<?php
//	$tag = new Tag('a');
//	$tag->setText('ссылка')->setAttr('href', 'index.html')->show();
//
//	//Выведет <a href="index.html">ссылка</a>
//

/**
 * Class Tag
 */
class Tag
{
    /** @var */
    private $htmlString;
    /** @var */
    private $text;
    /** @var */
    private $attr;
    /** @var */
    private $href;
    /** @var string */
    private $tag;

    /**
     * @param string $tag
     */
    public function __construct(string $tag)
    {
        $this->tag = $tag;
    }

    /**
     * @param string $text
     *
     * @return Tag
     */
    public function setText(string $text) : self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @param string $attr
     * @param string $href
     *
     * @return Tag
     */
    public function setAttr(string $attr, string $href) : self
    {
        $this->attr = $attr;
        $this->href = $href;

        return $this;
    }

    /**
     * @return string
     */
    private function makeHtml() : string
    {
        $this->htmlString .= '<' . $this->tag . ' ' . $this->attr . '="' . $this->href . '">';
        $this->htmlString .= $this->text . '</' . $this->tag . '>';

        return $this->htmlString;
    }

    /**
     * @return string
     */
    public function show() : string
    {
        $this->makeHtml();

        return $this->htmlString;
    }
}

$tag = new Tag('a');
echo $tag->setText('Главная')->setAttr('href', '../index.php')->show();
