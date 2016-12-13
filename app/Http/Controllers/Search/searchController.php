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
        if(!empty($matches[2]) ){
            $categories=new category;
            $typereid=$categories->where('typedir','/'.$matches[2].'/')->value('id');
            $typeinfos=$categories->where('reid',$typereid)->get();

            if(!emptyArray($typeinfos)){

                for($i=0;$i<count($typeinfos);$i++){
                    $ids[]=$typeinfos[$i]->id;
                }
            }else{

                $ids[]=$typereid;

            }



            if($matches[3]!=0 && $matches[4]!=0 && $matches[5]!=0){
                $articleinfos=DB::table('archives')
                    ->where('archives.mid',1)
                    ->whereIn('archives.typeid',$ids)
                    ->leftJoin('addonarticles','archives.id','=','addonarticles.aid')
                    ->where('addonarticles.brandpay','=',$matches[3].'~'.$matches[4].'万')
                    ->paginate(10);

            }elseif ($matches[3]==0 && $matches[4]==0 && $matches[5]!=0){
                $articleinfos=DB::table('archives')
                    ->where('archives.mid',1)
                    ->whereIn('archives.typeid',$ids)
                    ->leftJoin('addonarticles','archives.id','=','addonarticles.aid')
                    ->paginate(10);

            }elseif($matches[3]!=0 && $matches[4]!=0 && $matches[5]==0){
                $articleinfos=DB::table('archives')
                    ->where('archives.mid',1)
                    ->whereIn('archives.typeid',$ids)
                    ->leftJoin('addonarticles','archives.id','=','addonarticles.aid')
                    ->where('addonarticles.brandpay','=',$matches[3].'~'.$matches[4].'万')
                    ->paginate(10);
            }
            return view('frontend.search',compact('articleinfos','typelinks'));
        }

        var_dump($matches);


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
