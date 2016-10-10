<?php

namespace Core;

class Register
{
    protected static $_object=[];
    static function set($alias,$object)
    {
        self::$_object[$alias]=$object;
    }
    function _unset($alias)
    {
        unset(self::$_object[$alias]);
    }
    static function get($alias)
    {
        return self::$_object[$alias];
    }
}