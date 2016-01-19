<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class QuackCounter implements QuackObservableInterface
{
    private static $numberOfQuacks = 0;

    private $duck;

    public function __construct(QuackObservableInterface $d)
    {
        $this->duck = $d;
    }

    public function quack()
    {
        self::$numberOfQuacks++;
        $this->duck->quack();
    }

    public function registerObserver(ObserverInterface $o)
    {
        return $this->duck->registerObserver($o);
    }

    public function notifyObservers()
    {
        return $this->duck->notifyObservers();
    }

    public static function getQuacks()
    {
        return self::$numberOfQuacks;
    }
}