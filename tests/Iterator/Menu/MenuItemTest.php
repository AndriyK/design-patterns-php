<?php
use \Kondrat\DesignPatterns\Iterator\Menu\MenuItem;

class MenuItemTest extends PHPUnit_Framework_TestCase
{
    private $item;

    protected function setUp()
    {
        $this->item = new MenuItem('name', 'description', true, 5.00);
    }

    public function testGetName()
    {
        $this->assertEquals('name', $this->item->getName());
    }

    public function testGetDescription()
    {
        $this->assertEquals('description', $this->item->getDescription());
    }

    public function testIsVegeterian()
    {
        $this->assertTrue($this->item->isVegeterian());
    }

    public function testGetPrice()
    {
        $this->assertEquals(5.00, $this->item->getPrice());
    }
}
