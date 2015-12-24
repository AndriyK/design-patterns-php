<?php
namespace Kondrat\DesignPatterns\Iterator\ConcreteIterator;

class CafeMenuIterator extends DinerMenuIterator
{
    public function __construct(Array $menuItems)
    {
        $this->items = array_values($menuItems);
    }
}