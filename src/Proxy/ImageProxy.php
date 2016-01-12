<?php
namespace Kondrat\DesignPatterns\Proxy;

class ImageProxy implements GraphicInterface
{
    private $name;

    private $image = null;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function draw()
    {
        if(is_null($this->image)) {
            $this->image = new Image($this->name);
        }
        return $this->image->draw();
    }

    public function getExtent()
    {
        if(!is_null($this->image)){
            return $this->image->getExtent();
        }

        return "Default extent for image {$this->name} is DX,DY.\n";
    }
}