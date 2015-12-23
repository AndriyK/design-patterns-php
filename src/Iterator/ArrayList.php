<?php
namespace Kondrat\DesignPatterns\Iterator;

class ArrayList
{
    private $data;

    public function add($elem)
    {
        $this->data[] = $elem;
    }

    public function get($index)
    {
        return $this->data[$index];
    }

    public function length()
    {
        return count($this->data);
    }
}