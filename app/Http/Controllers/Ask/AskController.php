<?php

namespace App\Http\Controllers\Ask;

use Illuminate\Http\Request;
use App\Model\category;
use App\Model\Archive;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;

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
        $thisAskInfos=DB::table('asks')->where('id',$matches[1])->first()?DB::table('asks')->where('id',$matches[1])->first():abort(404);

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
    /*
     * 问答写入
     */
    function askStore(Request $request){
        $this->middleware('auth.admin:admin');
        $title=$request->input('asktitle');
        $description=$request->input('textareacontent');
        DB::table('asks')->insert(
          ['title'=>$title,'description'=>$description,'title'=>$title,'time'=>date('Y-m-d H:i:s',time()),'viewnum'=>rand(100,200),'ip'=>$request->ip()]
        );

    }
    /*
     * 问答编辑
     */
    function getEditask(Request $request){

        $this->middleware('auth.admin:admin');
        $title=DB::table('asks')->where('id',$request->id)->value('title');
        $description=DB::table('asks')->where('id',$request->id)->value('description');
        $id=$request->id;
        return view('ask.askedit',compact('title','description','id'));
    }

    /*
 * 问答编辑提交处理
 */
    function askUpdate(Request $request){
        $this->middleware('auth.admin:admin');
        if(!empty($request->input('textareacontent')) && !empty($request->input('id')) && !empty($request->input('asktitle'))){
            DB::table('asks')->where('id',$request->input('id'))->update(['title'=>$request->input('asktitle'),'description'=>$request->input('textareacontent')]);
            return redirect(route('ask'));
        }

    }
    /*
     * 删除问答及回答内容
     */
    function delAsk(Request $request){
        $this->middleware('auth.admin:admin');
        DB::table('asks')->where('asks.id', '=', $request->id)->delete();
        DB::table('answers')->where('answers.id', '=', $request->id)->delete();
        return redirect(route('ask'));
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
