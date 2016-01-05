<?php
use Kondrat\DesignPatterns\State\GumballMachine;
use Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState;

class NoQuarterStateTest extends PHPUnit_Framework_TestCase {

    protected $machine;
    protected $state;

    protected function setUp()
    {
        $this->machine = new GumballMachine(5);
        $this->state = new NoQuarterState($this->machine);
    }

    public function testInsertQuarter()
    {
        $expected = "You insterted a quarter\n";
        $this->assertEquals($expected, $this->state->insertQuarter());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState', $this->machine->getState());
    }

    public function testEjectQuarter()
    {
        $expected = "You have not inserted a quarter\n";
        $this->assertEquals($expected, $this->state->ejectQuarter());
    }

    public function testTurnCrank()
    {
        $expected = "You turned, but there is no quarter\n";
        $this->assertEquals($expected, $this->state->turnCrank());
    }

    public function testDispense()
    {
        $expected = "You need to pay first\n";
        $this->assertEquals($expected, $this->state->dispense());
    }
}