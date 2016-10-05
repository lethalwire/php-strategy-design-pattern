<?php
namespace App\Model;

use App\Behavior\NoBark;
use App\Behavior\NoWalk;

/**
 * Class ToyLabrador
 * @package App\Model
 *
 * A concrete implementation of the Dog class. This dog can't walk
 * or speak.
 */
class ToyLabrador extends Dog
{

    /**
     * ToyLabrador constructor.
     *
     * Defines the necessary behavior to prevent speaking and walking.
     */
    public function __construct() {
        $this->setSpeakBehavior(new NoBark());
        $this->setWalkBehavior(new NoWalk());
    }

    /**
     * Don't speak or walk.
     *
     * @return string
     * @see Dog::display()
     */
    public function display()
    {
        $display = "I'm a Toy Labrador.";
        $display .= " | Speaking: " . $this->speak();
        $display .= " | Walking: " . $this->walk();
        return $display;
    }
}
