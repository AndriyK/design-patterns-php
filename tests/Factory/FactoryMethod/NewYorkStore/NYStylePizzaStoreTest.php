<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore\NYStylePizzaStore;
use \Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizzaStore;

class NYStylePizzaStoreTest extends PHPUnit_Framework_TestCase
{
    protected $store;

    protected function setUp()
    {
        $this->store = new NYStylePizzaStore();
    }

    public function testOrderPizzaCheese()
    {
        $expected = "Preparing cheese (NY style) pizza...\n";
        $expected .= "Tossing Thin Crust Dough...\n";
        $expected .= "Adding Marinara Sauce...\n";
        $expected .= "Adding toppings: Grated Reggiano Cheese...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CHEESE));
    }

    public function testOrderPizzaVeggie()
    {
        $expected = "Preparing veggie (NY style) pizza...\n";
        $expected .= "Tossing Thin Crust Dough...\n";
        $expected .= "Adding Marinara Sauce...\n";
        $expected .= "Adding toppings: Grated Reggiano Cheese...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_VEGGIE));
    }

    public function testOrderPizzaClam()
    {
        $expected = "Preparing clam (NY style) pizza...\n";
        $expected .= "Tossing Thin Crust Dough...\n";
        $expected .= "Adding Marinara Sauce...\n";
        $expected .= "Adding toppings: Grated Reggiano Cheese...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CLAM));
    }

    public function testOrderPizzaPepperoni()
    {
        $expected = "Preparing pepperoni (NY style) pizza...\n";
        $expected .= "Tossing Thin Crust Dough...\n";
        $expected .= "Adding Marinara Sauce...\n";
        $expected .= "Adding toppings: Grated Reggiano Cheese...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting pizza into diagonal slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_PEPPERONI));
    }
}