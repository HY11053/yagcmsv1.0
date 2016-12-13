<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>栏目添加 | </title>

    <!-- Bootstrap -->
    <link href="/asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <link href="/asset/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/asset/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/asset/build/css/custom.min.css" rel="stylesheet">
    <link href="http://ysgtj.ysg1717.com/assets/css/fileinput.css" rel="stylesheet">
    <style>.hidden-xs {
            display: inline !important;
        }</style>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @include('layouts.left')

                <!-- top navigation -->

        @include('layouts.navigation')
                <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>添加栏目</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>栏目内容添加<small>sub title</small></h2>
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

                                <form class="form-horizontal form-label-left" method="post" action="/category/update"  enctype="multipart/form-data" novalidate>
                                    {{ csrf_field() }}.
                                    <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                                    </p>
                                    <span class="section">栏目信息填写</span>
                                    @foreach ($category_data as $typedatas)

                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="name">栏目名称 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input id="typename" value="{{ $typedatas->typename }}" class="form-control col-md-7 col-xs-12"  name="typename" placeholder="零食店加盟品牌大全" required="required" type="text">
                                            <input id="typeid" value="{{ $typedatas->id }}" name="typeid" type="hidden">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12">父级栏目 <span class="required">*</span></label>
                                        <div class="col-md-5 col-sm-9 col-xs-12">

                                            <select name="reid" class="form-control">

                                                <option >0</option>

                                                @foreach ($category as $typedata)

                                                    <option value="{{ $typedata->id }}" @if ($typedata->id == $reid ) selected="selected" @endif  @if ($typedata->reid != 0 )Disabled @endif>{{ $typedata->typename }}</option>

                                                @endforeach

                                            </select>

                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="typedir">栏目路径 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input type="text" id="typedir" value="{{ $typedatas->typedir }}" name="typedir"  data-validate-length-range="16" data-validate-words="1" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="seotitle">SEO标题 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">

                                            <input class="form-control col-md-7 col-xs-12" id="seotitle" value="{{ $typedatas->seotitle }}" name="seotitle" placeholder="零食店加盟品牌大全" required="required" type="text" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="keywords">keyword <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">

                                            <input class="form-control col-md-7 col-xs-12" id="keywords" name="keywords" value="{{ $typedatas->keywords }}" placeholder="零食店加盟品牌大全" required="required" type="text" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="sortrank">栏目排序 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input type="text" 	data-parsley-type="number" id="sortrank" name="sortrank" required="required" value="{{ $typedatas->sortrank }}" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-1 col-sm-3 col-xs-12" for="description">栏目描述 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <textarea id="description" required="required" name="description" class="form-control col-md-7 col-xs-12">{{ $typedatas->description }}</textarea>
                                        </div>
                                    </div>



                                    <div class="item form-group">
                                        <label  class="control-label col-md-1 col-sm-3 col-xs-12">选择头像<span class="required">*</span></label>
                                        </label>
                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                            <input id="input-2" name="image" type="file" value="{{ $typedatas->image }}" class="file col-md-12" multiple data-show-upload="false" data-show-caption="true">
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>
                                    <span class="section">栏目内容</span>


                                    <div class="wrapper wrapper-content">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">

                                                    <div class="ibox-content no-padding">

                                                        <div class="summernote" id="summernote">
                                                            {!! $typedatas->content !!}
                                                        </div>
                                                        <div style="display: none"><textarea  name="textareacontent" id="lawsContent">{!! $typedatas->content !!} </textarea></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="ibox float-e-margins">

                                                    <div class="ibox-content">

                                                        <h2>
                                                            栏目添加季Summernote编辑器使用
                                                        </h2>

                                                        <div class="alert alert-warning">

                                                            可自动生成表格和图片上传至服务器端或远程加入图片链接地址，文本内容和其他编辑器一样！
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    @endforeach




                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-3">
                                            <button type="submit" class="btn btn-primary">取消</button>
                                            <button id="send" type="submit" class="btn btn-success">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/asset/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/asset/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/asset/vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<script src="/asset/vendors/validator/validator.js"></script>

<!-- Custom Theme Scripts -->
<script src="/asset/build/js/custom.min.js"></script>

<!-- validator -->


<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });
</script>


<script src="/asset/plugins/summernote/summernote.min.js"></script>
<script src="/asset/plugins/summernote/lang/summernote-zh-CN.js"></script>

<script>



    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#summernote').summernote({
            height: 300,
            lang : 'zh-CN',
            callbacks: {
                onImageUpload: function(files) {
                    //上传图片到服务器，使用了formData对象，至于兼容性...据说对低版本IE不太友好
                    var formData = new FormData();
                    formData.append('file',files[0]);
                    $.ajax({
                        type: 'POST',
                        url : '/upload/images/thread',//后台文件上传接口
                        data : formData,
                        enctype: 'multipart/form-data',
                        processData : false,
                        contentType : false,
                        success: function(filename) {
                            var file_path ='/images/thread/'+ filename;
                            console.log(file_path);
                            $('#summernote').summernote("insertImage", file_path);
                        }
                    });
                },
                onChange: function(contents, $editable) {
                   // console.log('onChange:', contents, $editable);
                    $("#lawsContent").val(contents)
                    console.log($("#lawsContent").val())
                },




            }
        });


    })

</script>
<!-- /validator -->
<script src="http://ysgtj.ysg1717.com/assets/js/fileinput.min.js"></script>
</body>
</html>