<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\MacroCommand;
use \Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorUpCommand;
use \Kondrat\DesignPatterns\Command\ConcreteCommand\LightOnCommand;
use \Kondrat\DesignPatterns\Command\Receiver\Light;
use \Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class MacroCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {

        $this->command = new MacroCommand( [new GarageDoorUpCommand(new GarageDoor()), new LightOnCommand(new Light('garage'))] );
    }

    public function testExecute()
    {
        $this->assertEquals("Garage door is open.\nLight in garage is on.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Garage door is closed.\nLight in garage is off.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('GarageDoorUpCommand, LightOnCommand', strval($this->command));
    }    
}