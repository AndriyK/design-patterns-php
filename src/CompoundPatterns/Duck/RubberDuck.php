<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

class RubberDuck extends AbstractDuck
{
    public function quack()
    {
        echo "Squeak\n";
        $this->notifyObservers();
    }
}