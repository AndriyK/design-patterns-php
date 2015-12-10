<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\LightOnCommand;
use \Kondrat\DesignPatterns\Command\Receiver\Light;

class LightOnCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new LightOnCommand( new Light('some_room') );
    }

    public function testExecute()
    {
        $this->assertEquals("Light in some_room is on.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Light in some_room is off.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('LightOnCommand', strval($this->command));
    }    
}