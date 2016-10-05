<?php

namespace App;

use App\Model\Labrador;
use App\Model\ToyLabrador;

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
    }
}
