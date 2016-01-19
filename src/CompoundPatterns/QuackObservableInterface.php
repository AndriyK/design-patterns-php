<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

interface QuackObservableInterface
{
    public function registerObserver(ObserverInterface $observer);
    public function notifyObservers();
}