<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Factory;

use Kondrat\DesignPatterns\CompoundPatterns\Duck;

class DuckFactory extends AbstractDuckFactory
{
    public function createMallardDuck() {
        return new Duck\MallardDuck();
    }

    public function createRedheadDuck(){
        return new Duck\RedheadDuck();
    }

    public function createDuckCall(){
        return new Duck\DuckCall();
    }

    public function createRubberDuck(){
        return new Duck\RubberDuck();
    }
}