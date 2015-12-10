<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\CeilingFanOffCommand;
use \Kondrat\DesignPatterns\Command\Receiver\CeilingFan;

class CeilingFanOffCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new CeilingFanOffCommand( new CeilingFan() );
    }

    public function testExecute()
    {
        $this->assertEquals("Ceiling fan is turn off.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Ceiling fan is turn with high speed.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('CeilingFanOffCommand', strval($this->command));
    }    
}