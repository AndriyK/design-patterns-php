<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

use Kondrat\DesignPatterns\CompoundPatterns\QuackableInterface;

class MallardDuck implements QuackableInterface
{
    public function quack()
    {
        return "Quack\n";
    }
}