<?php
use \Kondrat\DesignPatterns\Facade\Components\Projector;

class ProjectorTest extends PHPUnit_Framework_TestCase
{
    protected $component;

    protected function setUp()
    {
        $this->component = new Projector();
    }

    public function testOn()
    {
        $expected = "Projector on.\n";
        $this->assertEquals($expected, $this->component->on());
    }

    public function testOff()
    {
        $expected = "Projector off.\n";
        $this->assertEquals($expected, $this->component->off());
    }

    public function testWideScreenMode()
    {
        $expected = "Projector in widescreen mode (16x9).\n";
        $this->assertEquals($expected, $this->component->wideScreenMode());
    }
}