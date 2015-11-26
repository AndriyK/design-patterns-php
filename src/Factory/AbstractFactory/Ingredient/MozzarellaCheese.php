<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class MozzarellaCheese
{
    private $name = "Mozzarella cheese";

    public function __toString()
    {
        return $this->name;
    }
}