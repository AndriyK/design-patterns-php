<?php
namespace Kondrat\DesignPatterns\Strategy\FlyBehavior;

use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyBehaviorInterface;

class FlyRocketPowered implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I'm flying on the Ro-o-o-c-k-e-t!";
    }
}