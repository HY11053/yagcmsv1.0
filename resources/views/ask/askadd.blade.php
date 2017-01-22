<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>问题提问 | </title>

    <!-- Bootstrap -->
    <link href="../asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../asset/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="../asset/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="../asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../asset/build/css/custom.min.css" rel="stylesheet">
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
            <h1>问题提问</h1>
            <hr/>

            <div class="container">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>问题提问<small>请按照————</small></h2>
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


                                <form action="/ask/store" method="post" data-parsley-validate class="form-horizontal form-label-left">
                                    {!! csrf_field() !!}
                                    <div class="form-group col-md-12">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tel">问题标题 <span class="required">*</span>
                                        </label>
                                        <div class="col-md-9 col-sm-6 col-xs-12">
                                            <input type="text" id="asktitle" name="asktitle" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <div class="ln_solid"></div>

                                    @include('layouts.summernote')
                                    <div style="display: none"><textarea  name="textareacontent" id="lawsContent"></textarea></div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-sm-6 col-xs-12 col-md-offset-3">
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
<script src="../asset/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../asset/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../asset/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="../asset/vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../asset/build/js/custom.min.js"></script>
<script src="../asset/plugins/summernote/summernote.min.js"></script>
<script src="../asset/plugins/summernote/lang/summernote-zh-CN.js"></script>
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
</body>

</html>
