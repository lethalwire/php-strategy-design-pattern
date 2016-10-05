<?php
namespace App\Behavior;

/**
 * Class Bark
 * @package App\Behavior
 *
 * A concrete implementation of the speak behavior. This speaking behavior
 * barks and says Woof! Woof!
 */
class Bark implements SpeakBehavior
{

    public function speak()
    {
        return "Woof! Woof!";
    }
}