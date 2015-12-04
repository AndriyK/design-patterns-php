<?php
namespace Kondrat\DesignPatterns\Command\ConcreteCommand;

interface CommandInterface
{
    public function execute();
    public function undo();
}
