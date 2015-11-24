<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\PepperoniPizza;

class PepperoniPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new PepperoniPizza();
    }

    public function testGetName()
    {
        $expected = "pepperoni";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}