<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza;

class VeggiePizza extends  AbstractPizza
{
    public function prepare()
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->veggies = $this->ingredientFactory->createVeggies();

        $res = "Preparing {$this->getName()} pizza...\n";

        return $res . parent::__toString($this);
    }
}
