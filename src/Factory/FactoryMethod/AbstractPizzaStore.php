<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod;

abstract class AbstractPizzaStore
{
    const PIZZA_CHEESE = 'cheese';
    const PIZZA_CLAM = 'clam';
    const PIZZA_PEPPERONI = 'pepperoni';
    const PIZZA_VEGGIE = 'veggie';


    public function orderPizza($type)
    {
        $pizza = $this->createPizza($type);

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

    abstract protected function createPizza($type);
}