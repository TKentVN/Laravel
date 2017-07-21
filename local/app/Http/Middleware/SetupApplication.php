<?php

namespace App\Http\Middleware;

use Closure;
use App\Dsolu\Library\EnvEditor as Env;

class SetupApplication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $domain = env("DOMAIN");
        if( !isset($domain) || $domain != getBaseUrl() )
        {
            $env = new Env;
            $env->addData(array("DOMAIN"=>getBaseUrl()));
            return redirect('/setup');
        }
        return $next($request);
    }
}
