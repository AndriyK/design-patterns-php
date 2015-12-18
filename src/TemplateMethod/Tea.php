<?php
namespace Kondrat\DesignPatterns\TemplateMethod;

use Kondrat\DesignPatterns\TemplateMethod\AbstractCoffeineBeverage;

class Tea extends AbstractCoffeineBeverage
{
    protected function brew()
    {
        $this->beverage .= "Steeping the tea.\n";
    }

    protected function addCondiments()
    {
        $this->beverage .= "Adding lemon.\n";
    }
}