<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStyleVeggiePizza;

class NYStyleVeggiePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new NYStyleVeggiePizza();
    }

    public function testGetName()
    {
        $expected = "veggie (NY style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }
}