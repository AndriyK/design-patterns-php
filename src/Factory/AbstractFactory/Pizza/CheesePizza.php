<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza;

abstract class CheesePizza extends  AbstractPizza
{
    public function prepare()
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();

        $res = "Preparing {$this->getName()} pizza...\n";

        return $res . parent::__toString($this);
    }
}
