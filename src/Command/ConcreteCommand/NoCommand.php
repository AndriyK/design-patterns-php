<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

class NoCommand implements CommandInterface
{
    public function execute()
    {
        return "No execution effect.\n";
    }

    public function undo()
    {
        return "Nothing to undo.\n";
    }

    public function __toString()
    {
        return "NoCommand";
    }
}