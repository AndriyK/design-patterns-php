<?php
use \Kondrat\DesignPatterns\Decorator\Beverage\HouseBlend;

class HouseBlendTest extends PHPUnit_Framework_TestCase
{
    protected $beverage;

    protected function setUp()
    {
        $this->beverage = new HouseBlend();
    }

    public function testGetDescription()
    {
        $this->assertEquals("HouseBlend", $this->beverage->getDescription());
    }

    public function testCost()
    {
        $this->assertEquals(0.89, $this->beverage->cost());
    }

}