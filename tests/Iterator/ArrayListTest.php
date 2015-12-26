<?php
use \Kondrat\DesignPatterns\Iterator\ArrayList;

class ArrayListTest extends PHPUnit_Framework_TestCase
{
    public function testFunctionality()
    {
        $list = new ArrayList();

        $list->add('test 1');

        $this->assertEquals('test 1', $list->get(0));
        $this->assertEquals(1, $list->length());

        $list->add('test 2');

        $this->assertEquals('test 2', $list->get(1));
        $this->assertEquals(2, $list->length());
    }
}
