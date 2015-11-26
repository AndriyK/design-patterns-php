<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class PlumTomatoSauce
{
    private $name = "Plum tomato sauce";

    public function __toString()
    {
        return $this->name;
    }
}