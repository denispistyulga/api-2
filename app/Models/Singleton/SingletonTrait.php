<?php

namespace App\Models\Singleton;


trait SingletonTrait{

    private static $instance=null;


    private function __construct()
    {

    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    static public function getInstance(){
        return static::$instance ?? (static::$instance = new static());
    }

}
