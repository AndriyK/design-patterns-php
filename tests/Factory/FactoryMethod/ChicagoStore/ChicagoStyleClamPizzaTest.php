<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStyleClamPizza;

class ChicagoStyleClamPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ChicagoStyleClamPizza();
    }

    public function testGetName()
    {
        $expected = "clam (Chicago style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}