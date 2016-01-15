<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

use Kondrat\DesignPatterns\CompoundPatterns\QuackableInterface;

class DuckCall implements QuackableInterface
{
    public function quack()
    {
        return "Kwak\n";
    }
}