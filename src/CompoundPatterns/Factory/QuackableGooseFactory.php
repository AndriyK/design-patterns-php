<?php
namespace Kondrat\DesignPatterns\CompoundPatterns\Factory;

use Kondrat\DesignPatterns\CompoundPatterns\Goose;

class QuackableGooseFactory extends AbstractGooseFactory
{
    public function createGoose() {
        return new Goose\GooseAdapter( new Goose\Goose() );
    }
}