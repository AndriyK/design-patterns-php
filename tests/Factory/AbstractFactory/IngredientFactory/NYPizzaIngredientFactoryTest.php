<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;

class NYPizzaIngredientFactoryTest extends PHPUnit_Framework_TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new NYPizzaIngredientFactory();
    }

    public function testCreateDough()
    {
        $ing = $this->factory->createDough();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThinCrustDough', $ing);
    }

    public function testCreateSauce()
    {
        $ing = $this->factory->createSauce();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MarinaraSauce', $ing);
    }

    public function testCreateCheese()
    {
        $ing = $this->factory->createCheese();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ReggianoCheese', $ing);
    }

    public function testCreatePepperoni()
    {
        $ing = $this->factory->createPepperoni();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\SlicedPepperoni', $ing);
    }

    public function testCreateClam()
    {
        $ing = $this->factory->createClam();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FreshClams', $ing);
    }

    public function testCreateVeggies()
    {
        $veg = $this->factory->createVeggies();
        $this->assertEquals(['garlic', 'onion', 'mushroom', 'red paper'], $veg);
    }
}