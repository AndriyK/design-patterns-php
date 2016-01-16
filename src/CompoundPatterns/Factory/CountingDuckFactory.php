<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Factory;

use Kondrat\DesignPatterns\CompoundPatterns\Duck;
use Kondrat\DesignPatterns\CompoundPatterns\QuackCounter;

class CountingDuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck() {
        return new QuackCounter( new Duck\MallardDuck() );
    }

    public function createRedheadDuck(){
        return new QuackCounter( new Duck\RedheadDuck() );
    }

    public function createDuckCall(){
        return new QuackCounter( new Duck\DuckCall() );
    }

    public function createRubberDuck(){
        return new QuackCounter( new Duck\RubberDuck() );
    }
}