<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;
use \Kondrat\DesignPatterns\Factory\SimpleFactory\PizzaStore;

class PizzaStoreTest extends PHPUnit_Framework_TestCase
{
    protected $store;

    protected function setUp()
    {
        $this->store = new PizzaStore( new SimplePizzaFactory() );
    }

    public function testOrderPizza()
    {
        $pizza = $this->store->orderPizza(PizzaStore::PIZZA_CLAM);

        $expected = "Preparing clam pizza...\n";
        $expected .= "Baking pizza, 20 min with temperature 250...\n";
        $expected .= "Cutting pizza...\n";
        $expected .= "Pizza is packed to nice firm box\n";

        $this->assertEquals($expected, $pizza);
    }
}