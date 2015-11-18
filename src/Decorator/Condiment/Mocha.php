<?php
namespace Kondrat\DesignPatterns\Decorator\Condiment;

use \Kondrat\DesignPatterns\Decorator\Condiment\AbstractCondimentDecorator;

class Mocha extends AbstractCondimentDecorator
{
    public function cost()
    {
        return 0.20 + $this->beverage->cost();
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
}