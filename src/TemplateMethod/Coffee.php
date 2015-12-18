<?php
namespace Kondrat\DesignPatterns\TemplateMethod;

use Kondrat\DesignPatterns\TemplateMethod\AbstractCoffeineBeverage;

class Coffee extends AbstractCoffeineBeverage
{
    protected function brew()
    {
        $this->beverage .= "Dripping cofee through filter.\n";
    }

    protected function addCondiments()
    {
        $this->beverage .= "Adding sugar and milk.\n";
    }
}