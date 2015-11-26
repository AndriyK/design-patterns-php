<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class SlicedPepperoni
{
    private $name = "Sliced pepperoni";

    public function __toString()
    {
        return $this->name;
    }
}