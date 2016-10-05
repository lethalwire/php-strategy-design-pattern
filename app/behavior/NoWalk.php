<?php
namespace App\Behavior;

/**
 * Class NoWalk
 * @package App\Behavior
 *
 * A concrete implementation of the walk behavior. This walking behavior
 * actually doesn't walk.
 */
class NoWalk implements WalkBehavior
{

    public function walk()
    {
        return "I can't walk!";
    }
}