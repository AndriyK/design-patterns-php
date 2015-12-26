<?php
namespace Kondrat\DesignPatterns\Iterator;

use Kondrat\DesignPatterns\Iterator\ConcreteIterator\IteratorInterface;
use Kondrat\DesignPatterns\Iterator\Menu\MenuInterface;

class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;
    private $cafeMenu;

    public function __construct(MenuInterface $pancakeHouseMenu, MenuInterface $dinerMenu, MenuInterface $cafeMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
        $this->cafeMenu = $cafeMenu;
    }

    public function printMenu()
    {
        $res = "MENU\n------\nBREAKFAST\n";
        $res .= $this->printSingleMenu($this->pancakeHouseMenu->createIterator());

        $res .= "\nLUNCH\n";
        $res .= $this->printSingleMenu($this->dinerMenu->createIterator());

        $res .= "\nCAFE\n";
        $res .= $this->printSingleMenu($this->cafeMenu->createIterator());

        return $res;
    }

    private function printSingleMenu(IteratorInterface $iterator)
    {
        $res = "";
        while($iterator->hasNext()) {
            $item = $iterator->next();
            $res .= $item->getName() . ", " . $item->getPrice() . " -- " . $item->getDescription() . "\n";
        }
        return $res;
    }
}