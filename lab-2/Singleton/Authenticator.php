<?php

class Authenticator
{
    private static $instance;

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }
    public function someBusinessLogic()
    {
        // ...
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(){
//        $class = static::class;
        if(!isset(self::$instance)){
            self::$instance = new static();
        }
        return self::$instance;
    }

}