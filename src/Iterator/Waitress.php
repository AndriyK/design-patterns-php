<?php
namespace Kondrat\DesignPatterns\Iterator;

use Kondrat\DesignPatterns\Iterator\ConcreteIterator\IteratorInterface;
use Kondrat\DesignPatterns\Iterator\Menu\DinerMenu;
use Kondrat\DesignPatterns\Iterator\Menu\PancakeHouseMenu;

class Waitress
{
    private $pancakeHouseMenu;
    private $dinerMenu;

    public function __construct(PancakeHouseMenu $pancakeHouseMenu, DinerMenu $dinerMenu)
    {
        $this->pancakeHouseMenu = $pancakeHouseMenu;
        $this->dinerMenu = $dinerMenu;
    }

    public function printMenu()
    {
        $res = "MENU\n------\nBREAKFAST";
        $res .= $this->printSingleMenu($this->pancakeHouseMenu->createIterator());

        $res = "\nLUNCH";
        $res .= $this->printSingleMenu($this->dinerMenu->createIterator());
    }

    private function printSingleMenu(IteratorInterface $iterator)
    {
        $res = "";
        while($iterator->hasNext()) {
            $item = $iterator->next();
            $res .= $item->getName() + ", " + $item->getPrice() + " -- " + $item->getDescription();
        }
        return $res;
    }
}