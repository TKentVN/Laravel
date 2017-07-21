<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class CheckDatabase
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
        // try {
        //     DB::connection()->getPdo();
        // } catch (\Exception $e) {
        //      return redirect('/setup');
        // }

        return $next($request);
    }
}
