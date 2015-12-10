<?php
namespace Kondrat\DesignPatterns\Command;

use Kondrat\DesignPatterns\Command\ConcreteCommand\CommandInterface;
use Kondrat\DesignPatterns\Command\ConcreteCommand\NoCommand;

class RemoteControl
{
    const SLOTS_NUMBER = 7;

    private $onCommands = array();
    private $offCommands = array();
    private $undoCommand;

    public function __construct()
    {
        $emptyCommand = new NoCommand();
        for($i = 0; $i < self::SLOTS_NUMBER; $i++){
            $this->onCommands[$i] = $emptyCommand;
            $this->offCommands[$i] = $emptyCommand;
        }
        $this->undoCommand = $emptyCommand;
    }

    public function setCommand($slot, CommandInterface $onCommand, CommandInterface $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonPushed($slot)
    {
        $this->undoCommand = $this->onCommands[$slot];
        return $this->onCommands[$slot]->execute();
    }

    public function offButtonPushed($slot)
    {
        $this->undoCommand = $this->offCommands[$slot];
        return $this->offCommands[$slot]->execute();
    }

    public function undoButtonPushed()
    {
        return $this->undoCommand->undo();
    }
    
    public function __toString()
    {
        $str = "-------- Remote Control --------\n";
        for($i = 0; $i < self::SLOTS_NUMBER; $i++){
            $str .= "[slot {$i}] onButton:{$this->onCommands[$i]} offButton:{$this->offCommands[$i]}\n";
        }
        $str .= "[undo] {$this->undoCommand}\n";
        return $str;
    }
}