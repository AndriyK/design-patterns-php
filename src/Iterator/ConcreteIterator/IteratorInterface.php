<?php
namespace Kondrat\DesignPatterns\Iterator\ConcreteIterator;

interface IteratorInterface {

    public function hasNext();
    public function next();
}