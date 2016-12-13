<!DOCTYPE html>
<html lang="zh">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>文章添加| </title>

    <!-- Bootstrap -->
    <link href="/asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="/asset/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="/asset/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="/asset/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <link href="/asset/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/asset/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="http://ysgtj.ysg1717.com/assets/css/fileinput.css" rel="stylesheet">
<style>.hidden-xs {
        display: inline !important;
    }</style>

    <!-- Custom Theme Style -->
    <link href="/asset/build/css/custom.min.css" rel="stylesheet">
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
                        <h3>文章发布</h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-12 col-sm-5 col-xs-12 form-group pull-right top_search">
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

                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>文章发布界面 <small>Sessions</small></h2>
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
                            <form class="form-horizontal form-label-left" method="post" action="/article/update"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                            <ul class="list-unstyled timeline">
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="" class="tag">
                                                <span>标题及描述部分</span>
                                            </a>
                                        </div>
                                        @foreach ($article_data as $article_datas)
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>文档标题及关键字描述处理部分</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 hours ago</span> by <a>Jane Smith</a>
                                            </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章标题</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" name="title" value="{{ $article_datas->title }}" placeholder="文章标题">
                                                        <input type="hidden" name="articelid" value="{{ $article_datas->id }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="flags[]"  value="h" class="flat"> 头条
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="p" class="flat"> 图片
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="c" class="flat"> 推荐
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="f" class="flat"> 幻灯
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="s" class="flat"> 滚动
                                                        </label>
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="a" class="flat"> 特荐
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">简略标题 </label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" class="form-control" value="{{ $article_datas->shorttitle }}"  placeholder="短标题" name="shorttitle">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">tag标签</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text"  id="tags" name="tags" value="{{ $addonarticle_tag }}" class="form-control col-md-10" placeholder="文档tag标签"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">关键字</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" name="keywords" id="keywords" value="{{ $article_datas->keywords }}" class="form-control col-md-10" placeholder="文档关键词"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">经纬度</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" name="country" id="country" value="{{ $addonarticle_coordinates }}" class="form-control col-md-10"  placeholder="填写地区名称即可"/>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章所属栏目</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <select name="typeid" class="select2_group form-control">


                                                            @foreach ($data as $typedata)


                                                                <option value="{{ $typedata->id }}" @if ($article_datas->typeid == $typedata->id ) selected="selected" @endif>{{ $typedata->typename }}</option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">内容描述<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <textarea class="form-control" rows="3" name="description"  placeholder="文档描述，如留空则默认提取首段">{{ $article_datas->description }}</textarea>
                                                    </div>
                                                </div>


                                        </div>
                                        @endforeach
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="" class="tag">
                                                <span>图像处理部分</span>
                                            </a>
                                        </div>
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>缩略图处理</a>
                                            </h2>
                                            |<!--litpic-->
                                            <div class="byline">
                                                <span>13 hours ago</span> by <a>Jane Smith</a>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <img src="{{ $article_datas->litpic }}" class="img-rounded img-responsive"/>

                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="clear ">
                                                        <label  class="control-label col-md-4 col-sm-3 col-xs-12">选择头像</label>
                                                        <input id="input-2" name="image" type="file" class="file col-md-12" value="" multiple data-show-upload="false" data-show-caption="true">

                                                    </div>
                                                </div>
                                            </div>
                                            |<!--litpicend-->
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="block">
                                        <div class="tags">
                                            <a href="" class="tag">
                                                <span>文章内容部分</span>
                                            </a>
                                        </div>
                                        <div class="block_content">
                                            <h2 class="title">
                                                <a>文档内容处理部分</a>
                                            </h2>
                                            <div class="byline">
                                                <span>13 hours ago</span> by <a>Jane Smith</a>
                                            </div>


                                            <div class="wrapper wrapper-content">

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="ibox float-e-margins">

                                                            <div class="ibox-content no-padding">

                                                                <div class="summernote" id="summernote">
                                                                    {!! $addonarticle_data !!}
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="ibox float-e-margins">

                                                            <div class="ibox-content">

                                                                <h2>
                                                                    Summernote编辑器及文档发布使用详情
                                                                </h2>

                                                                <div class="alert alert-warning">
                                                                   文档内容中图片可本地上传至自己服务器或通过外部链接插入图片，文档缩略图需手动上传，目前未做自动提取

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>



                                            <div style="display: none"><textarea  name="textareacontent" id="lawsContent">{!! $addonarticle_data !!}</textarea></div>
                                            <div class="form-group">
                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                    <button type="submit" class="btn btn-primary">Cancel</button>
                                                    <button type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
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
<!-- bootstrap-progressbar -->
<script src="/asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/asset/vendors/iCheck/icheck.min.js"></script>
<!-- PNotify -->
<script src="/asset/vendors/pnotify/dist/pnotify.js"></script>
<script src="/asset/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="/asset/vendors/pnotify/dist/pnotify.nonblock.js"></script>

<!-- Custom Theme Scripts -->
<script src="/asset/build/js/custom.min.js"></script>

<!-- PNotify -->
<script>
    $(document).ready(function() {
        new PNotify({
            title: "文章发布界面",
            type: "info",
            text: "请按要求及需求添加对应数据内容",
            nonblock: {
                nonblock: true
            },
            addclass: 'dark',
            styling: 'bootstrap3',
            hide: false,
            before_close: function(PNotify) {
                PNotify.update({
                    title: PNotify.options.title + " - Enjoy your Stay",
                    before_close: null
                });

                PNotify.queueRemove();

                return false;
            }
        });

    });
</script>
<!-- /PNotify -->

<!-- Custom Notification -->
<script>
    $(document).ready(function() {
        var cnt = 10;

        TabbedNotification = function(options) {
            var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                    "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

            if (!document.getElementById('custom_notifications')) {
                alert('doesnt exists');
            } else {
                $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                $('#custom_notifications #notif-group').append(message);
                cnt++;
                CustomTabs(options);
            }
        };

        CustomTabs = function(options) {
            $('.tabbed_notifications > div').hide();
            $('.tabbed_notifications > div:first-of-type').show();
            $('#custom_notifications').removeClass('dsp_none');
            $('.notifications a').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                        tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                others.removeClass('active');
                $this.addClass('active');
                $(tabbed_notifications).children('div').hide();
                $(target).show();
            });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
            idname = $(this).parent().parent().attr("id");
            tabid = idname.substr(-2);
            $('#ntf' + tabid).remove();
            $('#ntlink' + tabid).parent().remove();
            $('.notifications a').first().addClass('active');
            $('#notif-group div').first().css('display', 'block');
        });
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

        function get_tags(flags) {
            var obj_tags=document.getElementsByClassName('flat');
            for (i=0; i<obj_tags.length;i++){
                if(flags.indexOf(obj_tags[i].value)!= -1){
                    obj_tags[i].setAttribute('checked','checked');
                }
            }
        }
        get_tags('{{$article_flag}}}');
    })

</script>
<!-- /Custom Notification -->
<script src="http://ysgtj.ysg1717.com/assets/js/fileinput.min.js"></script>

</body>
</html>