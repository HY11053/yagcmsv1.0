<?php

namespace App\Http\Controllers\Comparision;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class ComparisionController extends Controller
{
    //
    function indexComparision(Request $request)
    {
        preg_match('/^comparision\/([0-9]+)-([0-9]+)-([0-9]+)\.shtml/',$request->path(),$matches);
        $datas=DB::table('archives')->join('addonarticles','archives.id','=','addonarticles.aid')->where('mid',1)->where('ismake','1')->whereIn('id',[$matches[1],$matches[2],$matches[3]])->get();
        dd($datas);
        return view('frontend.pk',compact('datas'));
    }
}
