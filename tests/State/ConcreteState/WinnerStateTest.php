<?php
use Kondrat\DesignPatterns\State\GumballMachine;
use Kondrat\DesignPatterns\State\ConcreteState\WinnerState;

class WinnerStateTest extends PHPUnit_Framework_TestCase {

    protected $machine;
    protected $state;

    protected function setUp()
    {
        $this->machine = new GumballMachine(5);
        $this->state = new WinnerState($this->machine);
    }

    public function testInsertQuarter()
    {
        $expected = "Please wait, we are already giving you a gumball\n";
        $this->assertEquals($expected, $this->state->insertQuarter());
    }

    public function testEjectQuarter()
    {
        $expected = "Sorry, you already turned the crank\n";
        $this->assertEquals($expected, $this->state->ejectQuarter());
    }

    public function testTurnCrank()
    {
        $expected = "Turning twice does not give you another gumball\n";
        $this->assertEquals($expected, $this->state->turnCrank());
    }

    public function testDispense()
    {
        $expected = "You are a winner! You get two gumballs for your quarter\nA gumball comes rolling out the slot...\nA gumball comes rolling out the slot...\n";
        $this->assertEquals($expected, $this->state->dispense());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState', $this->machine->getState());
    }

    public function testDispenseToSoldOutStateOneBall()
    {
        $machine = new GumballMachine(1);
        $state = new WinnerState($machine);

        $expected = "You are a winner! You get two gumballs for your quarter\nA gumball comes rolling out the slot...\n";
        $this->assertEquals($expected, $state->dispense());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldOutState', $machine->getState());
    }

    public function testDispenseToSoldOutStateTwoBalls()
    {
        $machine = new GumballMachine(2);
        $state = new WinnerState($machine);

        $expected = "You are a winner! You get two gumballs for your quarter\nA gumball comes rolling out the slot...\nA gumball comes rolling out the slot...\nOops, out of gumballs!";
        $this->assertEquals($expected, $state->dispense());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldOutState', $machine->getState());
    }

}