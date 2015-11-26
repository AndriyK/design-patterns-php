<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class MarinaraSauce
{
    private $name = "Marinara sauce";

    public function __toString()
    {
        return $this->name;
    }
}