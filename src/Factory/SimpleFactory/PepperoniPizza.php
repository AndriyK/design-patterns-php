<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class PepperoniPizza extends AbstractPizza
{
    public function getName()
    {
        return "pepperoni";
    }
}