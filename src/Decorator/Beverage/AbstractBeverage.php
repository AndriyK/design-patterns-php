<?php
namespace Kondrat\DesignPatterns\Decorator\Beverage;

abstract class AbstractBeverage
{
    public abstract function cost();

    public function getDescription()
    {
        return "Unknown beverage";
    }
}
