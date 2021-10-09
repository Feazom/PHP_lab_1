<?php

namespace App;

class MagicClass
{
    public function __construct()
    {
        print("__construct\n");
    }

    public function __destruct()
    {
        print("__destruct\n");
    }

    public function __call($name, $arguments)
    {
        print("__call\n");
    }

    public static function __callStatic($name, $arguments)
    {
        print("__callStatic\n");
    }

    public function __get($name)
    {
        print("__get\n");
    }

    public function __set($name, $value)
    {
        print("__set\n");
    }

    public function __isset($name)
    {
        print("__isset\n");
    }

    public function __unset($name)
    {
        print("__unset\n");
    }

    public function __sleep()
    {
        print("__sleep\n");
        return [];
    }

    public function __wakeup()
    {
        print("__wakeup\n");
    }

//    public function __serialize()
//    {
//        print("__serialize\n");
//        return [];
//    }

//    public function __unserialize(array $data)
//    {
//        print("__unserialize\n");
//    }

    public function __toString()
    {
        print("__toString\n");
        return 'MagicClass';
    }

    public function __invoke()
    {
        print("__invoke\n");
    }

    public static function __set_state($array)
    {
//        print("__set_state\n");
        return "__set_state\n";
    }

    public function __clone()
    {
        print("__clone\n");
    }

    public function __debugInfo()
    {
        print("__debugInfo\n");
    }
}