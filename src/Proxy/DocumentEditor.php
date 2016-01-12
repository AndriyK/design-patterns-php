<?php
namespace Kondrat\DesignPatterns\Proxy;

class DocumentEditor
{
    private $elements = [];

    public function addElem(GraphicInterface $elem)
    {
        $this->elements[] = $elem;
    }

    public function calculateExtents()
    {
        $res = '';
        foreach($this->elements as $elem){
            $res .= $elem->getExtent();
        }
        return $res;
    }

    public function show()
    {
        $res = '';
        foreach($this->elements as $elem){
            $res .= $elem->draw();
        }
        return $res;
    }
}