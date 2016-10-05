<?php
namespace App\Behavior;

/**
 * Class Walk
 * @package App\Behavior
 *
 * A concrete implementation of the walk behavior. This walking behavior
 * uses all four legs to move.
 */
class Walk implements WalkBehavior
{

    public function walk()
    {
        return "I'm walking on all four.";
    }
}