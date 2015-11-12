<?php
namespace Kondrat\DesignPatterns\Strategy;

use \Kondrat\DesignPatterns\Strategy\AbstractDuck;

class MallarDuck extends AbstractDuck
{
    public function display()
    {
        return "I'm MallarDuck!";
    }
}