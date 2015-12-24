<?php
use \Kondrat\DesignPatterns\Iterator\ConcreteIterator\CafeMenuIterator;

class CafeMenuIteratorTest extends PHPUnit_Framework_TestCase
{
    public function testIteration()
    {
        $list = ['key 1' => 'elem 1', 'key 2' => 'elem 2'];

        $iterator = new CafeMenuIterator($list);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 1', $elem);

        $this->assertTrue($iterator->hasNext());

        $elem = $iterator->next();
        $this->assertEquals('elem 2', $elem);

        $this->assertFalse($iterator->hasNext());
    }
}
