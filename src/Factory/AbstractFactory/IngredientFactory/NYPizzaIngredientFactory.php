<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory;

use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ThinCrustDough;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\MarinaraSauce;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\ReggianoCheese;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\SlicedPepperoni;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient\FreshClams;

class NYPizzaIngredientFactory implements PizzaIngredientFactoryInterface
{
    public function createDough()
    {
        return new ThinCrustDough();
    }

    public function createSauce()
    {
        return new MarinaraSauce();
    }

    public function createCheese()
    {
        return new ReggianoCheese();
    }

    public function createVeggies()
    {
        return ['garlic', 'onion', 'mushroom', 'red paper'];
    }

    public function createPepperoni()
    {
        return new SlicedPepperoni();
    }

    public function createClam()
    {
        return new FreshClams();
    }

}