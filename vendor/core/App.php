<?php


namespace vendor\core;

use vendor\core\Registry;
class App
{
    public static $app;

    public function __construct()
    {
        self::$app = \vendor\core\Registry::instance();
    }

}
























