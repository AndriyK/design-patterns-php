<?php
namespace Kondrat\DesignPatterns\State\ConcreteState;

use Kondrat\DesignPatterns\State\StateInterface;
use Kondrat\DesignPatterns\State\GumballMachine;

class SoldOutState implements StateInterface
{
    private $machine;

    public function __construct(GumballMachine $m) {
        $this->machine = $m;
    }

    public function insertQuarter(){
        return "You can not insert quarter, the machine is sold out\n";
    }

    public function ejectQuarter(){
        return "You can not eject, you have not inserted a quarter yet\n";
    }

    public function turnCrank(){
        return "You turned, but there are no gumballs\n";
    }

    public function dispense(){
        return "No gumball dispensed\n";
    }
}
