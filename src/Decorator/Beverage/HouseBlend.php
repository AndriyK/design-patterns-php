<?php
namespace Kondrat\DesignPatterns\Decorator\Beverage;

use \Kondrat\DesignPatterns\Decorator\Beverage\AbstractBeverage;

class HouseBlend extends AbstractBeverage
{
    public function cost()
    {
        return 0.89;
    }

    public function getDescription()
    {
        return "HouseBlend";
    }
}