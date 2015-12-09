<?php
use \Kondrat\DesignPatterns\Command\Receiver\Light;

class LightTest extends PHPUnit_Framework_TestCase
{
    protected $receiver;

    protected function setUp()
    {
        $this->receiver = new Light('some_room');
    }

    public function testOn()
    {
        $this->assertEquals("Light in some_room is on.\n", $this->receiver->on());
    }

    public function testOff()
    {
        $this->assertEquals("Light in some_room is off.\n", $this->receiver->off());
    }

}