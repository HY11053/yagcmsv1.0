<?php

namespace App\Http\Controllers\SimeMap;

use Illuminate\Http\Request;
use Storage;
use App\Http\Controllers\Controller;
use DB;

class SiteMapController extends Controller
{
    //
    function __construct()
    {
        $this->middleware('auth.admin:admin');
    }
    //PC端地图生成

    function getSitemap()
    {
        $content = '<?xml version="1.0" encoding="utf-8"?>
        <urlset>
        <url>
        <loc>'.env('APP_URL').'</loc>
        <lastmod>'.date('Y-m-d',time()).'</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
        </url>
        ';
        //栏目数据遍历
        $typelinks = DB::table('categories')->pluck('typedir');
        $typeid = DB::table('categories')->pluck('id');
        $articles=DB::table('categories')->join('archives','archives.typeid','=','categories.id')->whereIn('archives.typeid',$typeid)->get();
        $asklists=DB::table('asks')->get();
        foreach ($typelinks as $typelink){
           $content.="
                <url>
                    <loc>".env('APP_URL').$this->retypelink($typelink)."</loc>                   
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";

       }
        foreach ($articles as $article)
        {
            $content.="
                <url>
                    <loc>".env('APP_URL').$this->retypelink($article->typedir).$article->id.'.shtml.'."</loc>
                    <lastmod>".date('Y-m-d',$article->pubdate)."</lastmod>
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";
        }
        foreach ($asklists as $asklist){
            $content.="
                <url>
                    <loc>".env('APP_URL').'/ask/'.$asklist->id.'.shtml.'."</loc>
                     <lastmod>".date('Y-m-d',strtotime($asklist->time))."</lastmod>
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";
        }
        $content.='</urlset>';
        //echo $content;
        if(Storage::disk('public')->put('sitemap.xml', $content)){
           $msg= 'XML文件生成成功';
        }else{
            $msg= '文件生成失败@';
        }
        return view('sitemap.create',compact('msg'));
    }

    //移动端地图生成
    function mgetSitemap()
    {
        $content = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
xmlns:mobile="http://www.baidu.com/schemas/sitemap-mobile/1/">
        <url>
        <loc>'.str_replace('www.','m.',env('APP_URL')).'</loc>
        <lastmod>'.date('Y-m-d',time()).'</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
        </url>
        ';
        //栏目数据遍历
        $typelinks = DB::table('categories')->pluck('typedir');
        $typeid = DB::table('categories')->pluck('id');
        $articles=DB::table('categories')->join('archives','archives.typeid','=','categories.id')->whereIn('archives.typeid',$typeid)->get();
        $asklists=DB::table('asks')->get();
        foreach ($typelinks as $typelink){
            $content.="
                <url>
                    <loc>".str_replace('www.','m.',env('APP_URL')).$this->retypelink($typelink)."</loc>                   
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";

        }
        foreach ($articles as $article)
        {
            $content.="
                <url>
                    <loc>".str_replace('www.','m.',env('APP_URL')).$this->retypelink($article->typedir).$article->id.'.shtml.'."</loc>
                    <lastmod>".date('Y-m-d',$article->pubdate)."</lastmod>
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";
        }
        foreach ($asklists as $asklist){
            $content.="
                <url>
                    <loc>".str_replace('www.','m.',env('APP_URL')).'/ask/'.$asklist->id.'.shtml.'."</loc>
                     <lastmod>".date('Y-m-d',strtotime($asklist->time))."</lastmod>
                    <changefreq>daily</changefreq>
                    <priority>1.0</priority>
                </url>";
        }
        $content.='</urlset>';
        //echo $content;
        if(Storage::disk('public')->put('msitemap.xml', $content)){
            $msg= 'XML文件生成成功';
        }else{
            $msg= '文件生成失败@';
        }
        return view('sitemap.create',compact('msg'));
    }

    function retypelink($typelink){
        $reid=DB::table('categories')->where('typedir',$typelink)->value('reid')!=0;
       if($reid!=0){
           $typedir=substr(DB::table('categories')->where('id',$reid)->value('typedir'),0,-1).$typelink;
           return $typedir;
       }else{
           return $typelink;
       }
    }
}