<?php
use \Kondrat\DesignPatterns\Proxy\ImageProxy;

class ImageProxyTest extends PHPUnit_Framework_TestCase
{
    public function testDraw()
    {
        $image = new ImageProxy('img1.jpg');
        $this->assertEquals("Heavy drawing image img1.jpg operation.\n", $image->draw());
    }

    public function testGetExtent()
    {
        $image = new ImageProxy('img1.jpg');
        $this->assertEquals("Default extent for image img1.jpg is DX,DY.\n", $image->getExtent());
        $image->draw();
        $this->assertEquals("Heavy operation defining image extent. Extent is X,Y.\n", $image->getExtent());
    }
}