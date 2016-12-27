<?php

namespace App\Http\Controllers\Ask;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\Archive;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Auth;

class AskStoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    function commitStore(Request $request){
        if(!empty($request->input('contents')) && !empty($request->input('id'))){
            DB::table('answers')->insert(
                ['id'=>$request->input('id'),'contents'=>$request->input('contents')]
            );
        }
        echo '回答成功';
    }
}
