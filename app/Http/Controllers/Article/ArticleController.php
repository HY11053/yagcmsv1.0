<?php

namespace App\Http\Controllers\Article;
use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\category;
use App\Model\Archive;
//use App\Model\Admin;
use App\Model\addonarticle;
use App\Http\Controllers\Auth;
class ArticleController extends Controller
{
    //

    /*public function __construct(){
        $this->middleware('auth');

    }*/
    public function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    
    function getIndex(Request $request){
        $archives=new Archive;
        $categorys=new category;
        $user=new Admin;
        $Article_data=$archives->orderBy('id', 'desc')->paginate(30);
        foreach ($Article_data as $Article_data_new){
            $typename=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('typename');
            $typedir=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('typedir');
            $typetopid=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('reid');
            if($typetopid){
                $typetopdir= substr($categorys->where('id','=',"$typetopid")->value('typedir'),0,strlen($categorys->where('id','=',"$typetopid")->value('typedir'))-1);
            }else{
                $typetopdir='';
            }
            $dutyname=$user->where('id','=',$Article_data_new['dutyadmin'])->value('name');
            $Article_data_new['typename']=$typename;
            $Article_data_new['dutyname']=$dutyname;
            $Article_data_new['typedir']=$typedir;
            $Article_data_new['topdir']=$typetopdir;

        }


        //var_dump($request->user()->id);

        return view('article.index' ,compact('Article_data'));
    }

    /*
     * 添加普通文章
     *
     */
    function getCreate(){

        $category=new category;
        $data=$category->all();
        return view('article.create',compact('data'));

    }
    /*
     *
     * 添加品牌文章
     */

    function getBrandcreate(){

        $category=new category;
        $data=$category->all();
        return view('article.create_brand',compact('data'));

    }
    /*
     * 加盟费用文档创建
     */
    function getJmfcreate(){
        $category=new category;
        $data=$category->all();
        return view('article.create_jmf',compact('data'));
    }
    /*
     *
     * 文档发布提交处理
     *@archives为主表数据内容
     * @addonarticle为文章附加表数据内容
     *
     */
    function postCreate(Request $request){
       // dd($request->all());
        if(!empty($request->title) && !empty($request->typeid)){
            $archives=new Archive;
            $addonarticle=new addonarticle;
            $count = $archives->max('id');
            $flags='';
            $resflags=$request->flags;
            if(!empty($resflags)){
                foreach ($resflags as $flag){
                    $flags.=$flag.',';
                }
            }

            $flags=substr($flags,0,-1);
           // $archives->id=$count+1;
            $archives->title=$request->title;
            $archives->shorttitle=$request->shorttitle;
            $archives->keywords=$request->keywords;
            $archives->typeid=$request->typeid;
            $archives->description=$request->description;
            $archives->ismake=$request->iCheck;
            $archives->flag=$flags;
            //$archives->dutyadmin=$request->user()->id;
            $archives->dutyadmin=auth('admin')->user()->id;
            $archives->senddate=time();
            $archives->pubdate=time();
            //$addonarticle->aid=$count+1;
            $addonarticle->typeid=$request->typeid;
            $addonarticle->body=$request->textareacontent;
            $addonarticle->tag=$request->tags;
            $addonarticle->coordinates=$request->country;
            //品牌内容部分
            if($request->mid==1){
                $archives->mid=1;
                $addonarticle->brandname=$request->brandname;
                $addonarticle->brandtime=$request->brandtime;
                $addonarticle->brandorigin=$request->brandorigin;
                $addonarticle->brandnum=$request->brandnum;
                $addonarticle->brandpay=$request->brandpay;
                $addonarticle->brabdaea=$request->brabdaea;
                $addonarticle->brandmap=$request->brandmap;
                $addonarticle->brandperson=$request->brandperson;
                $addonarticle->brandattch=$request->brandattch;
                $addonarticle->brandapply=$request->brandapply;
                $addonarticle->brandchat=$request->brandchat;
                $addonarticle->brandgroup=$request->brandgroup;
                $addonarticle->brandgarea=$request->brandgarea;
                $addonarticle->brandduty=$request->brandduty;
                $addonarticle->imageslitpic=$request->imagespic;
                $addonarticle->jmxq=$request->textareacontent1;
                $addonarticle->jmys=$request->textareacontent2;
                $addonarticle->jmlc=$request->textareacontent3;
                $addonarticle->jmdt=$request->textareacontent4;
                $addonarticle->jmwd=$request->textareacontent5;

            }elseif($request->mid==2){
                $archives->mid=2;
                $addonarticle->brandname=$request->brandname;
                $addonarticle->brandtime=$request->brandtime;
                $addonarticle->brandorigin=$request->brandorigin;
                $addonarticle->brandnum=$request->brandnum;
                $addonarticle->brandpay=$request->brandpay;
                $addonarticle->brabdaea=$request->brabdaea;
            }

            //上传缩略图处理
            if(!empty($request->image)){

                if(!$request->hasFile('image')){

                    return;

                }else{

                    $file = $request->file('image');
                    //判断文件上传过程中是否出错
                    $allowed_extensions = ["png", "jpg", "gif","jpeg"];
                    if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                        exit(['error' => '您上传的图片文件格式不在ping,jpg,gif,jpeg范围之内']);
                    }else{
                        $upload_path='images/thread'.date('/Y/m/d',time());
                        $destinationPath =public_path($upload_path);
                        $extension = $file->getClientOriginalExtension();
                        $fileName = md5(str_random(10)).'.'.$extension;
                        $file->move($destinationPath, $fileName);
                        $img_relpath=date('Y/m/d/',time()). $fileName;
                        $archives->litpic= '/images/thread/'.$img_relpath;
                    }
                }


            }

            $archives->save();
            $addonarticle->save();

        }else{

            exit('文档内容填写不全，请按要求填写');
        }





        return redirect('/article/lists');

    }


    
    /*
     * 
     * 文档编辑
     * @id 传入对应文档ID
     */
    function getEdtarticle(Request $request,$id){
        $inputid = $request->input($id);
        $category=new category;
        $article=new Archive;
        $addonarticle=new addonarticle;
        $addonarticle_data=$addonarticle->where('aid','=',$inputid)->value('body');
        $addonarticle_jmxq=$addonarticle->where('aid','=',$inputid)->value('jmxq');
        $addonarticle_jmys=$addonarticle->where('aid','=',$inputid)->value('jmys');
        $addonarticle_jmlc=$addonarticle->where('aid','=',$inputid)->value('jmlc');
        $addonarticle_jmdt=$addonarticle->where('aid','=',$inputid)->value('jmdt');
        $addonarticle_jmwd=$addonarticle->where('aid','=',$inputid)->value('jmwd');
         //品牌数据获取
        $addonarticle_brand=$addonarticle->where('aid','=',$inputid)->get();
        $addonarticle_tag=$addonarticle->where('aid','=',$inputid)->value('tag');
        $addonarticle_coordinates=$addonarticle->where('aid','=',$inputid)->value('coordinates');
        $article_flag=$article->where('id','=',$inputid)->value('flag');
        $data=$category->all();
        $article_mid=$article->where('id','=',$request->input($id))->value('mid');
        $article_data=$article->where('id','=',$inputid)->withTrashed()->get();
        //缩略图处理
        $litpics=$addonarticle->where('aid','=',$inputid)->value('imageslitpic');
        $pics=array_filter(explode(',',$litpics));
        //dd($pics);

        if( $article_mid==1){
            return view('article.brand_edit',compact(
                'data','article_data',
                'addonarticle_data',
                'inputid','addonarticle_tag',
                'addonarticle_coordinates',
                'article_flag',
                'addonarticle_brand',
                'pics',
                'addonarticle_jmxq',
                'addonarticle_jmdt',
                'addonarticle_jmlc',
                'addonarticle_jmys',
                'addonarticle_jmwd'
            ));
        }elseif ($article_mid==2){
            return view('article.editjmf',compact(
                'data','article_data',
                'addonarticle_data',
                'inputid','addonarticle_tag',
                'addonarticle_coordinates',
                'addonarticle_brand',
                'article_flag'
            ));
        }else{
            return view('article.edit',compact(
                'data','article_data',
                'addonarticle_data',
                'inputid','addonarticle_tag',
                'addonarticle_coordinates',
                'article_flag'
            ));


        }

    }

    /*
     *
     * 文档更新
     *
     */

    function postUpdate(Request $request){
    //dd($request->all());
        if(!empty($request->title) && !empty($request->typeid)){
            $archives=new Archive;
            $addonarticle=new addonarticle;
            $flags='';
            $resflags=$request->flags;
            $article_mid=$archives->where('id','=',$request->articelid)->value('mid');
            if(!empty($resflags)){
                foreach ($resflags as $flag){
                    $flags.=$flag.',';
                }
            }

            $flags=substr($flags,0,-1);
            if(empty($request->description)){
                $description=str_replace('&nbsp;','',str_limit(trim(strip_tags($request->textareacontent)),$limit = 360,$end = ''));
            }else{
                $description=$request->description;
            }
            $archives->where('id', $request->articelid)->update(
                [
                    'title'=>$request->title ,
                    'ismake'=>$request->iCheck,
                    'shorttitle'=>$request->shorttitle,
                    'keywords'=>$request->keywords,
                    'typeid'=>$request->typeid,
                    'description'=>$description,
                    'flag'=>$flags,
                    'pubdate'=>time()
                ]

            );

            if($article_mid==1){
                $litpics=$addonarticle->where('aid','=',$request->articelid)->value('imageslitpic');
                $addonarticle->where('aid', $request->articelid)->update(
                    [
                        'typeid'=>$request->typeid,
                        'body'=>$request->textareacontent,
                        'tag'=>$request->tags,
                        'coordinates'=>$request->country,
                        'brandname'=>$request->brandname,
                        'brandtime'=>$request->brandtime,
                        'brandorigin'=>$request->brandorigin,
                        'brandnum'=>$request->brandnum,
                        'brandpay'=>$request->brandpay,
                        'brabdaea'=>$request->brabdaea,
                        'brandmap'=>$request->brandmap,
                        'brandperson'=>$request->brandperson,
                        'brandattch'=>$request->brandattch,
                        'brandapply'=>$request->brandapply,
                        'brandchat'=>$request->brandchat,
                        'brandgroup'=>$request->brandgroup,
                        'brandgarea'=>$request->brandgarea,
                        'brandduty'=>$request->brandduty,
                        'imageslitpic'=>$request->imagespic.$litpics,
                        'jmxq'=>$request->textareacontent1,
                        'jmys'=>$request->textareacontent2,
                        'jmlc'=>$request->textareacontent3,
                        'jmdt'=>$request->textareacontent4,
                        'jmwd'=>$request->textareacontent5,
                    ]
                );
            }elseif ($article_mid==2){
                $addonarticle->where('aid', $request->articelid)->update(
                    [
                        'typeid'=>$request->typeid,
                        'body'=>$request->textareacontent,
                        'tag'=>$request->tags,
                        'coordinates'=>$request->country,
                        'brandname'=>$request->brandname,
                        'brandtime'=>$request->brandtime,
                        'brandorigin'=>$request->brandorigin,
                        'brandnum'=>$request->brandnum,
                        'brandpay'=>$request->brandpay,
                        'brabdaea'=>$request->brabdaea
                    ]
                );
            }else{
                $addonarticle->where('aid', $request->articelid)->update(
                    [
                        'typeid'=>$request->typeid,
                        'body'=>$request->textareacontent,
                        'tag'=>$request->tags,
                        'coordinates'=>$request->country]
                );
            }


            //栏目图片处理
            if(!empty($request['image'])){

                if(!$request->hasFile('image')){

                    exit('上传文件为空！');

                }else{

                    $file = $request->file('image');
                    //判断文件上传过程中是否出错
                    $allowed_extensions = ["png", "jpg", "gif","jpeg"];
                    if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                        exit(['error' => '您上传的图片文件格式不在ping,jpg,gif,jpeg范围之内']);
                    }
                }

                $upload_path='images/thread'.date('/Y/m/d',time());
                $destinationPath =public_path($upload_path);
                $extension = $file->getClientOriginalExtension();
                $fileName = md5(str_random(10)).'.'.$extension;
                $file->move($destinationPath, $fileName);
                $img_relpath=date('Y/m/d/',time()). $fileName;
                $litpic= '/images/thread/'.$img_relpath;
                $archives->where('id', $request->articelid)->update(
                    ['litpic'=>$litpic]
                );
            }



        }else{

            exit('文档内容填写不全，请按要求填写');
        }


        return redirect('/article/lists');

    }

    /*
     *
     *
     * 文档删除模块，软删除
     */

    function postDelete(Request $request){
        $id=$request->id;
        $del=Archive::find($id);
        $del->delete();
        if($del->trashed()){
            echo '成功删除到回收站！';
        }else{
            echo '软删除失败！当前文章已删除或不存在';
        }

    }
    function getNoverify(Request $request){

        $archives=new Archive;
        $categorys=new category;
        $user=new Admin;

        $Article_data=$archives->where('ismake','=',0)->orderBy('id', 'desc')->paginate(20);

        foreach ($Article_data as $Article_data_new){

            $typename=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('typename');
            $dutyname=$user->where('id','=',$Article_data_new['dutyadmin'])->value('name');

            $Article_data_new['typename']=$typename;
            $Article_data_new['dutyname']=$dutyname;

        }

        return view('article.noverify',compact('Article_data'));


    }

    function getOwnship(Request $request){
        $archives=new Archive;
        $categorys=new category;
        $user=new Admin;
        $Article_data=$archives->where('dutyadmin','=',auth('admin')->user()->id)->orderBy('id', 'desc')->paginate(20);
        foreach ($Article_data as $Article_data_new){
            $typename=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('typename');
            $dutyname=$user->where('id','=',auth('admin')->user()->id)->value('name');
            $Article_data_new['typename']=$typename;
            $Article_data_new['dutyname']=$dutyname;
        }

        return view('article.ownship',compact('Article_data'));

    }

    function getRecycle(Request $request){
        $archives=new Archive;
        $categorys=new category;
        $user=new Admin;
        $Article_data=$archives->onlyTrashed()->orderBy('id', 'desc')->paginate(20);
        foreach ($Article_data as $Article_data_new){
            $typename=$categorys->where('id','=',"{$Article_data_new['typeid']}")->value('typename');
            $dutyname=$user->where('id','=',$Article_data_new['dutyadmin'])->value('name');
            $Article_data_new['typename']=$typename;
            $Article_data_new['dutyname']=$dutyname;
        }

        return view('article.recycle',compact('Article_data'));

    }

    function uploadPics(Request $request){
        if(!empty($request['input-image'])){
            if(!$request->hasFile('input-image')){
                exit('上传文件为空！');
            }else{
                $file = $request->file('input-image');
                //判断文件上传过程中是否出错
                $allowed_extensions = ["png", "jpg", "gif","jpeg"];
                if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
                    exit(['error' => '您上传的图片文件格式不在ping,jpg,gif,jpeg范围之内']);
                }
            }

            $upload_path='images/thread'.date('/Y/m/d',time());
            $destinationPath =public_path($upload_path);
            $extension = $file->getClientOriginalExtension();
            $fileName = md5(str_random(10)).'.'.$extension;
            $file->move($destinationPath, $fileName);
            $img_relpath=date('Y/m/d/',time()). $fileName;
            $litpic= '/images/thread/'.$img_relpath;
            return json_encode(array('link'=>"$litpic"));

        }
        var_dump($request->all());
    }
    function deletePics(Request $request){
        $requestinfo=$request->input('key');
        $arrinfos=explode(',',$requestinfo);
        $addonarticles=new addonarticle;
        $imageslitpic=str_replace(',,',',',str_replace($arrinfos[1],'',$addonarticles->where('aid',$arrinfos[2])->value('imageslitpic')));
        $addonarticles->where('aid', $arrinfos[2])->update(
            [
                'imageslitpic'=>$imageslitpic
            ]);

        return $arrinfos[0] ;

    }
}
