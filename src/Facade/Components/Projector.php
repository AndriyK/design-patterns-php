<?php
namespace Kondrat\DesignPatterns\Facade\Components;

class Projector
{
    public function down()
    {
        return __CLASS__ . " going down.\n";
    }

    public function up()
    {
        return __CLASS__ . " going up.\n";
    }
}