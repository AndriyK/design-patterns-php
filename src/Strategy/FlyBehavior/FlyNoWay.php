<?php
namespace Kondrat\DesignPatterns\Strategy\FlyBehavior;

use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyBehaviorInterface;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I can't fly...";
    }
}