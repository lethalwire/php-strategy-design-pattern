<?php

namespace App;

use App\Behavior\Bark;
use App\Behavior\Walk;
use App\Model\Labrador;
use App\Model\ToyLabrador;

/**
 * Class Demo
 * @package App
 *
 * Creates several implementations of Dog and displays their behaviors
 */
class Demo {

    public function __construct()
    {
        echo 'In Demo <br />';
        $this->run();
    }

    public function run()
    {
        $dog = new Labrador();
        echo $dog->display();

        echo '<br />';

        $toyDog = new ToyLabrador();
        echo $toyDog->display();

        echo '<br />';
        echo '<strong>Changing ToyLabrador behavior at runtime</strong>';
        echo '<br />';

        // Change Dog behavior at runtime
        $toyDog->setWalkBehavior(new Walk());
        $toyDog->setSpeakBehavior(new Bark());
        echo $toyDog->display();
    }
}
