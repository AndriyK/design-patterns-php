<?php
use \Kondrat\DesignPatterns\Iterator\Waitress;
use Kondrat\DesignPatterns\Iterator\Menu\DinerMenu;
use Kondrat\DesignPatterns\Iterator\Menu\PancakeHouseMenu;
use Kondrat\DesignPatterns\Iterator\Menu\CafeMenu;

class WaitressTest extends PHPUnit_Framework_TestCase
{
    public function testPrintMenu()
    {
        $waitress = new Waitress(new PancakeHouseMenu(), new DinerMenu(), new CafeMenu());
        $menu = $waitress->printMenu();

        $expected = <<<EOD
MENU
------
BREAKFAST
K&B's Pancake Breakfast, 2.99 -- Pancakes with scrambled eggs, and toast
Regular Pancake Breakfast, 2.99 -- Pancakes with fried eggs, sausage
Blueberry Pancakes, 3.49 -- Pancakes made with fresh blueberries

LUNCH
Vegeterian BLT, 2.99 -- (Fakin') Bacon with lettuce & tomato on whole wheat
BLT, 2.99 -- Bacon with lettuce & tomato on whole wheat
Soup of the day, 3.29 -- Soup of the day, with a side of potato salad

CAFE
Veggie Burger and Air Fries, 3.99 -- Veggie Burger on a whole wheat bun, lettuce, tomato, and fries
Soup of the day, 3.69 -- A cup of the soup of the day, with a side salad
Burrito, 4.29 -- A large burrito, with whole pinto beans, salsa, guacamole

EOD;

        $this->assertEquals($expected, $menu);
    }
}
