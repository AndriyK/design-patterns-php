<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class VeggiePizza extends AbstractPizza
{
    public function getName()
    {
        return "veggie";
    }

    public function bake()
    {
        return "Baking pizza, 30 min with temperature 200...";
    }
}