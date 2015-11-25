<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

class ChicagoStyleClamPizza  extends AbstractChicagoStylePizza
{
    public function getName()
    {
        return "clam (Chicago style)";
    }
}
