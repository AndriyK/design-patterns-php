<?php
namespace Kondrat\DesignPatterns\Iterator\ConcreteIterator;

class MenuItem
{
    private $name;
    private $description;
    private $vegeterian;
    private $price;

    public function __construct($name, $description, $vegeterian, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegeterian = $vegeterian;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function isVegeterian()
    {
        return $this->vegeterian;
    }
}