<?php
namespace Kondrat\DesignPatterns\Strategy;

use \Kondrat\DesignPatterns\Strategy\AbstractDuck;
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyNoWay;
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\MuteQuack;

class ModelDuck extends AbstractDuck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        return "I'm ModelDuck!";
    }
}