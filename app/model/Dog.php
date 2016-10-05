<?php
namespace App\Model;

use App\Behavior\Bark;
use App\Behavior\SpeakBehavior;
use App\Behavior\Walk;
use App\Behavior\WalkBehavior;

abstract class Dog
{
    protected $speakBehavior;
    protected $walkBehavior;

    public function __construct() {
        $this->speakBehavior = new Bark();
        $this->walkBehavior = new Walk();
    }

    public function speak()
    {
        return $this->speakBehavior->speak();
    }

    public function walk()
    {
        return $this->walkBehavior->walk();
    }

    /**
     * @param SpeakBehavior $speakBehavior
     */
    public function setSpeakBehavior(SpeakBehavior $speakBehavior)
    {
        $this->speakBehavior = $speakBehavior;
    }

    /**
     * @param WalkBehavior $walkBehavior
     */
    public function setWalkBehavior(WalkBehavior $walkBehavior) {
        $this->walkBehavior = $walkBehavior;
    }

    public abstract function display();
}