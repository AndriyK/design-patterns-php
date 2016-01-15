<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class QuackCounter implements QuackableInterface
{
    private static $numberOfQuacks = 0;

    private $duck;

    public function __construct(QuackableInterface $d)
    {
        $this->duck = $d;
    }

    public function quack()
    {
        self::$numberOfQuacks++;
        return $this->duck->quack();
    }

    public static function getQuacks()
    {
        return self::$numberOfQuacks;
    }
}