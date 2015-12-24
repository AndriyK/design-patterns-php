<?php
namespace Kondrat\DesignPatterns\Iterator\Menu;

use Kondrat\DesignPatterns\Iterator\ConcreteIterator\CafeMenuIterator;
use Kondrat\DesignPatterns\Iterator\Menu\MenuItem;

class CafeMenu implements MenuInterface
{
    private $menuItems = array();

    public function __construct()
    {
        $this->addItem("Veggie Burger and Air Fries", "Veggie Burger on a whole wheat bun, lettuce, tomato, and fries", true, 3.99);
        $this->addItem("Soup of the day", "A cup of the soup of the day, with a side salad", false, 3.69);
        $this->addItem("Burrito", "A large burrito, with whole pinto beans, salsa, guacamole", true, 4.29);
    }

    private function addItem($name, $description, $vegeterian, $price)
    {
        $this->menuItems[$name] = new MenuItem($name, $description, $vegeterian, $price);
    }

    public function createIterator()
    {
        return new CafeMenuIterator($this->menuItems);
    }
}