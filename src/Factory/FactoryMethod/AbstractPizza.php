<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod;

abstract class AbstractPizza
{
    protected $dough = "";
    protected $sauce = "";
    protected $toppings = array();

    abstract public function getName();

    public function prepare()
    {
        $res = "Preparing {$this->getName()} pizza...\n";
        $res .= "Tossing {$this->dough}...\n";
        $res .= "Adding {$this->sauce}...\n";
        $res .= "Adding toppings: " . implode(', ', $this->toppings) . "...";
        return $res;
    }

    public function bake()
    {
        return "Bake for 25 min at 350.";
    }

    public function cut()
    {
        return "Cutting pizza into diagonal slices.";
    }

    public function box()
    {
        return "Place pizza in official PizzaStore box.";
    }
}
