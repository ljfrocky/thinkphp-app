<?php

namespace app\http\middleware;

class Init
{
    public function handle($request, \Closure $next)
    {
        $request->reqid = uniqid('', true);
        return $next($request);
    }
}
