<?php

namespace App\Http\Controllers\Flink;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\flink;

class FlinkController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    function getIndex(){

        $links=new flink;
        $data_links=$links->all();
        return view('flink.index',compact('data_links'));
    }

    /*
     * 友情链接添加模块
     */
    function addLinks(Request $request){

    return view('flink.add');

    }
    
    /*
     * 友情链接编辑模块
     */
    function editLinks(Request $request,$id){
        $requests=$request->input($id);
        $links=new flink;
        $data_links=$links->where('id',$id)->get();

        return view('flink.edit',compact('data_links'));
        
    }
    
    /*
     * 友情链接删除模块
     */
    function delLinks(Request $request,$id){

        $links=new flink;

        $data_links=$links->where('id',$id)->delete();

        return redirect('/flink');
        
    }

    /*
     * 友情链接添加处理
     */
    function postUpdate(Request $request){
        $flinks=new flink;
        if(!empty($request->host_url) && !empty($request->keyword)){

            $regex = '@(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))@';

            if(preg_match($regex, $request->host_url)){
                $flinks->url=$request->host_url;
                $flinks->webname=$request->keyword;
                $flinks->email=$request->lianxi;
                $flinks->msg=$request->remark;
                $flinks->dtime=time();
            }else{

                exit('域名不合法');
            }


        }else{

            exit('网站域名或网站标题不能为空');
        }

        if($flinks->save()){
            echo '添加成功';
        }else{

            echo '添加失败';
        }


    }

    function postEditupdate(Request $request)
    {
        $flinks = new flink;
        if (!empty($request->host_url) && !empty($request->keyword)) {

            if (!empty($request->host_url) && !empty($request->keyword)) {

                $regex = '@(?i)\b((?:[a-z][\w-]+:(?:/{1,3}|[a-z0-9%])|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}/)(?:[^\s()<>]+|\(([^\s()<>]+|(\([^\s()<>]+\)))*\))+(?:\(([^\s()<>]+|(\([^\s()<>]+\)))*\)|[^\s`!()\[\]{};:\'".,<>?«»“”‘’]))@';

                if (preg_match($regex, $request->host_url)) {
                    $flinks->where('id', $request->flinkid)->update(

                        [
                            'url' => $request->host_url,
                            'webname' => $request->keyword,
                            'email' => $request->lianxi,
                            'msg' => $request->remark
                        ]
                    );
                    echo '更新成功！';
                } else {

                    exit('域名不合法');
                }

            } else {

                exit('网站域名或网站标题不能为空');
            }

        }
    }
}
