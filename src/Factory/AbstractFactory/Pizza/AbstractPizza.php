<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza;

use Kondrat\DesignPatterns\Factory\AbstractFactory\IngredientFactory\PizzaIngredientFactoryInterface;

abstract class AbstractPizza
{
    protected $name = "";
    protected $dough = "";
    protected $sauce = "";
    protected $veggies = array();
    protected $cheese = "";
    protected $pepperoni = "";
    protected $clam = "";

    protected $ingredientFactory = null;

    public function __construct(PizzaIngredientFactoryInterface $f)
    {
        $this->ingredientFactory = $f;
    }

    abstract public function prepare();

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

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        $str = implode("\n", [$this->dough, $this->sauce, $this->cheese, $this->pepperoni, $this->clam]);
        $veggie = implode(', ', $this->veggies);
        $str .= empty($veggie) ? "" : "\n {$veggie}";

        return $str;
    }
}
