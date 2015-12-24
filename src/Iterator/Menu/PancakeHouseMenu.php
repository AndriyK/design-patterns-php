<?php
namespace Kondrat\DesignPatterns\Iterator\Menu;

use Kondrat\DesignPatterns\Iterator\ArrayList;
use Kondrat\DesignPatterns\Iterator\ConcreteIterator\PancakeHouseMenuIterator;

class PancakeHouseMenu implements MenuInterface
{
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = new ArrayList();

        $this->addItem("K&B's Pancake Breakfast", "Pancakes with scrambled eggs, and toast", true, 2.99);
        $this->addItem("Regular Pancake Breakfast", "Pancakes with fried eggs, sausage", false, 2.99);
        $this->addItem("Blueberry Pancakes", "Pancakes made with fresh blueberries", true, 3.49);
    }

    private function addItem($name, $description, $vegeterian, $price)
    {
        $this->menuItems->add(new MenuItem($name, $description, $vegeterian, $price));
    }

    public function createIterator()
    {
        return new PancakeHouseMenuIterator($this->menuItems);
    }
}