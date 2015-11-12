<?php
namespace Kondrat\DesignPatterns\Strategy;

use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyBehaviorInterface;
use \Kondrat\DesignPatterns\Strategy\FlyBehavior\FlyWithWings;

use \Kondrat\DesignPatterns\Strategy\QuackBehavior\QuackBehaviorInterface;
use \Kondrat\DesignPatterns\Strategy\QuackBehavior\Quack;


abstract class AbstractDuck
{
	protected $flyBehavior;
	protected $quackBehavior;

	public function __construct() 
	{
		$this->flyBehavior = new FlyWithWings();
		$this->quackBehavior = new Quack();
	}

	public abstract function display();

	public function performFly()
	{
		return $this->flyBehavior->fly();
	}

	public function performQuack()
	{
		return $this->quackBehavior->quak();
	}

	public function setFlyBehavior(FlyBehaviorInterface $f)
	{
		$this->flyBehavior = $f;
	}

	public function setQuackBehavior(QuackBehaviorInterface $q)
	{
		$this->quackBehavior = $q;
	}
}