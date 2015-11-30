<?php
namespace Kondrat\DesignPatterns\Factory\AbstractFactory\Pizza;

class ClamPizza extends  AbstractPizza
{
    public function prepare()
    {
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->clam = $this->ingredientFactory->createClam();

        $res = "Preparing {$this->getName()} pizza...\n";

        return $res . parent::__toString($this);
    }
}
