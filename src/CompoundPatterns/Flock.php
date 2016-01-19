<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class Flock implements QuackObservableInterface
{
    private $quackers = [];

    public function add(QuackObservableInterface $quacker)
    {
        $this->quackers[] = $quacker;
    }

    public function quack()
    {
        $res = '';
        foreach($this->quackers as $quacker) {
            $res .= $quacker->quack();
        }
        return $res;
    }

    public function registerObserver(ObserverInterface $o)
    {
        foreach($this->quackers as $quacker) {
            $quacker->registerObserver($o);
        }
    }

    public function notifyObservers()
    {
        foreach($this->quackers as $quacker) {
            $quacker->notifyObservers();
        }
    }
}