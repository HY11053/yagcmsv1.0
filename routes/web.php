<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'Frontend\FrontendController@getIndex');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/demo', 'Demo\TestController@index');
Route::get('/profile', 'HomeController@profile');
//栏目处理路由
Route::get('category','Category\CategoryController@getIndex');
Route::post('category/create/','Category\CategoryController@postCreatecategory');
Route::post('category/update','Category\CategoryController@postUpdatecategory');
Route::post('upload/images/thread','Category\CategoryController@upload_image');
Route::get('category/createcategory/{id?}','Category\CategoryController@getCreatecategory');
Route::get('category/deletecategory/{id?}','Category\CategoryController@getDeletecategory');
Route::get('category/edit/{id}','Category\CategoryController@categoryEdit');
//文档处理路由
Route::get('article/lists','Article\ArticleController@getIndex');
Route::get('article/create','Article\ArticleController@getCreate');
Route::get('article/createbrand','Article\ArticleController@getBrandcreate');
Route::post('article/update','Article\ArticleController@postUpdate');
Route::get('article/edit/{id}','Article\ArticleController@getEdtarticle');
Route::post('article/create','Article\ArticleController@postCreate');
Route::post('article/delete','Article\ArticleController@postDelete');
Route::get('article/noverify','Article\ArticleController@getNoverify');
Route::get('article/ownship','Article\ArticleController@getOwnship');
Route::get('article/recycle','Article\ArticleController@getRecycle');
Route::post('article/uploads','Article\ArticleController@uploadPics');
Route::post('file-upload-batch/2','Article\ArticleController@deletePics');

//友情链接
Route::get('flink','Flink\FlinkController@getIndex');
Route::get('flink/add','Flink\FlinkController@addLinks');
Route::get('flink/edit/{id}','Flink\FlinkController@editLinks');
Route::post('flink/update','Flink\FlinkController@postUpdate');
Route::get('flink/del/{id}','Flink\FlinkController@delLinks');
Route::post('flink/editupdate','Flink\FlinkController@postEditupdate');
//系统基本参数配置
Route::get('sysconfig','Sysconfig\sysconfigController@getConfig');
//图集处理路由

Route::post('litpicscollects','LitpicscollectsController@litpicsCollects');

//前台路由
Route::get('lsbrand','Frontend\FrontendController@getTopcategorys');
Route::get('chaohuodian','Frontend\FrontendController@getChaohuocategorys');
Route::get('jinkoulingshi','Frontend\FrontendController@getChaohuocategorys');
Route::get('ganguodian','Frontend\FrontendController@getChaohuocategorys');
Route::get('lingshijinhuo','Frontend\FrontendController@getNewscategorys');
Route::get('chaohuodian/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('jinkoulingshi/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('jiamengfei','Frontend\FrontendController@getFeiyongcategorys');
Route::get('zhanhui','Frontend\FrontendController@getNewscategorys');
Route::get('news','Frontend\FrontendController@getNewscategorys');
Route::get('lsbrand/{catename}/','Frontend\FrontendController@getCategorys')->where(['catename' => '[a-z 0-9]+']);
Route::get('lsbrand/{catename}/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+', 'catename' => '[a-z 0-9]+']);
Route::get('news/{id}.shtml','Frontend\FrontendController@getNewsarticle')->where(['id' => '[0-9]+']);

//搜索路由
Route::get('search/city/{id}','Search\searchController@getSearchCity')->where(['id'=>'[0-9]+']);
Route::get('search/{br}.shtml','Search\searchController@getSearch')->where(['br'=>'[a-z_0-9]+'])->name('searchs');
Route::post('search/post','Search\searchController@postsearch');
