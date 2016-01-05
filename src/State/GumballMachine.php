<?php
namespace Kondrat\DesignPatterns\State;

use Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState;
use Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState;
use Kondrat\DesignPatterns\State\ConcreteState\SoldOutState;
use Kondrat\DesignPatterns\State\ConcreteState\SoldState;
use Kondrat\DesignPatterns\State\ConcreteState\WinnerState;

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    private $winnerState;

    private $state;
    private $count;

    public function __construct($numberGumballs) {
        $this->count = $numberGumballs;

        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        $this->winnerState = new WinnerState($this);

        $this->state = $this->count > 0 ? $this->noQuarterState : $this->soldOutState;
    }

    public function insertQuarter() {
        return $this->state->insertQuarter();
    }

    public function ejectQuarter() {
        return $this->state->ejectQuarter();
    }

    public function turnCrank() {
        $res = $this->state->turnCrank();
        $res .= $this->state->dispense();
        return $res;
    }

    public function setState(StateInterface $state) {
        $this->state = $state;
    }

    public function releaseBall()
    {
        if($this->count > 0) {
            $this->count--;
        }
        return "A gumball comes rolling out the slot...\n";
    }

    public function getCount()
    {
        return $this->count;
    }

    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }

    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }

    public function getSoldState()
    {
        return $this->soldState;
    }

    public function getSoldOutState()
    {
        return $this->soldOutState;
    }

    public function getWinnerState()
    {
        return $this->winnerState;
    }

    public function getState()
    {
        return $this->state;
    }
}