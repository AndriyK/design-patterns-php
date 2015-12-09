<?php
use \Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class GarageDoorTest extends PHPUnit_Framework_TestCase
{
    protected $receiver;

    protected function setUp()
    {
        $this->receiver = new GarageDoor();
    }

    public function testUp()
    {
        $this->assertEquals("Garage door is open.\n", $this->receiver->up());
    }

    public function testDown()
    {
        $this->assertEquals("Garage door is closed.\n", $this->receiver->down());
    }

}