<?php
namespace AbstractFactory;

use \Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\VeggiePizza;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

class VeggiePizzaTest extends \PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new VeggiePizza( new NYPizzaIngredientFactory());
        $this->pizza->setName('Veggie');
    }

    public function testPrepare()
    {
        $expected = "Preparing Veggie pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "garlic, onion, mushroom, red paper";

        $this->assertEquals($expected, $this->pizza->prepare());
    }
}