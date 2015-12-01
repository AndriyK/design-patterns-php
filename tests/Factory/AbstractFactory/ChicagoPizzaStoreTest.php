<?php

use \Kondrat\DesignPatterns\Factory\AbstractFactory\AbstractPizzaStore;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\ChicagoPizzaStore;


class ChicagoPizzaStoreTest extends \PHPUnit_Framework_TestCase
{
    protected $store;

    protected function setUp()
    {
        $this->store = new ChicagoPizzaStore();
    }

    public function testOrderPizzaCheese()
    {
        $expected = "Preparing Chicago Style Cheese pizza...\n";
        $expected .= "Thick crust dough\n";
        $expected .= "Plum tomato sauce\n";
        $expected .= "Mozzarella cheese\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CHEESE));
    }

    public function testOrderPizzaClam()
    {
        $expected = "Preparing Chicago Style Clam pizza...\n";
        $expected .= "Thick crust dough\n";
        $expected .= "Plum tomato sauce\n";
        $expected .= "Frozen clams\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CLAM));
    }

    public function testOrderPizzaPepperoni()
    {
        $expected = "Preparing Chicago Style Pepperoni pizza...\n";
        $expected .= "Thick crust dough\n";
        $expected .= "Plum tomato sauce\n";
        $expected .= "Sliced pepperoni\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_PEPPERONI));
    }

    public function testOrderPizzaVeggie()
    {
        $expected = "Preparing Chicago Style Veggie pizza...\n";
        $expected .= "Thick crust dough\n";
        $expected .= "Plum tomato sauce\n";
        $expected .= "black olives, spinach, eggplant\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_VEGGIE));
    }

}