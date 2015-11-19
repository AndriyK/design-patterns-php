<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\DarkRoast;
use \Kondrat\DesignPatterns\Decorator\Condiment\Soy;

class SoyTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Soy( new DarkRoast() );
    }

    public function testGetDescription()
    {
        $this->assertEquals("DarkRoast, Soy", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals((0.99 + 0.15), $this->beverage->cost());
    }

}