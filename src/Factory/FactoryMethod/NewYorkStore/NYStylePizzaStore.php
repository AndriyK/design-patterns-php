<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

use Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizzaStore;


class NYStylePizzaStore extends AbstractPizzaStore
{
    protected function createPizza($type)
    {
        if ($type == AbstractPizzaStore::PIZZA_PEPPERONI) {
            return new NYStylePepperoniPizza();
        }

        if ($type == AbstractPizzaStore::PIZZA_VEGGIE) {
            return new NYStyleVeggiePizza();
        }

        if ($type == AbstractPizzaStore::PIZZA_CLAM) {
            return new NYStyleClamPizza();
        }

        return new NYStyleCheesePizza();
    }
}