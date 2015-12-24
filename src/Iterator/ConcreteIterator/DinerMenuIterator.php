<?php
namespace Kondrat\DesignPatterns\Iterator\ConcreteIterator;

class DinerMenuIterator implements IteratorInterface
{
    protected $items = array();
    private $position = 0;

    public function __construct(Array $menuItems)
    {
        $this->items = $menuItems;
    }
    
    public function next()
    {
        $item = $this->items[$this->position];
        $this->position++;
        return $item;
    }

    public function hasNext()
    {
        if($this->position >= count($this->items)){
            return false;
        }
        return true;
    }
}