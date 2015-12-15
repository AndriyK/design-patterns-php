<?php
use \Kondrat\DesignPatterns\Facade\Components\Screen;

class ScreenTest extends PHPUnit_Framework_TestCase
{
    protected $component;

    protected function setUp()
    {
        $this->component = new Screen();
    }

    public function testDown()
    {
        $expected = "Screen going down.\n";
        $this->assertEquals($expected, $this->component->down());
    }

    public function testUp()
    {
        $expected = "Screen going up.\n";
        $this->assertEquals($expected, $this->component->up());
    }
}