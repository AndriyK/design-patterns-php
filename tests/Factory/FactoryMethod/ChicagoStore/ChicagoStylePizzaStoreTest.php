<?php
use \Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore\ChicagoStylePizzaStore;
use \Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizzaStore;

class ChicagoStylePizzaStoreTest extends PHPUnit_Framework_TestCase
{
    protected $store;

    protected function setUp()
    {
        $this->store = new ChicagoStylePizzaStore();
    }

    public function testOrderPizzaCheese()
    {
        $expected = "Preparing cheese (Chicago style) pizza...\n";
        $expected .= "Tossing Extra Thick Crust Dough...\n";
        $expected .= "Adding Plum Tomato Sauce...\n";
        $expected .= "Adding toppings: Shredded Mozzarella Cheese, Paper...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting the pizza into square slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CHEESE));
    }

    public function testOrderPizzaVeggie()
    {
        $expected = "Preparing veggie (Chicago style) pizza...\n";
        $expected .= "Tossing Extra Thick Crust Dough...\n";
        $expected .= "Adding Plum Tomato Sauce...\n";
        $expected .= "Adding toppings: Shredded Mozzarella Cheese, Paper...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting the pizza into square slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_VEGGIE));
    }

    public function testOrderPizzaClam()
    {
        $expected = "Preparing clam (Chicago style) pizza...\n";
        $expected .= "Tossing Extra Thick Crust Dough...\n";
        $expected .= "Adding Plum Tomato Sauce...\n";
        $expected .= "Adding toppings: Shredded Mozzarella Cheese, Paper...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting the pizza into square slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_CLAM));
    }

    public function testOrderPizzaPepperoni()
    {
        $expected = "Preparing pepperoni (Chicago style) pizza...\n";
        $expected .= "Tossing Extra Thick Crust Dough...\n";
        $expected .= "Adding Plum Tomato Sauce...\n";
        $expected .= "Adding toppings: Shredded Mozzarella Cheese, Paper...\n";
        $expected .= "Bake for 25 min at 350.\n";
        $expected .= "Cutting the pizza into square slices.\n";
        $expected .= "Place pizza in official PizzaStore box.\n";

        $this->assertEquals($expected, $this->store->orderPizza(AbstractPizzaStore::PIZZA_PEPPERONI));
    }
}