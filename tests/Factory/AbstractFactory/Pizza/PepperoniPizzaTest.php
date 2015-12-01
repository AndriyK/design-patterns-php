<?php
namespace AbstractFactory;

use \Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\PepperoniPizza;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

class PepperoniPizzaTest extends \PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new PepperoniPizza( new NYPizzaIngredientFactory());
        $this->pizza->setName('Pepperoni');
    }

    public function testPrepare()
    {
        $expected = "Preparing Pepperoni pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Sliced pepperoni";

        $this->assertEquals($expected, $this->pizza->prepare());
    }
}