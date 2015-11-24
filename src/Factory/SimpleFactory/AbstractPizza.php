<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

abstract class AbstractPizza
{
    abstract public function getName();

    public function prepare()
    {
        return "Preparing {$this->getName()} pizza...";
    }

    public function bake()
    {
        return "Baking pizza, 20 min with temperature 250...";
    }

    public function cut()
    {
        return "Cutting pizza...";
    }

    public function box()
    {
        return "Pizza is packed to nice firm box";
    }
}
