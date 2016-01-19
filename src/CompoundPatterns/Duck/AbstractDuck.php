<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Duck;

use Kondrat\DesignPatterns\CompoundPatterns\Observable;
use Kondrat\DesignPatterns\CompoundPatterns\ObserverInterface;
use Kondrat\DesignPatterns\CompoundPatterns\QuackObservableInterface;

abstract class AbstractDuck implements QuackObservableInterface
{
    private $observable;

    public function __construct()
    {
        $this->observable = new Observable($this);
    }

    public function registerObserver(ObserverInterface $o)
    {
        $this->observable->registerObserver($o);
    }

    public function notifyObservers()
    {
        $this->observable->notifyObservers();
    }

}