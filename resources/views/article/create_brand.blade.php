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
    <link href="../asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../asset/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="../asset/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../asset/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../asset/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <link href="../asset/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="../asset/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/css/fileinput.css" rel="stylesheet">
    <style>.hidden-xs {
            display: inline !important;
        }</style>

    <!-- Custom Theme Style -->
    <link href="../asset/build/css/custom.min.css" rel="stylesheet">
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
                            <form class="form-horizontal form-label-left" method="post" action="/article/create"  enctype="multipart/form-data" >
                                {{ csrf_field() }}
                                <ul class="list-unstyled timeline">
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>标题及描述部分</span>
                                                </a>
                                            </div>
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
                                                        <input type="text" class="form-control" name="title" placeholder="文章标题">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 col-sm-3 col-xs-12 control-label">自定义文档属性</label>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="flags[]" value="h" class="flat"> 头条
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
                                                        <input type="text" class="form-control"  placeholder="短标题" name="shorttitle">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">tag标签</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text"  id="tags" name="tags" class="form-control col-md-10" placeholder="文档tag标签"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">关键字</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" name="keywords" id="keywords" class="form-control col-md-10" placeholder="文档关键词"/>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">经纬度</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <input type="text" name="country" id="country" class="form-control col-md-10" placeholder="填写地区名称即可"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章状态</label>
                                                    <div class="radio col-md-4 col-sm-9 col-xs-12">
                                                        <input type="radio" class="flat" name="iCheck" checked value="1"> 已审核
                                                        <input type="radio" class="flat" name="iCheck" value="0"> 未审核
                                                    </div>

                                                </div>



                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">文章所属栏目</label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <select name="typeid" class="select2_group form-control">


                                                            @foreach ($data as $typedata)

                                                                <option value="{{ $typedata->id }}">{{ $typedata->typename }}</option>

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-2 col-sm-3 col-xs-12">内容描述<span class="required">*</span>
                                                    </label>
                                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                                        <textarea class="form-control" rows="3" name="description" placeholder="文档描述，如留空则默认提取首段"></textarea>
                                                    </div>
                                                </div>


                                            </div>
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

                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                                        <div class="clear ">
                                                            <input id="input-2" name="image" type="file" class="file col-md-12" multiple data-show-upload="false" data-show-caption="true">

                                                        </div>
                                                    </div>
                                                </div>
                                                |<!--litpicend-->
                                            </div>
                                        </div>
                                    </li>
                                    <!--newsssss-->
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>图像处理部分2</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>图集处理</a>
                                                </h2>
                                                |<!--litpic-->
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <input id="input-image-1" name="input-image" type="file" class="file-loading" accept="image/*">

                                                <!-- an example modal dialog to display confirmation of the resized image -->
                                                <div id="kv-success-modal" class="modal fade">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                <h4 class="modal-title">Yippee!</h4>
                                                            </div>
                                                            <div id="kv-success-box" class="modal-body">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="imagespic" name="imagespic" value="" />

                                                |<!--litpicend-->
                                            </div>
                                        </div>
                                    </li>
                                    <!--newsssssend-->
                                    <!--new add-->
                                    <li>
                                        <div class="block">
                                            <div class="tags">
                                                <a href="" class="tag">
                                                    <span>品牌信息添加</span>
                                                </a>
                                            </div>
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>品牌信息添加部分</a>
                                                </h2>
                                                |<!--litpic-->
                                                <div class="byline">
                                                    <span>13 hours ago</span> by <a>Jane Smith</a>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">品牌名称</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandname" id="brandname" class="form-control col-md-10" placeholder="品牌名称"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">成立时间</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandtime" id="brandtime" class="form-control col-md-10" placeholder="1970-1-1"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">品牌发源地</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandorigin" id="brandorigin" class="form-control col-md-10" placeholder="品牌发源地"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">门店总数</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandnum" id="brandnum" class="form-control col-md-10" placeholder="门店总数"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">加盟费用</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandpay" id="brandpay" class="form-control col-md-10" placeholder="加盟费用"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">加盟区域</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brabdaea" id="brabdaea" class="form-control col-md-10" placeholder="加盟区域"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">经营范围</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandmap" id="brandmap" class="form-control col-md-10" placeholder="经营范围"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">加盟人群</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandperson" id="brandperson" class="form-control col-md-10" placeholder="加盟人群"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">加盟意向人数</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandattch" id="brandattch" class="form-control col-md-10" placeholder="加盟意向人数"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">申请加盟人数</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandapply" id="brandapply" class="form-control col-md-10" placeholder="申请加盟人数"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">开店所需面积</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandchat" id="brandchat" class="form-control col-md-10" placeholder="开店所需面积"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">公司名称</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandgroup" id="brandgroup" class="form-control col-md-10" placeholder="公司名称"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">公司地址</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandgarea" id="brandgarea" class="form-control col-md-10" placeholder="公司地址"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label class="control-label col-md-4 col-sm-3 col-xs-12">是否区域授权</label>
                                                        <div class="col-md-8 col-sm-9 col-xs-12">
                                                            <input type="text" name="brandduty" id="brandduty" class="form-control col-md-10" placeholder="是否区域授权"/>
                                                            <input type="hidden" name="mid" id="mid" class="form-control col-md-10" value="1"/>
                                                        </div>
                                                    </div>


                                                </div>
                                                |<!--litpicend-->
                                            </div>
                                        </div>
                                    </li>
                                    @include('layouts.brandedit')
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
<script src="../asset/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../asset/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../asset/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../asset/vendors/nprogress/nprogress.js"></script>
<script src="../asset/vendors/dropzone/dist/min/dropzone.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../asset/vendors/iCheck/icheck.min.js"></script>
<!-- PNotify -->
<script src="../asset/vendors/pnotify/dist/pnotify.js"></script>
<script src="../asset/vendors/pnotify/dist/pnotify.buttons.js"></script>
<script src="../asset/vendors/pnotify/dist/pnotify.nonblock.js"></script>

<!-- Custom Theme Scripts -->
<script src="../asset/build/js/custom.min.js"></script>

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



<script src="../asset/plugins/summernote/summernote.min.js"></script>
<script src="../asset/plugins/summernote/lang/summernote-zh-CN.js"></script>

<script src="../js/summernote.js"></script>
<!-- /Custom Notification -->

<!-- /Custom Notification -->
<script src="/js/fileinput.min.js"></script>
<script src="/js/plugins/canvas-to-blob.js"></script>
<script>
    $("#input-image-1").fileinput({
        uploadUrl: "/article/uploads",
        allowedFileExtensions: ["jpg", "png", "gif"],
        maxImageWidth: 300,
        maxFileCount: 6,
        resizeImage: true
    }).on('filepreupload', function() {
        $('#kv-success-box').html('');
    }).on('fileuploaded', function(event, data) {
        $('#kv-success-box').append(data.response.link);
        $('#kv-success-modal').modal('show');
        $("#imagespic").val($("#imagespic").val()+data.response.link+',');
    });
</script>


</body>
</html>