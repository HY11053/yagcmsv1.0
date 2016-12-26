<?php

namespace App\Http\Controllers\Ask;

use Illuminate\Http\Request;
use App\Model\category;
use App\Model\Archive;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class AskController extends Controller
{
    /*
     *问答前台展示列表
     */
    function indexAsklists(){
        //栏目部分
        $categorys=new category;
        $brandaiticle= new Archive;
        //品牌导航部分
        $navs=$categorys->where('reid','1')->orderBy('id','asc')->get();
        $navstopdir=substr($categorys->where('id','1')->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
        $typelinks=$categorys->where('reid',0)->get();
        //炒货导航部分
        $chaohuodir=$this->getType(8)->typedir;
        $brandaiticles=$brandaiticle->where('typeid',8)->where('mid',1)->take(10)->get();

        //进口零食导航
        $jinkoulingshidir=$this->getType(9)->typedir;
        $jinkoulingshiarticle=$brandaiticle->where('typeid',9)->where('mid',1)->take(10)->get();
        $asklists=DB::table('asks')->paginate(15);
        return view('frontend.ask',compact('navs','navstopdir','typelinks','chaohuodir','brandaiticles','jinkoulingshidir','jinkoulingshiarticle','asklists'));
    }
    /*
     * 前台问答详情页面
     */
    function infosAsklists(Request $request){
    //栏目部分
        preg_match('/^ask\/([0-9]+)\.shtml$/',$request->path(),$matches);
        $thisAskInfos=DB::table('asks')->where('id',$matches[1])->first();
        $thisAskInfoscomits=DB::table('answers')->where('id',$matches[1])->get();
        $thisAskInfoscomitscount=DB::table('answers')->where('id',$matches[1])->count();
        $categorys=new category;
        $brandaiticle= new Archive;
        //品牌导航部分
        $navs=$categorys->where('reid','1')->orderBy('id','asc')->get();
        $navstopdir=substr($categorys->where('id','1')->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
        $typelinks=$categorys->where('reid',0)->get();
        //炒货导航部分
        $chaohuodir=$this->getType(8)->typedir;
        $brandaiticles=$brandaiticle->where('typeid',8)->where('mid',1)->take(10)->get();

        //进口零食导航
        $jinkoulingshidir=$this->getType(9)->typedir;
        $jinkoulingshiarticle=$brandaiticle->where('typeid',9)->where('mid',1)->take(10)->get();
        return view('frontend.askinfo',compact('navs','navstopdir','typelinks','chaohuodir','brandaiticles','jinkoulingshidir','jinkoulingshiarticle','thisAskInfos','thisAskInfoscomits','thisAskInfoscomitscount'));

    }

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
    function commitStore(Request $request){
        if(!empty($request->input('contents')) && !empty($request->input('id'))){
            DB::table('answers')->insert(
                ['id'=>$request->input('id'),'contents'=>$request->input('contents')]
            );
        }
        dd($request->all());
    }
    /*
        *
        * 栏目信息获取
        */
    function getType($id){

        $categorys=new category;

        return $categorys->where('id',$id)->first();
    }
    /*
 * 栏目导航获取
 */
    function typeinfos(){
        //栏目部分
        $categorys=new category;
        $brandaiticle= new Archive;
        //品牌导航部分
        $navs=$categorys->where('reid','1')->orderBy('id','asc')->get();
        $navstopdir=substr($categorys->where('id','1')->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
        $typelinks=$categorys->where('reid',0)->get();
        //炒货导航部分
        $chaohuodir=$this->getType(8)->typedir;
        $brandaiticles=$brandaiticle->where('typeid',8)->where('mid',1)->take(10)->get();

        //进口零食导航
        $jinkoulingshidir=$this->getType(9)->typedir;
        $jinkoulingshiarticle=$brandaiticle->where('typeid',9)->where('mid',1)->take(10)->get();
    }
}
