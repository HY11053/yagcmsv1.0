<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Model\addonarticle;
use App\Model\category;
use App\Model\Archive;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class searchController extends Controller
{
    //
    function getSearch(Request $request){
        //lsbrand_5_10_20.shtml
        $categories=new category;
        $typelinks=$categories->where('reid',0)->get();
        $path=$request->path();
        preg_match('/([A-Z a-z]+)\/([A-Z a-z]+)_([\d]+)_([\d]+)_([\d]+)/',$path,$matches);
        //dd($matches);
        if(!empty($matches[2]) ){
            $categories=new category;
            $typereid=$categories->where('typedir','/'.$matches[2].'/')->value('id')?:0;
            $typeinfos=$categories->where('reid',$typereid)->get();
            if(count($typeinfos)){

                for($i=0;$i<count($typeinfos);$i++){
                    $ids[]=$typeinfos[$i]->id;
                }

            }else{

                $ids[]=$typereid;

            }



            if($matches[3]!=0 && $matches[4]!=0 && $matches[5]!=0){
                if($typereid!=0){
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->where('archives.mid',1)
                        ->whereIn('archives.typeid',$ids)
                        ->where('addonarticles.brandpay','=',$matches[3].'~'.$matches[4].'万')
                        ->paginate(10);
                }else{
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->where('archives.mid',1)
                        ->where('addonarticles.brandpay','=',$matches[3].'~'.$matches[4].'万')
                        ->paginate(10);
                }


            }elseif ($matches[3]==0 && $matches[4]!=0 && $matches[5]!=0){
                if($typereid!=0){
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->whereIn('archives.typeid',$ids)
                        ->where('archives.mid',1)
                        ->where('addonarticles.brandchat','like','%'.$matches[4].'~'.$matches[5].'%')
                        ->paginate(10);
                }else{
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->where('archives.mid',1)
                        ->where('addonarticles.brandchat','like','%'.$matches[4].'~'.$matches[5].'%')
                        ->paginate(10);
                }


            }elseif($matches[3]!=0 && $matches[4]!=0 && $matches[5]==0){
                if($typereid!=0){
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->where('archives.mid',1)
                        ->whereIn('archives.typeid',$ids)
                        ->where('addonarticles.brandpay','like','%'.$matches[3].'~'.$matches[4].'%')
                        ->paginate(10);
                }else{
                    $articleinfos=DB::table('archives')
                        ->Join('addonarticles','archives.id','=','addonarticles.aid')
                        ->where('archives.mid',1)
                        ->where('addonarticles.brandpay','like','%'.$matches[3].'~'.$matches[4].'%')
                        ->paginate(10);
                }


            }
            return view('frontend.search',compact('articleinfos','typelinks','matches'));
        }




    }

    function postsearch(Request $request){
        $typename=$request->input('cname');
        $brandpay=$request->input('brandpay');
        preg_match('/([\d]+)~([\d]+)/',$brandpay,$matches);
        switch ($typename){

            case    '行业分类':

                echo '请选择行业分类';
                break;

            case    '零食店加盟':

                echo "/search/lsbrand_$matches[1]_$matches[2]_0.shtml";
                return ;

                break;
            case    '炒货加盟':

                echo "/search/chaohuodian_$matches[1]_$matches[2]_0.shtml";
                break;
            case    '干果加盟':

                echo "/search/ganguodian_$matches[1]_$matches[2]_0.shtml";

                break;
            case    '进口零食加盟':

                echo "/search/jinkoulingshi_$matches[1]_$matches[2]_0.shtml";
                break;

        }


    }
    //城市搜索
    function getSearchCity(Request $request ,$id){
        $categories=new category;
        $typelinks=$categories->where('reid',0)->get();
        $cityname=DB::table('citycoords')->where('id',$id)->value('city');
        $articleinfos=DB::table('archives')
            ->Join('addonarticles','archives.id','=','addonarticles.aid')
            ->where('archives.mid',1)
            ->where('addonarticles.brandgarea','like','%'.$cityname.'%')
            ->paginate(10);
        return view('frontend.search',compact('articleinfos','typelinks'));
    }



    function getBrandinfo($retypeid,$brandpay){

        $archives=new Archive;
        $addonarticle=new addonarticle;
        $categories=new category;
        $typeids=$categories->where('reid',$retypeid)->get();
        for($i=0;$i<count($typeids);$i++){
            $ids[]=$typeids[$i]->id;
        }
        $articleinfo=DB::table('archives')
                            ->where('archives.mid',1)
                            ->whereIn('archives.typeid',$ids)
                            ->leftJoin('addonarticles','archives.id','=','addonarticles.aid')
                            ->where('addonarticles.brandpay','=',$brandpay)
                            ->paginate(10);
        for($i=0;$i<count($articleinfo);$i++){
            $articleinfo[$i]->typedir=$categories->where('id',$articleinfo[$i]->typeid)->value('typedir');

        }
        return $articleinfo;
    }
}
