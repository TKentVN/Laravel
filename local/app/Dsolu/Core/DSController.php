<?php
Namespace App\Dsolu\Core;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
class DSController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct (){

         $this->middleware(function ($request, $next) {
            $data = session()->all();
            $language = session('language',config('app.locale'));
            $app = app();
            $app->setlocale($language);
            return $next($request);
        });
    }
}