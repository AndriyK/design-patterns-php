<?php
namespace Kondrat\DesignPatterns\Adapter;

class MallardDuck implements DuckInterface
{
    public function quack()
    {
        return "Quack";
    }

    public function fly()
    {
        return "I am flying";
    }
}