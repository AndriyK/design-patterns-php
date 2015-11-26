<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class FrozenClams
{
    private $name = "Frozen clams";

    public function __toString()
    {
        return $this->name;
    }
}