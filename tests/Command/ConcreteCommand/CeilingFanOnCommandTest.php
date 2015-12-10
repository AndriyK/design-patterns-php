<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\CeilingFanOnCommand;
use \Kondrat\DesignPatterns\Command\Receiver\CeilingFan;

class CeilingFanOnCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new CeilingFanOnCommand( new CeilingFan() );
    }

    public function testExecute()
    {
        $this->assertEquals("Ceiling fan is turn with high speed.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Ceiling fan is turn off.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('CeilingFanOnCommand', strval($this->command));
    }    
}