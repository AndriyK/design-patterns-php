<?php
namespace Kondrat\DesignPatterns\Command\Receiver;

class GarageDoor
{
    public function up()
    {
        return "Garage door is open.\n";
    }

    public function down()
    {
        return "Garage door is closed.\n";
    }
}