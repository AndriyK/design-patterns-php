<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

use Kondrat\DesignPatterns\CompoundPatterns\Duck;
use Kondrat\DesignPatterns\CompoundPatterns\Factory\AbstractDuckFactory;
use Kondrat\DesignPatterns\CompoundPatterns\Factory\AbstractGooseFactory;
use Kondrat\DesignPatterns\CompoundPatterns\Goose;

class DuckSimulator
{
    public function simulate(AbstractDuckFactory $duckFactory, AbstractGooseFactory $gooseFactory)
    {
        $redheadDuck = $duckFactory->createRedheadDuck();
        $duckCall = $duckFactory->createDuckCall();
        $rubberDuck = $duckFactory->createRubberDuck();
        $gooseDuck = $gooseFactory->createGoose();

        echo "**** Duck Simulator - with observer ****\n";

        $flockOfDucks = new Flock();
        $flockOfDucks->add($redheadDuck);
        $flockOfDucks->add($duckCall);
        $flockOfDucks->add($rubberDuck);
        $flockOfDucks->add($gooseDuck);


        $flockOfMallards = new Flock();
        $mallardDuck1 = $duckFactory->createMallardDuck();
        $mallardDuck2 = $duckFactory->createMallardDuck();
        $mallardDuck3 = $duckFactory->createMallardDuck();
        $mallardDuck4 = $duckFactory->createMallardDuck();
        $flockOfMallards->add($mallardDuck1);
        $flockOfMallards->add($mallardDuck2);
        $flockOfMallards->add($mallardDuck3);
        $flockOfMallards->add($mallardDuck4);

        $flockOfDucks->add($flockOfMallards);

        $quackologist = new Quackologist();
        $flockOfDucks->registerObserver($quackologist);

        $this->_simulate($flockOfDucks);

        echo "Duck quacked " . QuackCounter::getQuacks() . " times\n";
    }

    private function _simulate(QuackObservableInterface $duck)
    {
        echo $duck->quack();
    }
}