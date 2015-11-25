<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStylePepperoniPizza;

class ChicagoStylePepperoniPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ChicagoStylePepperoniPizza();
    }

    public function testGetName()
    {
        $expected = "pepperoni (Chicago style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}