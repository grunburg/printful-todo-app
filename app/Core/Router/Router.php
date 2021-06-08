<?php

namespace App\Core\Router;

class Router
{

    public static function get(string $route, callable $fn)
    {
       self::match('GET', $route, $fn);
    }

    public static function post(string $route, callable $fn)
    {
        self::match('POST', $route, $fn);
    }

    public static function match($method, $route, $fn)
    {
        $request = explode('?', $_SERVER['REQUEST_URI']);

        if ($method === $_SERVER['REQUEST_METHOD']) {
            if (preg_match(self::pattern($route), $request[0], $values)) {
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
