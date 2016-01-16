<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Factory;

use Kondrat\DesignPatterns\CompoundPatterns\Goose;

class GooseFactory extends AbstractGooseFactory
{
    public function createGoose() {
        return new Goose\Goose();
    }
}