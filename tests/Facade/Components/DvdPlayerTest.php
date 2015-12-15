<?php
use \Kondrat\DesignPatterns\Facade\Components\DvdPlayer;

class DvdPlayerTest extends PHPUnit_Framework_TestCase
{
    protected $component;

    protected function setUp()
    {
        $this->component = new DvdPlayer();
    }

    public function testOn()
    {
        $expected = "DvdPlayer on.\n";
        $this->assertEquals($expected, $this->component->on());
    }

    public function testOff()
    {
        $expected = "DvdPlayer off.\n";
        $this->assertEquals($expected, $this->component->off());
    }

    public function testPlayStopMovie()
    {
        $expected = "DvdPlayer playing 'Ex machine'.\n";
        $this->assertEquals($expected, $this->component->playMovie('Ex machine'));

        $expected = "DvdPlayer stopped 'Ex machine'.\n";
        $this->assertEquals($expected, $this->component->stop());
    }

    public function testEject()
    {
        $expected = "DvdPlayer eject.\n";
        $this->assertEquals($expected, $this->component->eject());
    }

}