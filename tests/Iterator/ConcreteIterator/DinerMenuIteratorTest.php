<?php
use \Kondrat\DesignPatterns\Iterator\ConcreteIterator\DinerMenuIterator;

class DinerMenuIteratorTest extends PHPUnit_Framework_TestCase
{
    public function testIteration()
    {
        $list = ['elem 1', 'elem 2'];

        $iterator = new DinerMenuIterator($list);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 1', $elem);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 2', $elem);

        $this->assertFalse($iterator->hasNext());
    }
}
