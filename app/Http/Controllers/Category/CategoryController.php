<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\category;

class CategoryController extends Controller
{
    //
    //category show
    public function __construct(){
        $this->middleware('auth');
    }

    /*
     * 栏目列表管理
     *
     *
     *
     * */
    function getIndex(){

        $category=new category;

        $type_row_data=$category->where('reid', 0)->orderBy('id', 'asc')->get();

        $type_rowson_data=$category->where('reid', '<>',0)->get();

        return view('category.index',compact('type_row_data','type_rowson_data'));
    }

    /*
     *
     * 栏目添加管理
     * @id参数为可选参数，用于添加子级栏目，不传默认为添加顶级栏目
     */
    function getCreatecategory(Request $request,$id='0'){

        $inputid=$request->input($id);
        $category=new category;
        $data=$category->all();

     return view('category.create',compact('data','inputid'));

    }
    /*
     * 栏目添加模块
     *
     *
     *
     * */
    public function postCreatecategory(Request $request){

        $requests=$request->all();


        if(!empty($requests['typename']) && !empty($requests['seotitle']) && !empty($requests['typedir']) && !empty($requests['description'])){

            $category = new category;
            $category->typename = $request->typename;
            $category->reid = $request->reid;
            $category->typedir = $request->typedir;
            $category->seotitle = $request->seotitle;
            $category->sortrank = $request->sortrank;
            $category->keywords = $request->keywords;
            $category->description = $request->description;
            $category->content = $request->textareacontent;



            //栏目图片处理
            if(!empty($requests['image'])){

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
                $category->litpic= '/images/thread/'.$img_relpath;
            }


            $category->save();

        }else{

            exit('栏目信息填写不全，请按要求填写');
        }

        return redirect('/category');
        
    }
    /*
     *
     * summernote编辑器图片上传处理
     */

    public function upload_image(Request $request)
    {

        if(!$request->hasFile('file')){
            exit('上传文件为空！');
        }
        $file = $request->file('file');
        //判断文件上传过程中是否出错
        $allowed_extensions = ["png", "jpg", "gif"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            exit(['error' => 'You may only upload png, jpg or gif.']);
        }
        $upload_path='images/thread'.date('/Y/m/d',time());
        $destinationPath =public_path($upload_path);
        $extension = $file->getClientOriginalExtension();
        $fileName = md5(str_random(10)).'.'.$extension;
        $file->move($destinationPath, $fileName);
        $img_relpath=date('Y/m/d/',time()). $fileName;
        return $img_relpath;
        

    }

    /*
     *
     *
     * 栏目编辑模块
     */
    function categoryEdit(Request $request,$id){
        $inputid=$request->input($id);

        $categorys=new category;
        $reid=$categorys->where('id',$inputid)->value('reid');
        $category_data=$categorys->where('id',$inputid)->get();
        $category=$categorys->all();
        return view('category.edit',compact('category_data','category','reid'));

    }
    
    /*
     * 
     * 栏目更新模块
     */
    function postUpdatecategory(Request $request){

        $requests=$request->all();

        if(!empty($requests['typename']) && !empty($requests['seotitle']) && !empty($requests['typedir']) && !empty($requests['description'])){

            $category = new category;

             $category->where('id', $request->typeid)->update(
                [
                    'typename'=>$request->typename,
                    'reid'=>$request->reid,
                    'typedir'=>$request->typedir,
                    'seotitle'=>$request->seotitle,
                    'sortrank'=>$request->sortrank,
                    'keywords'=>$request->keywords,
                    'description'=>$request->description,
                    'content'=>$request->textareacontent
                ]

            );


            //栏目图片处理
            if(!empty($requests['image'])){

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
                $category->where('id', $request->typeid)->update(
                    ['litpic'=>$litpic]
                );
            }




        }else{

            exit('栏目信息填写不全，请按要求填写');
        }

        return redirect('/category');

      

    }


    /*
     *
     * 删除栏目模块
     * $reid:获取当前栏目的父级栏目
     * $frid获取子栏目的父级栏目ID
     */

    public function getDeletecategory(Request $request ,$id){

        $inputid=$request->input($id);
        $category=new category;
        $reid=$category->where('id',$inputid)->value('reid');
        //var_dump($reid);
        $frid=$category->where('reid',$inputid)->value('id');
       // var_dump($frid);
        if(!empty($frid)){

            exit('顶级栏目下含有子级栏目，请移动当前子级栏目或删除当前子级栏目后再删除当前顶级栏目');

        }else{

            $category->destroy($inputid);
            echo '删除成功';
            return redirect('/category');
        }


    }
}
