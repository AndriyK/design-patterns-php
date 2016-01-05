<?php
use Kondrat\DesignPatterns\State\GumballMachine;
use Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState;

class HasQuarterStateTest extends PHPUnit_Framework_TestCase {

    protected $machine;
    protected $state;

    protected function setUp()
    {
        $this->machine = new GumballMachine(5);
        $this->state = new HasQuarterState($this->machine);
    }

    public function testInsertQuarter()
    {
        $expected = "You can not insert another quarter\n";
        $this->assertEquals($expected, $this->state->insertQuarter());
    }

    public function testEjectQuarter()
    {
        $expected = "Quarter returned\n";
        $this->assertEquals($expected, $this->state->ejectQuarter());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState', $this->machine->getState());
    }

    public function testTurnCrank()
    {
        $expected = "You turned...\n";

        $mockedState = $this->getMockBuilder('Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState')
            ->setConstructorArgs([$this->machine])
            ->setMethods(['isWinner'])
            ->getMock();

        $mockedState->method('isWinner')
            ->willReturn(false);

        $this->assertEquals($expected, $mockedState->turnCrank());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldState', $this->machine->getState());
    }

    public function testTurnCrankWinnerCase()
    {
        $expected = "You turned...\n";

        $mockedState = $this->getMockBuilder('Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState')
            ->setConstructorArgs([$this->machine])
            ->setMethods(['isWinner'])
            ->getMock();

        $mockedState->method('isWinner')
            ->willReturn(true);

        $this->assertEquals($expected, $mockedState->turnCrank());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\WinnerState', $this->machine->getState());
    }

    public function testDispense()
    {
        $expected = "No gumball dispensed\n";
        $this->assertEquals($expected, $this->state->dispense());
    }
}