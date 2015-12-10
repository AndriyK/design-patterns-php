<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorUpCommand;
use \Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class GarageDoorUpCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new GarageDoorUpCommand( new GarageDoor() );
    }

    public function testExecute()
    {
        $this->assertEquals("Garage door is open.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Garage door is closed.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('GarageDoorUpCommand', strval($this->command));
    }    
}