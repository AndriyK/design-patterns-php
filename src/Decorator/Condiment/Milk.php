<?php
namespace Kondrat\DesignPatterns\Decorator\Condiment;

use \Kondrat\DesignPatterns\Decorator\Condiment\AbstractCondimentDecorator;

class Milk extends AbstractCondimentDecorator
{
    public function cost()
    {
        return 0.10 + $this->beverage->cost();
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Milk";
    }
}