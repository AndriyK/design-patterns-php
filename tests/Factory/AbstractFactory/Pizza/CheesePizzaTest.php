<?php
namespace AbstractFactory;

use \Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\CheesePizza;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

class CheesePizzaTest extends \PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new CheesePizza( new NYPizzaIngredientFactory());
        $this->pizza->setName('Cheese');
    }

    public function testPrepare()
    {
        $expected = "Preparing Cheese pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Reggiano cheese";

        $this->assertEquals($expected, $this->pizza->prepare());
    }

    public function testGetName()
    {
        $this->assertEquals("Cheese", $this->pizza->getName());
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