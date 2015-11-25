<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStyleCheesePizza;

class NYStyleCheesePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new NYStyleCheesePizza();
    }

    public function testGetName()
    {
        $expected = "cheese (NY style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }

    public function testPrepare()
    {
        $expected = "Preparing cheese (NY style) pizza...\n";
        $expected .= "Tossing Thin Crust Dough...\n";
        $expected .= "Adding Marinara Sauce...\n";
        $expected .= "Adding toppings: Grated Reggiano Cheese...";

        $this->assertEquals($expected, $this->pizza->prepare());
    }

    public function testBake()
    {
        $expected = "Bake for 25 min at 350.";
        $this->assertEquals($expected, $this->pizza->bake());
    }

    public function testCut()
    {
        $expected = "Cutting pizza into diagonal slices.";
        $this->assertEquals($expected, $this->pizza->cut());
    }

    public function testBox()
    {
        $expected = "Place pizza in official PizzaStore box.";
        $this->assertEquals($expected, $this->pizza->box());
    }

}