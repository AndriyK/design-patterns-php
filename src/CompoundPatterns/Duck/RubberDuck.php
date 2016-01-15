<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

use Kondrat\DesignPatterns\CompoundPatterns\QuackableInterface;

class RubberDuck implements QuackableInterface
{
    public function quack()
    {
        return "Squeak\n";
    }
}