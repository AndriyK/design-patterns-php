<?php
namespace Kondrat\DesignPatterns\CompoundPatterns;

class Flock implements QuackableInterface
{
    private $quackers = [];

    public function add(QuackableInterface $quacker)
    {
        $this->quackers[] = $quacker;
    }

    public function quack()
    {
        $res = '';
        foreach($this->quackers as $quacker) {
            $res .= $quacker->quack();
        }
        return $res;
    }
}