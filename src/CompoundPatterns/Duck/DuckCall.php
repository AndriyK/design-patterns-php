<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

class DuckCall extends AbstractDuck
{
    public function quack()
    {
        echo "Kwak\n";
        $this->notifyObservers();
    }
}