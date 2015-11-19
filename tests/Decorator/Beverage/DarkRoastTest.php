<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\DarkRoast;

class DarkRoastTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new DarkRoast();
    }

    public function testGetDescription()
    {
        $this->assertEquals("DarkRoast", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals(0.99, $this->beverage->cost());
    }

}