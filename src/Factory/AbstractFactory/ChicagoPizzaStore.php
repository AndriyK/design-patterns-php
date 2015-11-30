<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory;

use Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\ChicagoPizzaIngredientFactory;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\ClamPizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\PepperoniPizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\VeggiePizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\CheesePizza;

class ChicagoPizzaStore extends AbstractPizzaStore
{
    protected function createPizza($type){

        $ingFactory = new ChicagoPizzaIngredientFactory();

        if ($type == self::PIZZA_CLAM) {
            $pizza = new ClamPizza($ingFactory);
            $pizza->setName("Chicago Style Clam Pizza");
            return $pizza;
        }

        if ($type == self::PIZZA_PEPPERONI) {
            $pizza = new PepperoniPizza($ingFactory);
            $pizza->setName("Chicago Style Pepperoni Pizza");
            return $pizza;
        }

        if ($type == self::PIZZA_VEGGIE) {
            $pizza = new VeggiePizza($ingFactory);
            $pizza->setName("Chicago Style Veggie Pizza");
            return $pizza;
        }

        $pizza = new CheesePizza($ingFactory);
        $pizza->setName("Chicago Style Cheese Pizza");
        return $pizza;
    }
}