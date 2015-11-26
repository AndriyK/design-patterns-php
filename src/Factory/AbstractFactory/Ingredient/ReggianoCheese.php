<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class ReggianoCheese
{
    private $name = "Reggiano cheese";

    public function __toString()
    {
        return $this->name;
    }
}