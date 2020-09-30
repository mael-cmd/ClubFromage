<?php

class Autoloader
{
    static function register()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }
    static function autoload($class)
    {
        $file = str_replace('\\', '/', $class);
        $file = 'C:/Bitnami/wampstack-7.4.6-1/apps/ClubFromage/htdocs/'. $file . '.php';
        return require $file;
        echo var_dump($file);
    }
}
