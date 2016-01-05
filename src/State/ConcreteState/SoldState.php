<?php
namespace Kondrat\DesignPatterns\State\ConcreteState;

use Kondrat\DesignPatterns\State\GumballMachine;
use Kondrat\DesignPatterns\State\StateInterface;

class SoldState implements StateInterface
{
    private $machine;

    public function __construct(GumballMachine $m) {
        $this->machine = $m;
    }

    public function insertQuarter(){
        return "Please wait, we are already giving you a gumball\n";
    }

    public function ejectQuarter(){
        return "Sorry, you already turned the crank\n";
    }

    public function turnCrank(){
        return "Turning twice does not give you another gumball\n";
    }

    public function dispense(){
        $res = $this->machine->releaseBall();
        if($this->machine->getCount() > 0){
            $this->machine->setState( $this->machine->getNoQuarterState() );
        } else {
            $res .= "Oops, out of gumballs!\n";
            $this->machine->setState( $this->machine->getSoldOutState() );
        }
        return $res;
    }
}

