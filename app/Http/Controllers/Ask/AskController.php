<?php

namespace App\Http\Controllers\Ask;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    //
    /*
     * 问答列表
     */
    function getAsklists(){
        $asklists=DB::table('asks')->paginate(15);
        return view('ask.asklist',compact('asklists'));
    }
    /*
     * 问题添加
     */
    function addAsklists(){
        return view('ask.askadd');
    }
    function askStore(Request $request){
        $title=$request->input('asktitle');
        $description=$request->input('textareacontent');
        //dd();
        DB::table('asks')->insert(
          ['title'=>$title,'description'=>$description,'title'=>$title,'time'=>date('Y-m-d H:i:s',time()),'viewnum'=>rand(100,200),'ip'=>$request->ip()]
        );

    }
}
