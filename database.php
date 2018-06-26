<?php

class database
{
    private static $cont  = null;
    public static function disconnect()
    {
        self::$cont = null;
    }

}