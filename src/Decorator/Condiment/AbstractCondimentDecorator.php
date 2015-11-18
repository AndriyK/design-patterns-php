<?php
namespace Kondrat\DesignPatterns\Decorator\Condiment;

use \Kondrat\DesignPatterns\Decorator\Beverage\AbstractBeverage;

abstract class AbstractCondimentDecorator extends AbstractBeverage
{
    protected $beverage;

    public function __construct(AbstractBeverage $b)
    {
        $this->beverage = $b;
    }
}