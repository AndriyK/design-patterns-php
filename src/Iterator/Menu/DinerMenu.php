<?php
namespace Kondrat\DesignPatterns\Iterator\Menu;

use Kondrat\DesignPatterns\Iterator\ConcreteIterator\DinerMenuIterator;

class DinerMenu
{
    const MAX_ITEMS = 3;

    private $numberOfItems = 0;
    private $menuItems = array();

    public function __construct()
    {
        $this->addItem("Vegeterian BLT", "(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
        $this->addItem("BLT", "Bacon with lettuce & tomato on whole wheat", false, 2.99);
        $this->addItem("Soup of the day", "Soup of the day, with a side of potato salad", false, 3.29);
    }

    private function addItem($name, $description, $vegeterian, $price)
    {
        if($this->numberOfItems > self::MAX_ITEMS){
            throw new Exception('Too many menu items');
        }

        $this->menuItems[$this->numberOfItems++] = new MenuItem($name, $description, $vegeterian, $price);
    }

    public function createIterator()
    {
        return new DinerMenuIterator($this->menuItems);
    }
}