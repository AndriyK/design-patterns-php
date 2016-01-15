<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

use Kondrat\DesignPatterns\CompoundPatterns\QuackableInterface;

class RedheadDuck implements QuackableInterface
{
    public function quack()
    {
        return "Quack\n";
    }
}