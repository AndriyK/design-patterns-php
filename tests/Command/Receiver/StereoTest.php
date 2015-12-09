<?php
use \Kondrat\DesignPatterns\Command\Receiver\Stereo;

class StereoTest extends PHPUnit_Framework_TestCase
{
    protected $receiver;

    protected function setUp()
    {
        $this->receiver = new Stereo();
    }

    public function testOn()
    {
        $this->assertEquals("Stereo is on.\n", $this->receiver->on());
    }

    public function testOff()
    {
        $this->assertEquals("Stereo if off.\n", $this->receiver->off());
    }

    public function testSetCd()
    {
        $this->assertEquals("CD is inserted.\n", $this->receiver->setCd());
    }

    public function testSetVolume()
    {
        $this->assertEquals("Volume set to level 10.\n", $this->receiver->setVolume(10));
    }
}