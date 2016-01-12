<?php
namespace Kondrat\DesignPatterns\Proxy;

class Image implements GraphicInterface
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function draw()
    {
        return "Heavy drawing image {$this->name} operation.\n";
    }

    public function getExtent()
    {
        return "Heavy operation defining image extent. Extent is X,Y.\n";
    }
}
