<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

class RedheadDuck extends AbstractDuck
{
    public function quack()
    {
        echo "Quack\n";
        $this->notifyObservers();

    }
}