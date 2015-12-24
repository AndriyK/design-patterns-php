<?php
namespace Kondrat\DesignPatterns\Iterator\ConcreteIterator;

use Kondrat\DesignPatterns\Iterator\ArrayList;

class PancakeHouseMenuIterator implements IteratorInterface
{
    private $items;
    private $position = 0;

    public function __construct(ArrayList $menuItems)
    {
        $this->items = $menuItems;
    }

    public function next()
    {
        $item = $this->items->get($this->position);
        $this->position++;
        return $item;
    }

    public function hasNext()
    {
        if($this->position >= $this->items->length()){
            return false;
        }
        return true;
    }
}