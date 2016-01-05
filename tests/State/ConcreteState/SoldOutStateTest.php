<?php
use Kondrat\DesignPatterns\State\GumballMachine;
use Kondrat\DesignPatterns\State\ConcreteState\SoldOutState;

class SoldOutStateTest extends PHPUnit_Framework_TestCase {

    protected $machine;
    protected $state;

    protected function setUp()
    {
        $this->machine = new GumballMachine(5);
        $this->state = new SoldOutState($this->machine);
    }

    public function testInsertQuarter()
    {
        $expected = "You can not insert quarter, the machine is sold out\n";
        $this->assertEquals($expected, $this->state->insertQuarter());
    }

    public function testEjectQuarter()
    {
        $expected = "You can not eject, you have not inserted a quarter yet\n";
        $this->assertEquals($expected, $this->state->ejectQuarter());
    }

    public function testTurnCrank()
    {
        $expected = "You turned, but there are no gumballs\n";
        $this->assertEquals($expected, $this->state->turnCrank());
    }

    public function testDispense()
    {
        $expected = "No gumball dispensed\n";
        $this->assertEquals($expected, $this->state->dispense());
    }
}