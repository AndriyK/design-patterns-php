<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory;

use Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\NYPizzaIngredientFactory;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\ClamPizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\PepperoniPizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\VeggiePizza;
use Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza\CheesePizza;

class NYPizzaStore extends AbstractPizzaStore
{
    protected function createPizza($type){

        $ingFactory = new NYPizzaIngredientFactory();

        if ($type == self::PIZZA_CLAM) {
            $pizza = new ClamPizza($ingFactory);
            $pizza->setName("NY Style Clam Pizza");
            return $pizza;
        }

        if ($type == self::PIZZA_PEPPERONI) {
            $pizza = new PepperoniPizza($ingFactory);
            $pizza->setName("NY Style Pepperoni Pizza");
            return $pizza;
        }

        if ($type == self::PIZZA_VEGGIE) {
            $pizza = new VeggiePizza($ingFactory);
            $pizza->setName("NY Style Veggie Pizza");
            return $pizza;
        }

        $pizza = new CheesePizza($ingFactory);
        $pizza->setName("NY Style Cheese Pizza");
        return $pizza;
    }
}