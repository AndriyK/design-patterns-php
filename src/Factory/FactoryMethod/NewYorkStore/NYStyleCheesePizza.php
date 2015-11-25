<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

class NYStyleCheesePizza  extends AbstractNYStylePizza
{
    public function getName()
    {
        return "cheese (NY style)";
    }
}
