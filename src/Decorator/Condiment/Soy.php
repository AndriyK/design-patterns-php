<?php
namespace Kondrat\DesignPatterns\Decorator\Condiment;

use \Kondrat\DesignPatterns\Decorator\Condiment\AbstractCondimentDecorator;

class Soy extends AbstractCondimentDecorator
{
    public function cost()
    {
        return 0.15 + $this->beverage->cost();
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }
}