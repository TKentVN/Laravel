<?php

namespace App\Http\Controllers;

use App\Dsolu\Core\DSController;
use App\Dsolu\Library\EnvEditor as Env;

class HomeController   extends DSController
{
    
    public function index(){
        return view('welcome');
    }
}
