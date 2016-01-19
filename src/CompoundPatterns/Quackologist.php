<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class Quackologist implements ObserverInterface
{
    public function update(QuackObservableInterface $duck)
    {
        echo "Quackologist: " . get_class($duck) . " just quacked\n";
    }
}