<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

class MallardDuck extends AbstractDuck
{
   public function quack()
    {
        echo "Quack\n";
        $this->notifyObservers();

    }
}