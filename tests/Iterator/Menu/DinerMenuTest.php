<?php
use \Kondrat\DesignPatterns\Iterator\Menu\DinerMenu;

class DinerMenuTest extends PHPUnit_Framework_TestCase
{
    public function testCreateIterator()
    {
        $menu = new DinerMenu();
        $iterator = $menu->createIterator();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Iterator\ConcreteIterator\IteratorInterface', $iterator);
    }
}
