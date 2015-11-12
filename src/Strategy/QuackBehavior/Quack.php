<?php
namespace Kondrat\DesignPatterns\Strategy\QuackBehavior;

use \Kondrat\DesignPatterns\Strategy\QuackBehavior\QuackBehaviorInterface;

class Quack implements QuackBehaviorInterface
{
    public function quak()
    {
        return "Quak-quak!";
    }
}