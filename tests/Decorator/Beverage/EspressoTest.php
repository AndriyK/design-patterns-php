<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\Espresso;

class EspressoTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new Espresso();
    }

    public function testGetDescription()
    {
        $this->assertEquals("Espresso", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals(1.99, $this->beverage->cost());
    }

}