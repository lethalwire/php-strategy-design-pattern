<?php
namespace App\Model;

use App\Behavior\SpeakBehavior;
use App\Behavior\WalkBehavior;

/**
 * Class Dog
 * @package App\Model
 *
 * An abstraction of a Dog.
 */
abstract class Dog
{
    protected $speakBehavior;
    protected $walkBehavior;

    /**
     * Make this dog speak.
     *
     * @return mixed
     */
    public function speak()
    {
        return $this->speakBehavior->speak();
    }

    /**
     * Make this dog walk
     *
     * @return mixed
     */
    public function walk()
    {
        return $this->walkBehavior->walk();
    }

    /**
     * Setter for SpeakBehavior
     *
     * @param SpeakBehavior $speakBehavior
     */
    public function setSpeakBehavior(SpeakBehavior $speakBehavior)
    {
        $this->speakBehavior = $speakBehavior;
    }

    /**
     * Setter of WalkBehavior
     *
     * @param WalkBehavior $walkBehavior
     */
    public function setWalkBehavior(WalkBehavior $walkBehavior) {
        $this->walkBehavior = $walkBehavior;
    }

    /**
     * Returns the behavior of this dog.
     *
     * @return mixed
     */
    public abstract function display();
}