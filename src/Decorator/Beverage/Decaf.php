<?php
namespace Kondrat\DesignPatterns\Decorator\Beverage;

use \Kondrat\DesignPatterns\Decorator\Beverage\AbstractBeverage;

class Decaf extends AbstractBeverage
{
    public function cost()
    {
        return 1.05;
    }

    public function getDescription()
    {
        return "Decaf";
    }
}