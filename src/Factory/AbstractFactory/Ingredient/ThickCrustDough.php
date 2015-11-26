<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class ThickCrustDough
{
    private $name = "Thick crust dough";

    public function __toString()
    {
        return $this->name;
    }
}