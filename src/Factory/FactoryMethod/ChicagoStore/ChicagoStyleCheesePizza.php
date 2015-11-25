<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

class ChicagoStyleCheesePizza  extends AbstractChicagoStylePizza
{
    public function getName()
    {
        return "cheese (Chicago style)";
    }
}
