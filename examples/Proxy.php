<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Kondrat\DesignPatterns\Proxy\DocumentEditor;

$editor = new DocumentEditor();

$editor->addElem(new \Kondrat\DesignPatterns\Proxy\Text('Some text that should be printed on the screen'));
$editor->addElem(new \Kondrat\DesignPatterns\Proxy\Image('little_img.jpg'));
$editor->addElem(new \Kondrat\DesignPatterns\Proxy\ImageProxy('very_big_image.tiff'));

echo "<pre>";

echo $editor->calculateExtents();
echo "\n";
echo $editor->show();


