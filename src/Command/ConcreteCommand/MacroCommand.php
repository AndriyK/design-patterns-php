<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

class MacroCommand implements CommandInterface
{
    private $commands = array();

    public function __construct(Array $commands)
    {
        $this->commands = $commands;
    }

    public function execute()
    {
        $res = "";
        foreach($this->commands as $command){
            $res .= $command->execute();
        }
        return $res;
    }

    public function undo()
    {
        $res = "";
        foreach($this->commands as $command){
            $res .= $command->undo();
        }
        return $res;
    }

    public function __toString()
    {
        return implode(", ", $this->commands);
    }
}