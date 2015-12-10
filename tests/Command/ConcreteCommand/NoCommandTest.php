<?php
use \Kondrat\DesignPatterns\Command\ConcreteCommand\NoCommand;

class NoCommandTest extends PHPUnit_Framework_TestCase
{
    protected $command;

    protected function setUp()
    {
        $this->command = new NoCommand();
    }

    public function testExecute()
    {
        $this->assertEquals("No execution effect.\n", $this->command->execute());
    }

    public function testUndo()
    {
        $this->assertEquals("Nothing to undo.\n", $this->command->undo());
    }

    public function testToString()
    {
        $this->assertEquals('NoCommand', strval($this->command));
    }    
}