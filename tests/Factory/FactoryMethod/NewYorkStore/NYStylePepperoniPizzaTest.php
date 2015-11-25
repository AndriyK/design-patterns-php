<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStylePepperoniPizza;

class NYStylePepperoniPizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new NYStylePepperoniPizza();
    }

    public function testGetName()
    {
        $expected = "pepperoni (NY style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}