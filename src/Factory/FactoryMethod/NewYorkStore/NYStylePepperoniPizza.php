<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

class NYStylePepperoniPizza  extends AbstractNYStylePizza
{
    public function getName()
    {
        return "pepperoni (NY style)";
    }
}
