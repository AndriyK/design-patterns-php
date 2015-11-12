<?php
namespace Kondrat\DesignPatterns\Strategy\QuackBehavior;

use \Kondrat\DesignPatterns\Strategy\QuackBehavior\QuackBehaviorInterface;

class Squeak implements QuackBehaviorInterface
{
    public function quak()
    {
        return "Piiii-piiii!";
    }
}