<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStyleVeggiePizza;

class ChicagoStyleVeggiePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ChicagoStyleVeggiePizza();
    }

    public function testGetName()
    {
        $expected = "veggie (Chicago style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}