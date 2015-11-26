<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class ThinCrustDough
{
    private $name = "Thin crust dough";

    public function __toString()
    {
        return $this->name;
    }
}