<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Gentellela Alela! | </title>

    <!-- Bootstrap -->
    <link href="/asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/asset/build/css/custom.min.css" rel="stylesheet">
    <![endif]-->

</head>


<body class="nav-md">

<div class="container body">


    <div class="main_container">

        @include('layouts.left')

                <!-- top navigation -->
        @include('layouts.navigation')


                <!-- page content -->
        <div class="right_col" role="main">

            <br />
            <h1>站点核心配置</h1>
            <hr/>

            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>站点信息配置 <small>配置信息通过config('参数')在全局调用</small></h2>if
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />


                                <form id="demo-form2" onsubmit="return false;" data-parsley-validate class="form-horizontal form-label-left">
                                    {!! csrf_field() !!}

                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">网站名称 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-12 col-xs-12">
                                            <input type="text" id="host_url" name="host_url" required="required" value="{{$config['webname']}}" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email" class="control-label col-md-3 col-sm-3 col-xs-12">站点根网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" id="keyword" type="text" value="{{$config['basehost']}}" name="search_keyword">
                                        </div>
                                    </div>



                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">首页网址</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  class="form-control col-md-7 col-xs-12" type="text" id="lianxi" value="{{$config['indexurl']}}" name="lianxi">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">主页链接名</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value="{{$config['indexname']}}"   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">附件上传路径</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value="{{$config['medias_dir']}}"   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">备案信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value="{{$config['beian']}}"   name="remark">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">站点关键词</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="remark" class="form-control col-md-7 col-xs-12" type="text" value="{{$config['keywords']}}"   name="remark">
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">版权信息</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder="">{{$config['powerby']}}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label for="remark" class="control-label col-md-3 col-sm-3 col-xs-12">站点描述</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="resizable_textarea form-control" placeholder="">{{$config['description']}}</textarea>
                                        </div>
                                    </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                            <button type="submit" name="submit"  id="tj_btn" class=" col-md-12 btn btn-primary submbtn">提交</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- footer content -->

            <!-- /footer content -->

        </div>
        <!-- /page content -->
    </div>


</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>

<!-- jQuery -->
<script src="/asset/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/asset/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/asset/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="/asset/vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="/asset/build/js/custom.min.js"></script>
<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $("#tj_btn").click(function(){
            var host_url=$("#host_url").val();
            var keyword=$("#keyword").val();
            var remark=$("#remark").val();
            var lianxi=$("#lianxi").val();
            var flinkid=$("#flinkid").val();

            if(host_url){

                $.ajax({
                    //提交数据的类型 POST GET
                    type:"POST",
                    //提交的网址
                    url:"",
                    //提交的数据
                    data:{
                        "host_url":host_url,
                        "keyword":keyword,
                        "remark":remark,
                        "lianxi":lianxi,
                        "flinkid":flinkid,
                    },
                    //返回数据的格式
                    datatype: "html",    //"xml", "html", "script", "json", "jsonp", "text".

                    success:function (response, stutas, xhr) {
                        alert(response);


                    }
                });



            } else{
                alert("未输入域名地址或不正确，请重新输入")
            }





        })


    });


</script>

</body>

</html>
