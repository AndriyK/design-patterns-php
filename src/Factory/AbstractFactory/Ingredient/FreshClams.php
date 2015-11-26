<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Ingredient;

class FreshClams
{
    private $name = "Fresh clams";

    public function __toString()
    {
        return $this->name;
    }
}