<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\Decaf;

class DecafTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Decaf();
    }

    public function testGetDescription()
    {
        $this->assertEquals("Decaf", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals(1.05, $this->beverage->cost());
    }

}