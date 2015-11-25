<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

class ChicagoStyleVeggiePizza  extends AbstractChicagoStylePizza
{
    public function getName()
    {
        return "veggie (Chicago style)";
    }
}
