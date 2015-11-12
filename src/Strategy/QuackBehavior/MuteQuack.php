<?php
namespace Kondrat\DesignPatterns\Strategy\QuackBehavior;

use \Kondrat\DesignPatterns\Strategy\QuackBehavior\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface
{
    public function quak()
    {
        return "I'm mute: silence...";
    }
}