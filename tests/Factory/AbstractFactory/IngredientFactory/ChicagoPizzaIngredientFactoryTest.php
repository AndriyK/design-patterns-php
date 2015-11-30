<?php
use \Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\ChicagoPizzaIngredientFactory;

class ChicagoPizzaIngredientFactoryTest extends PHPUnit_Framework_TestCase
{
    protected $factory;

    protected function setUp()
    {
        $this->factory = new ChicagoPizzaIngredientFactory();
    }

    public function testCreateDough()
    {
        $ing = $this->factory->createDough();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThickCrustDough', $ing);
    }

    public function testCreateSauce()
    {
        $ing = $this->factory->createSauce();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\PlumTomatoSauce', $ing);
    }

    public function testCreateCheese()
    {
        $ing = $this->factory->createCheese();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MozzarellaCheese', $ing);
    }

    public function testCreatePepperoni()
    {
        $ing = $this->factory->createPepperoni();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\SlicedPepperoni', $ing);
    }

    public function testCreateClam()
    {
        $ing = $this->factory->createClam();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FrozenClams', $ing);
    }

    public function testCreateVeggies()
    {
        $veg = $this->factory->createVeggies();
        $this->assertEquals(['black olives', 'spinach', 'eggplant'], $veg);
    }
}