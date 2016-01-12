<?php
use Kondrat\DesignPatterns\Proxy\DocumentEditor;
use Kondrat\DesignPatterns\Proxy\Image;

class DocumentEditorTest extends PHPUnit_Framework_TestCase
{
    public function testCalculateExtents()
    {
        $editor = new DocumentEditor();
        $editor->addElem(new Image('picture.gif'));

        $this->assertEquals("Heavy operation defining image extent. Extent is X,Y.\n", $editor->calculateExtents());
    }

    public function testShow()
    {
        $editor = new DocumentEditor();
        $editor->addElem(new Image('picture.gif'));

        $this->assertEquals("Heavy drawing image picture.gif operation.\n", $editor->show());
    }
}