<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\CheesePizza;

class CheesePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new CheesePizza();
    }

    public function testGetName()
    {
        $expected = "cheese";
        $this->assertEquals($expected, $this->pizza->getName());
    }

    public function testPrepare()
    {
        $expected = "Preparing cheese pizza...";
        $this->assertEquals($expected, $this->pizza->prepare());
    }

    public function testBake()
    {
        $expected = "Baking pizza, 20 min with temperature 250...";
        $this->assertEquals($expected, $this->pizza->bake());
    }

    public function testCut()
    {
        $expected = "Cutting pizza...";
        $this->assertEquals($expected, $this->pizza->cut());
    }

    public function testBox()
    {
        $expected = "Pizza is packed to nice firm box";
        $this->assertEquals($expected, $this->pizza->box());
    }
}