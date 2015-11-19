<?php
use \Kondrat\DesignPatterns\Decorator\StarbuzzCoffee;

class StarbuzzCoffeeTest extends PHPUnit_Framework_TestCase
{
    protected $starbuzz;

    protected function setUp()
    {
        $this->starbuzz = new StarbuzzCoffee();
    }

    public function testGetEspresso()
    {
        $expected = "Espresso: $1.99";
        $this->assertEquals($expected, $this->starbuzz->getEspresso());
    }

    public function testGetDarkRoastWithDoubleMochaAndWhip()
    {
        $expected = "DarkRoast, Mocha, Mocha, Whip: $1.49";
        $this->assertEquals($expected, $this->starbuzz->getDarkRoastWithDoubleMochaAndWhip());
    }

    public function testGetHouseBlendWithMochaSoyAndWhip()
    {
        $expected = "HouseBlend, Mocha, Soy, Whip: $1.34";
        $this->assertEquals($expected, $this->starbuzz->getHouseBlendWithMochaSoyAndWhip());
    }
}