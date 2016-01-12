<?php
namespace Kondrat\DesignPatterns\Proxy;

class Text implements GraphicInterface
{
    private $text = '';

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function draw()
    {
        return "Drawing text: '{$this->text}'.\n";
    }

    public function getExtent()
    {
        return "Extent for text is 0,0.\n";
    }
}