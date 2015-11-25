<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

use Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizzaStore;

class ChicagoStylePizzaStore extends AbstractPizzaStore
{
    protected function createPizza($type)
    {
        if ($type == AbstractPizzaStore::PIZZA_PEPPERONI) {
            return new ChicagoStylePepperoniPizza();
        }

        if ($type == AbstractPizzaStore::PIZZA_VEGGIE) {
            return new ChicagoStyleVeggiePizza();
        }

        if ($type == AbstractPizzaStore::PIZZA_CLAM) {
            return new ChicagoStyleClamPizza();
        }

        return new ChicagoStyleCheesePizza();
    }
}