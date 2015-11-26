<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory;

use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FrozenClams;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MozzarellaCheese;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\PlumTomatoSauce;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThickCrustDough;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    public function createDough()
    {
        return new ThickCrustDough();
    }

    public function createSauce()
    {
        return new PlumTomatoSauce();
    }

    public function createCheese()
    {
        return new MozzarellaCheese();
    }

    public function createVeggies()
    {
        return ['black olives', 'spinach', 'eggplant'];
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createClam()
    {
        return new FrozenClams();
    }

}