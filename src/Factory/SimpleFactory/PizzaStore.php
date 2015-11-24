<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class PizzaStore
{
    const PIZZA_CHEESE = 'cheese';
    const PIZZA_CLAM = 'clam';
    const PIZZA_PEPPERONI = 'pepperoni';
    const PIZZA_VEGGIE = 'veggie';

    private $factory;

    public function __construct(SimplePizzaFactory $f)
    {
        $this->factory = $f;
    }

    public function orderPizza($type)
    {
        $pizza = $this->factory->createPizza($type);

        $res = $pizza->prepare();
        $res .= "\n";
        $res .= $pizza->bake();
        $res .= "\n";
        $res .= $pizza->cut();
        $res .= "\n";
        $res .= $pizza->box();
        $res .= "\n";

        return $res;
    }
}