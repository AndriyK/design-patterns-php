<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

class ChicagoStylePepperoniPizza  extends AbstractChicagoStylePizza
{
    public function getName()
    {
        return "pepperoni (Chicago style)";
    }
}
