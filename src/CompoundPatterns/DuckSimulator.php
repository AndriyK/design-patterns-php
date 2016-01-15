<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

use Kondrat\DesignPatterns\CompoundPatterns\Duck;
use Kondrat\DesignPatterns\CompoundPatterns\Goose;

class DuckSimulator
{
    public function simulate()
    {
        $mallardDuck = new QuackCounter( new Duck\MallardDuck() );
        $redheadDuck = new QuackCounter( new Duck\RedheadDuck() );
        $duckCall = new QuackCounter( new Duck\DuckCall() );
        $rubberDuck = new QuackCounter( new Duck\RubberDuck() );
        $gooseDuck = new Goose\GooseAdapter( new Goose\Goose() );

        echo "**** Duck Simulator ****\n";

        $this->_simulate($mallardDuck);
        $this->_simulate($redheadDuck);
        $this->_simulate($duckCall);
        $this->_simulate($rubberDuck);
        $this->_simulate($gooseDuck);

        echo "Duck quacked " . QuackCounter::getQuacks() . " times\n";
    }

    private function _simulate(QuackableInterface $duck)
    {
        echo $duck->quack();
    }
}