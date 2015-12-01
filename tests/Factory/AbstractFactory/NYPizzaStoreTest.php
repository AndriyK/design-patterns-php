<?php

use \Kondrat\DesignPatterns\Factory\AbstractFactory\AbstractPizzaStore;
use \Kondrat\DesignPatterns\Factory\AbstractFactory\NYPizzaStore;


class NYPizzaStoreTest extends \PHPUnit_Framework_TestCase
{
    protected $store;

    protected function setUp()
    {
        $this->store = new NYPizzaStore();
    }

    public function testOrderPizzaCheese()
    {
        $expected = "Preparing NY Style Cheese pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Reggiano cheese\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CHEESE));
    }

    public function testOrderPizzaClam()
    {
        $expected = "Preparing NY Style Clam pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Fresh clams\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CLAM));
    }

    public function testOrderPizzaPepperoni()
    {
        $expected = "Preparing NY Style Pepperoni pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "Sliced pepperoni\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_PEPPERONI));
    }

    public function testOrderPizzaVeggie()
    {
        $expected = "Preparing NY Style Veggie pizza...\n";
        $expected .= "Thin crust dough\n";
        $expected .= "Marinara sauce\n";
        $expected .= "garlic, onion, mushroom, red paper\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_VEGGIE));
    }

}