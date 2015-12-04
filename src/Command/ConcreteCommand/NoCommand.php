<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

class NoCommand implements CommandInterface
{
    public function execute()
    {
        return __CLASS__ . ': no effect';
    }

    public function undo()
    {
        return __CLASS__ . ': nothing to undo';
    }

    public function __toString()
    {
        return "NoCommand";
    }
}