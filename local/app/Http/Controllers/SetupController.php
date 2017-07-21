<?php

namespace App\Http\Controllers;

use App\Dsolu\Core\DSController;
use App\Dsolu\Library\EnvEditor as Env;

class SetupController extends DSController
{
    
    public function index(){
        $env = new Env;
        //echo $env->getValue("DB_DATABASE");
        return view("setup.setup");
        // $env->changeEnv([
        //     $request->key => $request->value
        // ]);

    }
}
