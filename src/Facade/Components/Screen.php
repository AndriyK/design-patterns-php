<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Screen
{
    private $name = "Screen";

    public function down()
    {
        return "{$this->name} going down.\n";
    }

    public function up()
    {
        return "{$this->name} going up.\n";
    }
}