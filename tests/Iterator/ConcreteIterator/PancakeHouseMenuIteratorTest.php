<?php
use \Kondrat\DesignPatterns\Iterator\ConcreteIterator\PancakeHouseMenuIterator;
use Kondrat\DesignPatterns\Iterator\ArrayList;

class PancakeHouseMenuIteratorTest extends PHPUnit_Framework_TestCase
{
    public function testIteration()
    {
        $list = new ArrayList();
        $list->add('elem 1');
        $list->add('elem 2');

        $iterator = new PancakeHouseMenuIterator($list);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 1', $elem);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 2', $elem);

        $this->assertFalse($iterator->hasNext());
    }
}
