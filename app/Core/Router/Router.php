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

    public static function put(string $route, callable $fn)
    {
        self::match('PUT', $route, $fn);
    }

    public static function delete(string $route, callable $fn)
    {
        self::match('DELETE', $route, $fn);
    }

    private static function match($method, $route, $fn)
    {
        $uri = explode('?', $_SERVER['REQUEST_URI']);
        $request = $_SERVER['REQUEST_METHOD'];

        if (preg_match(self::pattern($route), $uri[0], $values) && $request === $method) {
            call_user_func_array($fn, array_slice($values, 1));
            return;
        }
    }

    private static function pattern($route): string
    {
        return sprintf('#^%s$#', preg_replace('#:([^/]+)#', '([^/]+)', $route));
    }

}
