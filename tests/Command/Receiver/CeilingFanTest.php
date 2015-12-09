<?php
use \Kondrat\DesignPatterns\Command\Receiver\CeilingFan;

class CeilingFanTest extends PHPUnit_Framework_TestCase
{
    protected $receiver;

    protected function setUp()
    {
        $this->receiver = new CeilingFan();
    }

    public function testHigh()
    {
        $this->assertEquals("Ceiling fan is turn with high speed.\n", $this->receiver->high());
    }

    public function testOff()
    {
        $this->assertEquals("Ceiling fan is turn off.\n", $this->receiver->off());
    }

}