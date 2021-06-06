<?php

namespace App\Core\Router;

class Router
{

    public static function get(string $route, callable $fn)
    {
       self::match('GET', $route, $fn);
    }

    public static function match($method, $route, $fn)
    {
        if ($method === $_SERVER['REQUEST_METHOD']) {
            if (preg_match(self::pattern($route), $_SERVER['REQUEST_URI'], $values)) {
                call_user_func_array($fn, array_slice($values, 1));
                return;
            }
        }
    }

    public static function pattern($route): string
    {
        return sprintf('#^%s$#', preg_replace('#:([^/]+)#', '([^/]+)', $route));
    }
}
