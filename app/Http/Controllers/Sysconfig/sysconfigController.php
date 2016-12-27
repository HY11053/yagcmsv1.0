<?php

namespace App\Http\Controllers\Sysconfig;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class sysconfigController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    function getConfig(){

        $config=config('app.webname');
     

        return view('sysconfig.config',compact('config'));

    }
}
