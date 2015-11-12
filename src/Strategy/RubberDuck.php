<?php
namespace Kondrat\DesignPatterns\Strategy;

use \Kondrat\DesignPatterns\Strategy\AbstractDuck;
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyNoWay;
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Squeak;

class RubberDuck extends AbstractDuck {

    public function __construct() 
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display()
    {
        return "I'm RubberDuck!";
    }
}