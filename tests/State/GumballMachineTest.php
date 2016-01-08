<?php
use Kondrat\DesignPatterns\State\GumballMachine;

class GumballMachineTest extends PHPUnit_Framework_TestCase
{
    protected $machine;

    protected function setUp()
    {
        $this->machine = new GumballMachine(5);
    }

    public function testInitialState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState', $this->machine->getState());

        $machine = new GumballMachine(0);
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldOutState', $machine->getState());
    }

    public function testInsertQuarter()
    {
        $expected = "You insterted a quarter\n";
        $this->assertEquals($expected, $this->machine->insertQuarter());

        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState', $this->machine->getState());
    }

    public function testEjectQuarter()
    {
        $expected = "You have not inserted a quarter\n";
        $this->assertEquals($expected, $this->machine->ejectQuarter());
    }

    public function testTurnCrank()
    {
        $expected = "You turned, but there is no quarter\nYou need to pay first\n";
        $this->assertEquals($expected, $this->machine->turnCrank());
    }

    public function testSetGetState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState', $this->machine->getState());
        $this->machine->setState(new \Kondrat\DesignPatterns\State\ConcreteState\WinnerState($this->machine));
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\WinnerState', $this->machine->getState());
    }

    public function testGetCountAndReleaseBall()
    {
        $this->assertEquals(5, $this->machine->getCount());

        $expected = "A gumball comes rolling out the slot...\n";
        $this->assertEquals($expected, $this->machine->releaseBall());

        $this->assertEquals(4, $this->machine->getCount());
    }


    public function testGetNoQuarterState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState', $this->machine->getNoQuarterState());
    }

    public function testGetHasQuarterState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\HasQuarterState', $this->machine->getHasQuarterState());
    }

    public function testGetSoldState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldState', $this->machine->getSoldState());
    }

    public function testGetSoldOutState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\SoldOutState', $this->machine->getSoldOutState());
    }

    public function testGetWinnerState()
    {
        $this->assertInstanceOf('Kondrat\DesignPatterns\State\ConcreteState\WinnerState', $this->machine->getWinnerState());
    }

    public function testToString()
    {
        $str = "**** Gumball machine #001 ****\n";
        $str .= "Inventory: 5 gumballs\n";
        $str .= 'Status: Kondrat\DesignPatterns\State\ConcreteState\NoQuarterState'."\n";

        $this->assertEquals($str, strval($this->machine));
    }
}
