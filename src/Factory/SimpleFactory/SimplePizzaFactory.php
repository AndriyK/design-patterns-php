<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class SimplePizzaFactory
{
    public function createPizza($type)
    {
        if ($type == PizzaStore::PIZZA_PEPPERONI) {
            return new PepperoniPizza();
        }

        if ($type == PizzaStore::PIZZA_VEGGIE) {
            return new VeggiePizza();
        }

        if ($type == PizzaStore::PIZZA_CLAM) {
            return new ClamPizza();
        }

        return new CheesePizza();
    }
}