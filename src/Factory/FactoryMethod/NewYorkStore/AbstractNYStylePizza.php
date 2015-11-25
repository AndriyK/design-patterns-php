<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

use Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizza;

abstract class AbstractNYStylePizza extends AbstractPizza
{
    public function __construct()
    {
        $this->dough = "Thin Crust Dough";
        $this->sauce = "Marinara Sauce";
        $this->toppings = ["Grated Reggiano Cheese"];
    }
}
