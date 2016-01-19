<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class Observable implements QuackObservableInterface
{
    private $observers = [];
    private $duck;

    public function __construct(QuackObservableInterface $duck)
    {
        $this->duck = $duck;
    }

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer){
            $observer->update($this->duck);
        }
    }


}