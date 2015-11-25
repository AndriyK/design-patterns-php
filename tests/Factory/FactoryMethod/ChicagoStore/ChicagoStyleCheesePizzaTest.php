<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStyleCheesePizza;

class ChicagoStyleCheesePizzaTest extends PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ChicagoStyleCheesePizza();
    }

    public function testGetName()
    {
        $expected = "cheese (Chicago style)";
        $this->assertEquals($expected, $this->pizza->getName());
    }

    public function testPrepare()
    {
        $expected = "Preparing cheese (Chicago style) pizza...\n";
        $expected .= "Tossing Extra Thick Crust Dough...\n";
        $expected .= "Adding Plum Tomato Sauce...\n";
        $expected .= "Adding toppings: Shredded Mozzarella Cheese, Paper...";

        $this->assertEquals($expected, $this->pizza->prepare());
    }

    public function testBake()
    {
        $expected = "Bake for 25 min at 350.";
        $this->assertEquals($expected, $this->pizza->bake());
    }

    public function testCut()
    {
        $expected = "Cutting the pizza into square slices.";
        $this->assertEquals($expected, $this->pizza->cut());
    }

    public function testBox()
    {
        $expected = "Place pizza in official PizzaStore box.";
        $this->assertEquals($expected, $this->pizza->box());
    }

}