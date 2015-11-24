<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class CheesePizza extends AbstractPizza
{
    public function getName()
    {
        return "cheese";
    }
}