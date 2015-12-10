<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\StereoOnWithCdCommand;
use \Kondrat\DesignPatterns\Command\Receiver\Stereo;

class StereoOnWithCdCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new StereoOnWithCdCommand( new Stereo() );
    }

    public function testExecute()
    {
        $this->assertEquals("Stereo is on.\nCD is inserted.\nVolume set to level 10.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Stereo if off.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('StereoOnWithCdCommand', strval($this->command));
    }    
}