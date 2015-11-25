<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\ChicagoStore;

use Kondrat\DesignPatterns\Factory\FactoryMethod\AbstractPizza;

abstract class AbstractChicagoStylePizza extends AbstractPizza
{
    public function __construct()
    {
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        $this->toppings = ["Shredded Mozzarella Cheese", "Paper"];
    }

    public function cut()
    {
        return "Cutting the pizza into square slices.";
    }
}
