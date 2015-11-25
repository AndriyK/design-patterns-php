<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

class NYStyleVeggiePizza  extends AbstractNYStylePizza
{
    public function getName()
    {
        return "veggie (NY style)";
    }
}
