<?php

namespace App\Http\Controllers\Frontend;
use App\Overwrite\Paginator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\addonarticle;
use App\Model\category;
use App\Model\Archive;
use App\Model\Flink;
use DB;
use illuminate\support\facades\route;


class FrontendController extends Controller
{
    public function __construct()
    {
        $categories=new category;
        $archives=new Archive;
        $addonarticle=new addonarticle;

    }


    /*
     * 品牌栏目访问
     */
    function getCategorys(Request $request){

        if(preg_match('/([\w]+)\/([\w]+)/', $request->path(), $matches)){
            $categories=new category;
            $typelinks=$categories->where('reid',0)->orderBy('sortrank','desc')->get();
            $typeid=$categories->where('typedir',"/$matches[2]/")->value('id');
            $articles=$this->getArclist($typeid);
            $typeinfo=$this->getSinglcategory($typeid);
            $hotbrands=$this->getFlagarticle($typeid,'',5,0,5);

        }

    return view('frontend.news_list',
                        compact(
                            'typeinfo',
                            'articles',
                            'typelinks',
                            'hotbrands'

                        ));
    }
    /*
     * 文档查看
     */
    
    /*
     * 零食品牌顶级栏目访问控制
     */
    function getTopcategorys(Request $request,$page=0){
        $categories=new category;
        $articles=new Archive;
        $addonarticle=new addonarticle();
        $typelinks=$categories->where('reid',0)->orderBy('sortrank','desc')->get();
        if(preg_match('/([\w]+)/', $request->path(), $matches)) {
            //获取推荐品牌
            $this_typeinfo = $categories->where('typedir', "/$matches[0]/")->first();
            $sontypes=$categories->where('reid',$this_typeinfo->id)->get();
            $typeinfos=$this->getSinglcategory($this_typeinfo->id);
            for($i=0;$i<count($sontypes);$i++){
                $ids[]=$sontypes[$i]->id;
                $typeidirs[$sontypes[$i]->id]=$sontypes[$i]->typedir;
            }
            $article=$articles->whereIn('typeid',$ids)->where('mid',1)->where('flag','c')->take(18)->get();
            for ($i=0; $i<count($article);$i++){
                $article[$i]->typedir=$typeidirs[$article[$i]->typeid];

            }
            //获取所有品牌并分页显示
            $articlelists=$articles->whereIn('typeid',$ids)->where('mid',1)->paginate($perPage = 5, $columns = ['*'], $pageName = 'page', $page);
			$cid=Route::currentRouteName()? Route::currentRouteName():Route::current()->uri();
			$articlelists = Paginator::transfer(
						$cid,//传入分类id,
						$articlelists//传入原始分页器
					);
            for ($i=0; $i<count($articlelists);$i++){
                $articlelists[$i]->typedir=$typeidirs[$articlelists[$i]->typeid];
                $articlelists[$i]->brandpay=$addonarticle->where('aid',$articlelists[$i]->id)->value('brandpay');
                $articlelists[$i]->brandorigin=$addonarticle->where('aid',$articlelists[$i]->id)->value('brandorigin');
                $articlelists[$i]->brandnum=$addonarticle->where('aid',$articlelists[$i]->id)->value('brandnum');
                $articlelists[$i]->brandapply=$addonarticle->where('aid',$articlelists[$i]->id)->value('brandapply');
                $articlelists[$i]->brandname=$addonarticle->where('aid',$articlelists[$i]->id)->value('brandname');

            }
            $tjarticles=$this->getFlagarticle(1,'',10,0,10,0);
            //$ntopdatas=$this->getArclist($typeinfo->id);

        }


        return view('frontend.brand_list',compact('ntopdatas','article','typeinfos','articlelists','typelinks','tjarticles'));
    }
    /*
     *  零食品牌资讯栏目访问控制
     */
    function getNewscategorys(Request $request,$page=0){
        if(preg_match('/([\w]+)/', $request->path(), $matches)) {
            $categories=new category;
            $typelinks=$categories->where('reid',0)->orderBy('sortrank','desc')->get();
            $typeid=$categories->where('typedir',"/$matches[1]/")->value('id');
            $articles = $this->getArclist($typeid,$page);
            $typeinfo = $this->getSinglcategory($typeid);
            $hotbrands=$this->getFlagarticle($typeid,'',5,0,5);

            return view(
                'frontend.news_list',
                compact(
                    'typeinfo',
                    'articles',
                    'typelinks',
                    'hotbrands'

                ));
        }
    }

//列表文档获取及分页，id为传入的栏目id
    function getArclist($id,$page=0){

        $categories=new category;
        $article=new addonarticle;
        $archives=new Archive;
        $typeinfo=$categories->where('id',$id)->first();
        $typereid=$categories->where('id',$id)->value('reid');
        if($typereid){
            $typeinfo->retypedir=$categories->where('id',$typereid)->value('typedir');
        }
        //$articles=$archives->where('typeid','=',$typeinfo->id)->paginate(10);
		//获取所有品牌并分页显示
            $articles=$archives->where('typeid','=',$typeinfo->id)->paginate($perPage = 10, $columns = ['*'], $pageName = 'page', $page);
			
			$cid=Route::currentRouteName()? Route::currentRouteName():Route::current()->uri();
			//dd($cid);
			$articles = Paginator::transfer(
						$cid,//传入分类id,
						$articles//传入原始分页器
					);
        $addinfo=$article->where('typeid','=',$typeinfo->id)->get();
        for($i=0;$i<count($articles); $i++){
            $articles[$i]->typedir=$typeinfo->typedir;
            $articles[$i]->retypedir=substr($typeinfo->retypedir,0,-1);
            $articles[$i]->tag=$addinfo[$i]->tag;
        }
        return $articles;
    }

    //单栏目信息获取
    function getSinglcategory($id){
        $categories=new category;
        $typeinfo=$categories->where('id',$id)->first();

        return $typeinfo;

    }
    /*
     *
     * 零食加盟费栏目访问控制
     */

    function getFeiyongcategorys(Request $request)
    {
        $categories = new category;
        $articles = new Archive;
        $addonarticle = new addonarticle();        ;
        $typelinks=$categories->where('reid',0)->orderBy('sortrank','desc')->get();
        if (preg_match('/([\w]+)/', $request->path(), $matches)) {
            //获取推荐品牌
            $this_typeinfo = $categories->where('typedir', "/$matches[0]/")->first();
            $articlelists = $articles->where('typeid', $this_typeinfo->id)->where('mid', 2)->paginate(10);
                for ($i = 0; $i < count($articlelists); $i++) {
                    $articlelists[$i]->typedir = $this_typeinfo->typeid;
                    $articlelists[$i]->brandpay = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandpay');
                    $articlelists[$i]->brandorigin = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandorigin');
                    $articlelists[$i]->brandnum = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandnum');
                    $articlelists[$i]->brandapply = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandapply');
                    $articlelists[$i]->brandname = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandname');

                }
            }


            return view('frontend.pay_list', compact('this_typeinfo', 'articlelists','typelinks'));

    }

    /*
     * 干果、炒货、进口零食栏目访问控制
     *
     */

    function getChaohuocategorys(Request $request)
    {
        $categories = new category;
        $articles = new Archive;
        $addonarticle = new addonarticle();
        $typelinks=$categories->where('reid',0)->orderBy('sortrank','desc')->get();
        if (preg_match('/([\w]+)/', $request->path(), $matches)) {
            //获取推荐品牌
            $this_typeinfo = $categories->where('typedir', "/$matches[0]/")->first();
            //dd($this_typeinfo);
            $articlelists = $articles->where('typeid', $this_typeinfo->id)->where('mid', 1)->paginate(10);
            $article=$articles->where('typeid',$this_typeinfo->id)->where('mid',1)->where('flag','c')->take(18)->get();
            for ($i=0; $i<count($article);$i++){
                $article[$i]->typedir=$this_typeinfo->typeid;

            }
            for ($i = 0; $i < count($articlelists); $i++) {
                $articlelists[$i]->typedir = $this_typeinfo->typeid;
                $articlelists[$i]->brandpay = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandpay');
                $articlelists[$i]->brandorigin = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandorigin');
                $articlelists[$i]->brandnum = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandnum');
                $articlelists[$i]->brandapply = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandapply');
                $articlelists[$i]->brandname = $addonarticle->where('aid', $articlelists[$i]->id)->value('brandname');

            }
        }


        return view('frontend.chaohuo_list', compact('this_typeinfo','article', 'articlelists','typelinks'));

    }

    /*
     *
     * 文章访问控制
     * 区别普通文档和品牌文档
     */
    function getArticles(Request $request){
        //判断当前访问路径是否通过验证
        if(preg_match('/([\w]+)\/([\d]+)\.shtml/', $request->path(), $matches)){
            $article=new addonarticle;
            $archives=new Archive;
            $categorys=new category;
            $typelinks=$categorys->where('reid',0)->orderBy('sortrank','desc')->get();
            $typeid=$categorys->where('typedir',"/$matches[1]/")->value('id');
            $retypeid=$categorys->where('id',$typeid)->value('reid');
            $retypedir=$categorys->where('id',$retypeid)->value('typedir');

            //判断当前访问栏目是否存在
            if($typeid){

                $data_article=$article->where('aid',$matches[2])->where('typeid', "$typeid")->first();                
                $data_archive=$archives->where('id',$matches[2])->where('typeid', "$typeid")->first();
                $tjarticles=$this->getFlagarticle(1,'',10,0,10,0);
                $htarticles=$this->getFlagarticle($typeid,'h',1,0,1,1);
                $hotbrands=$this->getFlagarticle(1,'s',5);
                //判断当前栏目对应的文档id是否存在
                if($data_article){
                    //对不同文档显示对应模板
                    if($data_archive->mid ==1){
                        $navstopdir=substr($categorys->where('id',1)->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
                        $newbrands=$this->getFlagarticle(1,'',18);
                        $data_articlelitpic=$article->where('aid',$matches[2])->where('typeid', "$typeid")->value('imageslitpic');
                        $data_articlelitpics=array_filter(explode(',',$data_articlelitpic));

                        return view('frontend.brand_show',compact('data_article','data_archive','typelinks','navstopdir','hotbrands','newbrands','retypedir','tjarticles','data_articlelitpics'));
                    }elseif ($data_archive->mid ==2){
                        return view('frontend.jmf_show',compact('data_article','data_archive','typelinks','navstopdir','hotbrands','newbrands','retypedir','tjarticles','data_articlelitpics'));

                    }else{

                        return view('frontend.news_show',compact('data_article','data_archive','typelinks','retypedir','tjarticles','htarticles','hotbrands'));

                    }
                }else{

                    abort(404);
                }


            }else{
                abort(404);
            }

        }else{
            abort(404);
        }


    }

/*
 *
 * 资讯内容访问
 */
    function getNewsarticle(Request $request){
        $categorys=new category;
        $typelinks=$categorys->where('reid',0)->orderBy('sortrank','desc')->get();
        if(preg_match('/([\w]+)\/([\d]+)\.shtml/', $request->path(), $matches)){
            $article=new addonarticle;
            $archives=new Archive;
            $categorys=new category;

            $typeid=$categorys->where('typedir',"/$matches[1]/")->value('id');
            $retypeid=$categorys->where('id',$typeid)->value('reid');
            $retypedir=$categorys->where('id',$retypeid)->value('typedir');
            $hotbrands=$this->getFlagarticle(1,'s',5);

            if($typeid){
                $htarticles=$this->getFlagarticle($typeid,'h',1,0,1,0);
                $tjarticles=$this->getFlagarticle($typeid,'',10,0,10,0);
                $data_article=$article->where('aid',$matches[2])->where('typeid', "$typeid")->first();
                $data_archive=$archives->where('id',$matches[2])->where('typeid', "$typeid")->first();

            }else{
                abort(404);
            }


            if($data_article){
                return view('frontend.news_show',compact('data_article','data_archive','typelinks','tjarticles','htarticles','hotbrands','retypedir'));
            }
            else{
                abort(404);
            }
        }else{
            abort(404);
        };


    }
/*
 *
 * 首页
 */

    function getIndex(Request $request){

        //栏目部分
        $categorys=new category;
        $brandaiticle= new Archive;
        $flink=new Flink();

        //品牌导航部分
        $navs=$categorys->where('reid','1')->orderBy('id','asc')->get();
        $navstopdir=substr($categorys->where('id','1')->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
        $typelinks=$categorys->where('reid',0)->orderBy('sortrank','desc')->get();
        //炒货导航部分
        $chaohuodir=$this->getType(8)->typedir;
        $brandaiticles=$brandaiticle->where('typeid',8)->where('mid',1)->take(10)->get();

        //进口零食导航
        $jinkoulingshidir=$this->getType(9)->typedir;
        $jinkoulingshiarticle=$brandaiticle->where('typeid',9)->where('mid',1)->take(10)->get();
        //热门品牌(创业好店)
        $hotbrand=$this->getFlagarticle(1,'h',7);
        //推荐品牌
        $recommenbrand=$this->getFlagarticle(1,'c',11);
        //品牌头条
        $apexbrand=$this->getFlagarticle(1,'a',8);
        //滚动推荐
        $scrollbrand=$this->getFlagarticle(1,'s',8);
        $scrollbrand2=$this->getFlagarticle(1,'s',8,1);
        $scrollbrand3=$this->getFlagarticle(1,'s',8,2);
        //推荐品牌(带图片)
        $picllbrand=$this->getFlagarticle(1,'s',48);
        //炒货品牌
        $scrollchaohuobrand=$this->getFlagarticle(8,'',8);
        $scrollchaohuobrand2=$this->getFlagarticle(8,'',8,2);
        $scrollchaohuobrand3=$this->getFlagarticle(8,'',8,3);
        $picchaohuobrand=$this->getFlagarticle(8,'',18);
        //进口零食品牌
        $importbrand=$this->getFlagarticle(9,'',8);
        $importbrand2=$this->getFlagarticle(9,'',8,2);
        $importbrand3=$this->getFlagarticle(9,'',8,3);
        $picimportbrand=$this->getFlagarticle(9,'',18);
        //创业大讲堂
        $recommennews=$this->getFlagarticle(3,'c',3);
        $sexnews=$this->getFlagarticle(3,'',6);
        //大家都在看
        $seeallbrands=$this->getFlagarticle(1,'s',3);
        $seeallbrand2s=$this->getFlagarticle(9,'',5);
        //人群解读
        $tagnews=$this->getFlagarticle(3,'',6);
        //创业风向标
        $brandnews=$this->getFlagarticle(10,'',5,0,0);
        //友情链接
        $flinks=$flink->where('ischeck',1)->get();
        //生意百科
        $askrows=DB::table('asks')->where('answernum','>',0)->orderBy('answernum','desc')->limit(3)->get();
        return view('frontend.index',
            compact(
            'typelinks',
            'navs',
            'navstopdir',
            'brandaiticles',
            'chaohuodir',
            'jinkoulingshidir',
            'jinkoulingshiarticle',
            'hotbrand',
            'apexbrand',
            'scrollbrand',
            'scrollbrand2',
            'scrollbrand3',
            'picllbrand',
            'recommenbrand',
            'scrollchaohuobrand',
            'scrollchaohuobrand2',
            'picchaohuobrand',
            'importbrand',
            'importbrand2',
            'importbrand3',
            'picimportbrand',
            'sexnews',
            'recommennews',
            'brandnews',
            'tagnews',
            'seeallbrands',
            'seeallbrand2s',
            'scrollchaohuobrand3',
            'flinks',
            'askrows'
            )
        );


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
     *
     * 推荐文档获取
     * @    $typeid 传入的顶级栏目ID
     * @    $flag 文档自定义属性
     * @    $num调用条数
     */
    function getFlagarticle($typeid,$flag='',$num,$sknum=0,$mid=1){

        $brandarticle= new Archive;
        $categorys=new category;
        $brandaddon=new addonarticle;

        $sontype=$categorys->where('reid',$typeid)->get();
        //dd($sontype[0]->id);
        if(count($sontype)>0){

            foreach($sontype as $sontypes){

                $sontypeid[]=$sontypes->id;

            }
            if($mid!=1){

                if(empty($flag)){

                    $brandarticles=$brandarticle->whereIn('typeid', $sontypeid)->where('mid','<>',1)->skip($sknum)->take($num)->orderBy('pubdate','desc')->get();

                }else{

                    $brandarticles=$brandarticle->whereIn('typeid', $sontypeid)->where('flag',$flag)->where('mid','<>',1)->skip($sknum)->take($num)->orderBy('pubdate','desc')->get();

                }
                for($i=0;$i<count($brandarticles);$i++){
                    $arttypeid=$brandarticles[$i]->typeid;
                    $brandarticles[$i]->typedir=$categorys->where('id',$arttypeid)->value('typedir');
                }
                return $brandarticles;
            }else{

                if(empty($flag)){

                    $brandarticles=$brandarticle->whereIn('typeid', $sontypeid)->where('mid','1')->skip($sknum)->take($num)->orderBy('pubdate','desc')->get();

                }else{
                    $brandarticles=$brandarticle->whereIn('typeid', $sontypeid)->where('flag',$flag)->where('mid','1')->skip($sknum)->take($num)->orderBy('pubdate','desc')->get();

                }
                for($i=0;$i<count($brandarticles);$i++){
                    $arttypeid=$brandarticles[$i]->typeid;
                    $brandarticles[$i]->typedir=$categorys->where('id',$arttypeid)->value('typedir');
                    $brandarticles[$i]->brandpay=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandpay');
                    $brandarticles[$i]->brandmap=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandmap');
                    $brandarticles[$i]->brandapply=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandapply');
                }
                return $brandarticles;
            }




        }else{

            $brandarticles=$brandarticle->where('typeid', $typeid)->where('flag',$flag)->skip($sknum)->take($num)->get();
            for($i=0;$i<count($brandarticles);$i++){
                $arttypeid=$brandarticles[$i]->typeid;
                $brandarticles[$i]->typedir=$categorys->where('id',$arttypeid)->value('typedir');
                $brandarticles[$i]->brandpay=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandpay');
                $brandarticles[$i]->brandmap=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandmap');
                $brandarticles[$i]->brandapply=$brandaddon->where('aid',$brandarticles[$i]->id)->value('brandapply');
            }

            return $brandarticles;

        }




    }
    /*
     * 品牌相关内容调用
     * @id 传入的当前栏目id，可以数组形式进行多栏目传入
     * @mid 是否只调用品牌专题文档
     * @是否为当前栏目
     */
    function getArticletj($typeid,$flags){


    }

    function getPaihangbang(){

        //栏目部分
        $categorys=new category;
        $brandaiticle= new Archive;
        //品牌导航部分
        $navs=$categorys->where('reid','1')->orderBy('id','asc')->get();
        $navstopdir=substr($categorys->where('id','1')->value('typedir'),0,strlen($categorys->where('id','1')->value('typedir'))-1);
        $typelinks=$categorys->where('reid',0)->orderBy('sortrank','desc')->get();
        //炒货导航部分
        $chaohuodir=$this->getType(8)->typedir;
        $brandaiticles=$brandaiticle->where('typeid',8)->where('mid',1)->take(10)->get();

        //进口零食导航
        $jinkoulingshidir=$this->getType(9)->typedir;
        $jinkoulingshiarticle=$brandaiticle->where('typeid',9)->where('mid',1)->take(10)->get();
        //推荐品牌
        $article=DB::table('archives')
            ->join('categories', 'archives.typeid', '=', 'categories.id')
            ->join('addonarticles', 'archives.id', '=', 'addonarticles.aid')
            ->where('archives.mid',1)
            ->orderBy('addonarticles.brandattch','desc')
            ->limit(9)
            ->get();
        for($i=0;$i<count($article);$i++){
            $reid=DB::table('categories')->where('typedir',$article[$i]->typedir)->value('reid');
            $retypedir=DB::table('categories')->where('id',$reid)->value('typedir');
            $article[$i]->retypedir=$retypedir;
        }

        $articlelists=DB::table('archives')
            ->join('categories', 'archives.typeid', '=', 'categories.id')
            ->join('addonarticles', 'archives.id', '=', 'addonarticles.aid')
            ->where('archives.mid',1)
            ->orderBy('addonarticles.brandapply','desc')
            ->paginate(10);
        //dd($articlelists);
       for($i=0;$i<count($articlelists);$i++) {
           $reid = DB::table('categories')->where('typedir', $articlelists[$i]->typedir)->value('reid');
           $retypedir = DB::table('categories')->where('id', $reid)->value('typedir');
           $articlelists[$i]->retypedir = $retypedir;
       }
        return view('frontend.paihangbang',compact(
            'article',
            'articlelists',
            'navs',
            'navstopdir',
            'typelinks',
            'chaohuodir',
            'brandaiticles',
            'jinkoulingshidir',
            'jinkoulingshiarticle'
        ));
    }


}
