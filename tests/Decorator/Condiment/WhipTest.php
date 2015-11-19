<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\Decaf;
use \Kondrat\DesignPatterns\Decorator\Condiment\Whip;

class WhipTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Whip( new Decaf() );
    }

    public function testGetDescription()
    {
        $this->assertEquals("Decaf, Whip", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals((1.05 + 0.10), $this->beverage->cost());
    }

}