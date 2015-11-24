<?php
namespace Kondrat\DesignPatterns\Factory\SimpleFactory;

class ClamPizza extends AbstractPizza
{
    public function getName()
    {
        return "clam";
    }
}