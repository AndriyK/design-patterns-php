<?php
use \Kondrat\DesignPatterns\Proxy\Text;

class TextTest extends PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $text = new Text('test_text');
        $this->assertEquals("Drawing text: 'test_text'.\n", $text->draw());
    }

    public function testGetExtent()
    {
        $text = new Text('test_text');
        $this->assertEquals("Extent for text is 0,0.\n", $text->getExtent());
    }
}