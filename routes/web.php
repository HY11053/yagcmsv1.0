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
//首页路由


//登录路由
Auth::routes();
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');
});

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
Route::get('article/lists','Article\ArticleController@getIndex')->name('adminIndex');
Route::get('article/create','Article\ArticleController@getCreate');
Route::get('article/createbrand','Article\ArticleController@getBrandcreate');
Route::get('article/createjmf','Article\ArticleController@getJmfcreate');
Route::post('article/update','Article\ArticleController@postUpdate');
Route::get('article/edit/{id}','Article\ArticleController@getEdtarticle');
Route::post('article/create','Article\ArticleController@postCreate');
Route::post('article/delete','Article\ArticleController@postDelete');
Route::post('article/destory','Article\ArticleController@postDestory');
Route::get('article/noverify','Article\ArticleController@getNoverify');
Route::get('article/restore/{id}','Article\ArticleController@getRestore');
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
//地图及电话处理
Route::get('sitemapcreate','SimeMap\SiteMapController@getSitemap');
Route::get('msitemapcreate','SimeMap\SiteMapController@mgetSitemap');
Route::get('baidusubmit','Sundry\BaiduSubmitController@getBaidusubmits');
Route::post('/phone','phone\PhoneController@postPhoneDates');
Route::get('/phone','phone\PhoneController@getPhoneDates');
/*
|--------------------------------------------------------------------------
|
|移动端前台处理路由
|
|--------------------------------------------------------------------------
*/
Route::group(['domain' => 'm.larcms.com'], function () {
    Route::get('/', 'Frontend\MobileFrontendController@getIndex');
    Route::get('lsbrand','Frontend\MobileFrontendController@getTopcategorys');
    Route::get('chaohuodian','Frontend\MobileFrontendController@getChaohuocategorys');
    Route::get('jinkoulingshi','Frontend\MobileFrontendController@getChaohuocategorys');
    Route::get('ganguodian','Frontend\MobileFrontendController@getChaohuocategorys');
    Route::get('lingshijinhuo','Frontend\MobileFrontendController@getNewscategorys');
    Route::get('chaohuodian/{id}.shtml','Frontend\MobileFrontendController@getArticles')->where(['id' => '[0-9]+']);
    Route::get('ganguodian/{id}.shtml','Frontend\MobileFrontendController@getArticles')->where(['id' => '[0-9]+']);
    Route::get('jinkoulingshi/{id}.shtml','Frontend\MobileFrontendController@getArticles')->where(['id' => '[0-9]+']);
    Route::get('jiamengfei','Frontend\MobileFrontendController@getFeiyongcategorys');
    Route::get('jiamengfei/{id}.shtml','Frontend\MobileFrontendController@getArticles')->where(['id' => '[0-9]+']);
    Route::get('zhanhui','Frontend\MobileFrontendController@getNewscategorys');
    Route::get('citys','Frontend\MobileFrontendController@getNewscategorys');
    Route::get('news','Frontend\MobileFrontendController@getNewscategorys');
    Route::get('lsbrand/{catename}/','Frontend\MobileFrontendController@getCategorys')->where(['catename' => '[a-z 0-9]+']);
    Route::get('lsbrand/{catename}/{id}.shtml','Frontend\MobileFrontendController@getArticles')->where(['id' => '[0-9]+', 'catename' => '[a-z 0-9]+']);
    Route::get('news/{id}.shtml','Frontend\MobileFrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
    Route::get('zhanhui/{id}.shtml','Frontend\MobileFrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
    Route::get('lingshijinhuo/{id}.shtml','Frontend\MobileFrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
    Route::get('citys/{id}.shtml','Frontend\MobileFrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
    Route::get('paihangbang','Frontend\MobileFrontendController@getPaihangbang');
});
/*
|--------------------------------------------------------------------------
|
|PC端前台处理路由
|
|--------------------------------------------------------------------------
*/
Route::get('/', 'Frontend\FrontendController@getIndex');
Route::get('lsbrand','Frontend\FrontendController@getTopcategorys');
Route::get('chaohuodian','Frontend\FrontendController@getChaohuocategorys');
Route::get('jinkoulingshi','Frontend\FrontendController@getChaohuocategorys');
Route::get('ganguodian','Frontend\FrontendController@getChaohuocategorys');
Route::get('lingshijinhuo','Frontend\FrontendController@getNewscategorys');
Route::get('lingshijinhuo/page/{$page}','Frontend\FrontendController@getNewscategorys')->name('lingshijinhuo');
Route::get('chaohuodian/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('ganguodian/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('jinkoulingshi/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('jiamengfei','Frontend\FrontendController@getFeiyongcategorys');
Route::get('jiamengfei/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+']);
Route::get('zhanhui','Frontend\FrontendController@getNewscategorys');
Route::get('zhanhui/page/{$page}','Frontend\FrontendController@getNewscategorys')->name('zhanhui');
Route::get('citys','Frontend\FrontendController@getNewscategorys');
Route::get('citys/page/{$page}','Frontend\FrontendController@getNewscategorys')->name('citys');
Route::get('news','Frontend\FrontendController@getNewscategorys');
Route::get('news/page/{page}','Frontend\FrontendController@getNewscategorys')->name('news');
Route::get('lsbrand/{catename}/','Frontend\FrontendController@getCategorys')->where(['catename' => '[a-z 0-9]+']);
Route::get('lsbrand/page/{page}','Frontend\FrontendController@getTopcategorys')->name('lsbrand');
Route::get('lsbrand/{catename}/{id}.shtml','Frontend\FrontendController@getArticles')->where(['id' => '[0-9]+', 'catename' => '[a-z 0-9]+']);
Route::get('news/{id}.shtml','Frontend\FrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
Route::get('zhanhui/{id}.shtml','Frontend\FrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
Route::get('lingshijinhuo/{id}.shtml','Frontend\FrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
Route::get('citys/{id}.shtml','Frontend\FrontendController@getNewsarticle')->where(['id' => '[0-9]+']);
Route::get('paihangbang','Frontend\FrontendController@getPaihangbang');
//搜索路由
Route::get('search/city/{id}','Search\searchController@getSearchCity')->where(['id'=>'[0-9]+']);
Route::get('search/{br}.shtml','Search\searchController@getSearch')->where(['br'=>'[a-z_0-9]+'])->name('searchs');
Route::post('search/post','Search\searchController@postsearch');
//问答路由
Route::get('ask/lists','Ask\AskController@getAsklists')->name('ask');
Route::get('ask/add','Ask\AskController@addAsklists');
Route::post('ask/store','Ask\AskController@askStore');
Route::get('ask','Ask\AskController@indexAsklists');
Route::get('ask/{id}.shtml','Ask\AskController@infosAsklists')->where(['id'=>'[0-9]+']);
Route::post('ask/commitstore','Ask\AskStoreController@commitStore');
Route::get('ask/edit/{id}','Ask\AskController@getEditask')->where(['id'=>'[0-9]+']);
Route::post('/ask/update','Ask\AskController@askUpdate');
Route::get('ask/del/{id}','Ask\AskController@delAsk')->where(['id'=>'[0-9]+']);
//关于我们

Route::get('about',function (){
    return view('frontend.about');
});
Route::get('contact',function (){
    return view('frontend.contact');
});
Route::get('law',function (){
    return view('frontend.law');
});

