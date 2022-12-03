<?php

namespace App\Providers\Service;


class Postcard {

    protected static function resolveFacade($name)
    {
        return app()[$name];
    }

    public static function __callStatic($methods, $arguments)
    {
        return (self::resolveFacade('Postcard')) -> $methods(...$arguments);
    }
}

