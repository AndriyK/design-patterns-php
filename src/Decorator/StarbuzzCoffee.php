<?php
namespace Kondrat\DesignPatterns\Decorator;

use Kondrat\DesignPatterns\Decorator\Beverage\DarkRoast;
use Kondrat\DesignPatterns\Decorator\Beverage\Espresso;
use Kondrat\DesignPatterns\Decorator\Beverage\HouseBlend;
use Kondrat\DesignPatterns\Decorator\Condiment\Mocha;
use Kondrat\DesignPatterns\Decorator\Condiment\Soy;
use Kondrat\DesignPatterns\Decorator\Condiment\Whip;

class StarbuzzCoffee
{
    public function getEspresso()
    {
        $beverage = new Espresso();
        return $beverage->getDescription() . ": $" . $beverage->cost();
    }

    public function getDarkRoastWithDoubleMochaAndWhip()
    {
        $beverage = new DarkRoast();
        $beverage = new Mocha($beverage);
        $beverage = new Mocha($beverage);
        $beverage = new Whip($beverage);
        return $beverage->getDescription() . ": $" . $beverage->cost();
    }

    public function getHouseBlendtWithMochaSoyAndWhip()
    {
        $beverage = new HouseBlend();
        $beverage = new Mocha($beverage);
        $beverage = new Soy($beverage);
        $beverage = new Whip($beverage);
        return $beverage->getDescription() . ": $" . $beverage->cost();
    }
}