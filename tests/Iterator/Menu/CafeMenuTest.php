<?php
use \Kondrat\DesignPatterns\Iterator\Menu\CafeMenu;

class CafeMenuTest extends PHPUnit_Framework_TestCase
{
    public function testCreateIterator()
    {
        $menu = new CafeMenu();
        $iterator = $menu->createIterator();
        $this->assertInstanceOf('Kondrat\DesignPatterns\Iterator\ConcreteIterator\IteratorInterface', $iterator);
    }
}
