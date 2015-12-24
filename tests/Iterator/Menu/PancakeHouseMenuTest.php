<?php
use \Kondrat\DesignPatterns\Iterator\Menu\PancakeHouseMenu;

class PancakeHouseMenuTest extends PHPUnit_Framework_TestCase
{
    public function testCreateIterator()
    {
        $menu = new PancakeHouseMenu();
        $iterator = $menu->createIterator();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Iterator\ConcreteIterator\IteratorInterface', $iterator);
    }
}
