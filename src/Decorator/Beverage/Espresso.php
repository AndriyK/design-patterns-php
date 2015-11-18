<?php
namespace Kondrat\DesignPatterns\Decorator\Beverage;

use \Kondrat\DesignPatterns\Decorator\Beverage\AbstractBeverage;

class Espresso extends AbstractBeverage
{
    public function cost()
    {
        return 1.99;
    }

    public function getDescription()
    {
        return "Espresso";
    }
}