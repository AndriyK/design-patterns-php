<?php
namespace AbstractFactory;

use \Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\ClamPizza;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

class ClamPizzaTest extends \PHPUnit_Framework_TestCase
{
    protected $pizza;

    protected function setUp()
    {
        $this->pizza = new ClamPizza( new NYPizzaIngredientFactory());
        $this->pizza->setName('Clam');
    }

    public function testPrepare()
    {
        $expected = "Preparing Clam pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Fresh clams";

        $this->assertEquals($expected, $this->pizza->prepare());
    }
}