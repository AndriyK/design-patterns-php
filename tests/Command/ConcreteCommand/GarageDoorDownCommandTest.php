<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorDownCommand;
use \Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class GarageDoorDownCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new GarageDoorDownCommand( new GarageDoor() );
    }

    public function testExecute()
    {
        $this->assertEquals("Garage door is closed.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Garage door is open.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('GarageDoorDownCommand', strval($this->command));
    }    
}