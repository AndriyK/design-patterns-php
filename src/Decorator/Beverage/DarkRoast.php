<?php
namespace Kondrat\DesignPatterns\Decorator\Beverage;

use \Kondrat\DesignPatterns\Decorator\Beverage\AbstractBeverage;

class DarkRoast extends AbstractBeverage
{
    public function cost()
    {
        return 0.99;
    }

    public function getDescription()
    {
        return "DarkRoast";
    }
}