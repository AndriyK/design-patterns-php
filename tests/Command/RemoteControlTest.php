<?php
use \Kondrat\DesignPatterns\Command\RemoteControl;
use \Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorUpCommand;
use \Kondrat\DesignPatterns\Command\ConcreteCommand\GarageDoorDownCommand;
use \Kondrat\DesignPatterns\Command\Receiver\GarageDoor;

class RemoteControlTest extends PHPUnit_Framework_TestCase
{
    protected $control;

    protected function setUp()
    {
        $this->control = new RemoteControl();
    }

    public function testSetCommandOnOffUndoButtonsPushed()
    {
        $door = new GarageDoor();
        $this->control->setCommand(0, new GarageDoorUpCommand($door), new GarageDoorDownCommand($door));

        $this->assertEquals("Garage door is open.\n", $this->control->onButtonPushed(0));
        $this->assertEquals("Garage door is closed.\n", $this->control->offButtonPushed(0));
        $this->assertEquals("Garage door is open.\n", $this->control->undoButtonPushed());

        // empty slots
        $this->assertEquals("No execution effect.\n", $this->control->onButtonPushed(1));
        $this->assertEquals("No execution effect.\n", $this->control->offButtonPushed(1));
        $this->assertEquals("Nothing to undo.\n", $this->control->undoButtonPushed());        
    }

    public function testToString()
    {
        $this->assertNotEmpty(strval($this->control));
    }    
}