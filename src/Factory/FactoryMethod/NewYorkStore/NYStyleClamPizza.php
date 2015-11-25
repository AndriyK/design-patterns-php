<?php
namespace Kondrat\DesignPatterns\Factory\FactoryMethod\NewYorkStore;

class NYStyleClamPizza  extends AbstractNYStylePizza
{
    public function getName()
    {
        return "clam (NY style)";
    }
}
