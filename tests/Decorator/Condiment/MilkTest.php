<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\DarkRoast;
use \Kondrat\DesignPatterns\Decorator\Condiment\Milk;

class MilkTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Milk( new DarkRoast() );
    }

    public function testGetDescription()
    {
        $this->assertEquals("DarkRoast, Milk", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals((0.99 + 0.10), $this->beverage->cost());
    }

}