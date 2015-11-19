<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\DarkRoast;
use \Kondrat\DesignPatterns\Decorator\Condiment\Mocha;

class MochaTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Mocha( new DarkRoast() );
    }

    public function testGetDescription()
    {
        $this->assertEquals("DarkRoast, Mocha", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals((0.99 + 0.20), $this->beverage->cost());
    }

}