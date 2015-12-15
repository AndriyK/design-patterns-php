<?php
use \Kondrat\DesignPatterns\Facade\Components\Amplifier;

class AmplifierTest extends PHPUnit_Framework_TestCase
{
    protected $component;

    protected function setUp()
    {
        $this->component = new Amplifier();
    }

    public function testOn()
    {
        $expected = "Amplifier on.\n";
        $this->assertEquals($expected, $this->component->on());
    }

    public function testOff()
    {
        $expected = "Amplifier off.\n";
        $this->assertEquals($expected, $this->component->off());
    }

    public function testSetDvd()
    {
        $expected = "Amplifier setting Kondrat\\DesignPatterns\\Facade\\Components\\DvdPlayer to Top-o-Line\n";
        $this->assertEquals($expected, $this->component->setDvd(new \Kondrat\DesignPatterns\Facade\Components\DvdPlayer()));
    }

    public function testSetVolume()
    {
        $expected = "Amplifier setting volume to 5\n";
        $this->assertEquals($expected, $this->component->setVolume(5));
    }

}