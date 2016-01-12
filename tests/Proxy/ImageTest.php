<?php
use \Kondrat\DesignPatterns\Proxy\Image;

class ImageTest extends PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $image = new Image('img1.jpg');
        $this->assertEquals("Heavy drawing image img1.jpg operation.\n", $image->draw());
    }

    public function testGetExtent()
    {
        $image = new Image('img1.jpg');
        $this->assertEquals("Heavy operation defining image extent. Extent is X,Y.\n", $image->getExtent());
    }
}