<?php
namespace Kondrat\DesignPatterns\State\ConcreteState;

use Kondrat\DesignPatterns\State\StateInterface;
use Kondrat\DesignPatterns\State\GumballMachine;

class HasQuarterState implements StateInterface
{
    private $machine;

    public function __construct(GumballMachine $m) {
        $this->machine = $m;
    }

    public function insertQuarter(){
        return "You can not insert another quarter\n";
    }

    public function ejectQuarter(){
        $this->machine->setState( $this->machine->getNoQuarterState() );
        return "Quarter returned\n";
    }

    public function turnCrank(){
        $res = "You turned...\n";

        if($this->isWinner()){
            $this->machine->setState( $this->machine->getWinnerState() );
        }else{
            $this->machine->setState( $this->machine->getSoldState() );
        }

        return $res;
    }

    public function dispense(){
        return "No gumball dispensed\n";
    }

    public function isWinner()
    {
        //@codeCoverageIgnoreStart
        return (rand(0,9) == 0 and $this->machine->getCount()>0);
        //@codeCoverageIgnoreEnd
    }


}
