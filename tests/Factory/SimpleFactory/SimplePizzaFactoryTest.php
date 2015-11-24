<?php
use \Kondrat\DesignPatterns\Factory\SimpleFactory\SimplePizzaFactory;
use \Kondrat\DesignPatterns\Factory\SimpleFactory\PizzaStore;

class SimplePizzaFactoryTest extends PHPUnit_Framework_TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new SimplePizzaFactory();
    }

    public function testCreatePizzaCheese()
    {
        $pizza = $this->factory->createPizza(PizzaStore::PIZZA_CHEESE);
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\SimpleFactory\CheesePizza', $pizza);

        $pizza = $this->factory->createPizza('by-default');
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\SimpleFactory\CheesePizza', $pizza);
    }

    public function testCreatePizzaClam()
    {
        $pizza = $this->factory->createPizza(PizzaStore::PIZZA_CLAM);
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\SimpleFactory\ClamPizza', $pizza);
    }

    public function testCreatePizzaPepperoni()
    {
        $pizza = $this->factory->createPizza(PizzaStore::PIZZA_PEPPERONI);
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\SimpleFactory\PepperoniPizza', $pizza);
    }

    public function testCreatePizzaVeggie()
    {
        $pizza = $this->factory->createPizza(PizzaStore::PIZZA_VEGGIE);
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\SimpleFactory\VeggiePizza', $pizza);
    }
}