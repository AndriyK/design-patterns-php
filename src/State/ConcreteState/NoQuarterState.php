<?php
namespace Kondrat\DesignPatterns\State\ConcreteState;

use Kondrat\DesignPatterns\State\StateInterface;
use Kondrat\DesignPatterns\State\GumballMachine;

class NoQuarterState implements StateInterface
{
    private $machine;

    public function __construct(GumballMachine $m) {
        $this->machine = $m;
    }

    public function insertQuarter(){
        $this->machine->setState( $this->machine->getHasQuarterState() );
        return "You insterted a quarter\n";
    }

    public function ejectQuarter(){
        return "You have not inserted a quarter\n";
    }

    public function turnCrank(){
        return "You turned, but there is no quarter\n";
    }

    public function dispense(){
        return "You need to pay first\n";
    }
}
