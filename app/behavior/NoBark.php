<?php
namespace App\Behavior;

/**
 * Class NoBark
 * @package App\Behavior
 *
 * A concrete implementation of the speak behavior. This speaking behavior
 * actually doesn't speak.
 */
class NoBark implements SpeakBehavior
{

    public function speak()
    {
        return "I don't speak!";
    }
}