<?php

namespace App\Http\Controllers\phone;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class PhoneController extends Controller
{
    //
    function postPhoneDates(Request $request)
    {
        if(!empty($request->input('tel')))
        {
            if(DB::table('phones')->where('phone',$request->input('tel'))->value('phone'))
            {
                exit('号码已存在，请勿重复提交！！！');
            }else
            {

                DB::table('phones')->insert(
                    [
                        'phone' => $request->input('tel'),
                        'name' => $request->input('name'),
                        'addr'=>$request->input('adr'),
                        'content'=>$request->input('notes'),
                        'sex'=>$request->input('sex'),
                        'host'=>$request->input('host'),
                        'ip'=>$request->ip(),
                        'time'=>date('Y-m-d :h:i:s'),
                        'note'=>0,
                ]
                );
            }
        }else
        {
            exit('号码不能为空');
        }
    }
    //电话提交管理
    function getPhoneDates()
    {
        $dates=DB::table('phones')->orderBy('id','desc')->paginate(100);
        return view('phone.index',compact('dates'));
    }
}
