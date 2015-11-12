<?php
namespace Kondrat\DesignPatterns\Strategy\FlyBehavior;

use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        return "I'm flying with wings!";
    }
}