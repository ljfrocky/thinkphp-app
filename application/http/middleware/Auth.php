<?php

namespace app\http\middleware;

use think\facade\Cookie;

class Auth
{
    public function handle($request, \Closure $next)
    {
        if (!Cookie::has('token')) {
            return response("需要登录", 401);
        }
        return $next($request);
    }
}
