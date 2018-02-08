<?php

namespace App\Http\Middleware;

use Log;
use Closure;
use Illuminate\Http\Request;

class RequestLogMiddleware
{
    /**
     * Simple request logger that logs every incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info("Request Logged\n".sprintf("~~~~\n%s~~~~",(string) $request));
        return $next($request);
    }
}
