<?php
namespace Kondrat\DesignPatterns\TemplateMethod;

abstract class AbstractCoffeineBeverage
{
    protected $beverage;

    final public function prepareReceipe()
    {
        $this->beverage = '';

        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();

        return $this->beverage;
    }

    abstract protected function brew();

    abstract protected function addCondiments();

    protected function boilWater()
    {
        $this->beverage .= "Boiling water.\n";
    }

    protected function pourInCup()
    {
        $this->beverage .= "Pouring into cup.\n";
    }
}