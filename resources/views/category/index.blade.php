<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>栏目添加| </title>

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
                        <h3>栏目列表及栏目编辑</h3>
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

                <div class="">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><i class="fa fa-align-left"></i> 栏目列表管理 <small>category control</small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a href="/category/createcategory" class="btn  btn-xs"><i class="fa fa-edit"></i> 添加栏目 </a></li>

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

                                <!-- start accordion -->
                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                                    @foreach ($type_row_data as $key=>$tyep_row)


                                    <div class="panel">
                                        <div class="panel-heading" role="tab" id="heading{{ $key+1 }}" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $key+1 }}" aria-expanded="@if(($key+1)==1)true @else false @endif" aria-controls="collapse{{ $key+1 }}">
                                            <div class="panel-title" style="height: 20px;">
                                                <p class="col-md-8"><input type="checkbox" class="flat">{{ $tyep_row->typename }} </p>
                                                <p class="col-md-4">
                                                   <button type="button" class="btn btn-default btn-sm"  style="float: right" data-toggle="tooltip" data-placement="right" title="删除" onclick="javascript:window.location.href='/category/deletecategory/id?id={{ $tyep_row->id }}'">删除</button>

                                                    <button type="button" class="btn btn-success btn-sm" style="float: right" data-toggle="tooltip" data-placement="left" title="预览">预览</button>

                                                    <button type="button" class="btn btn-danger btn-sm" style="float: right;" data-toggle="tooltip" data-placement="top" title="编辑" onclick="javascript:window.location.href='/category/edit/id?id={{ $tyep_row->id }}'">编辑</button>

                                                     <button type="button" class="btn btn-warning btn-sm"  style="float: right" data-toggle="tooltip" data-placement="bottom" onclick="javascript:window.location.href='/category/createcategory/id?id={{ $tyep_row->id }}'" title="添加子栏目">添加子栏目</button>
                                                </p>
                                            </div>
                                        </div>
                                        <div id="collapse{{ $key+1 }}" class="panel-collapse collapse @if(($key+1)==1) in @else @endif" role="tabpanel" aria-labelledby="heading{{ $key+1 }}">
                                            <div class="panel-body">

                                                <!-- Start to do list -->
                                                <ul class="to_do">
                                                    @foreach ($type_rowson_data as $tyep_sonrow)

                                                        @if ($tyep_sonrow->reid === $tyep_row->id )

                                                        <li style="height: 40px;">
                                                            <p class="col-md-8"> <input type="checkbox" class="flat"> {{ $tyep_sonrow->typename }} </p>

                                                            <p class="col-md-4">
                                                                <button type="button" class="btn btn-default btn-sm"  style="float: right" data-toggle="tooltip" data-placement="right" title="删除" onclick="javascript:window.location.href='/category/deletecategory/id?id={{ $tyep_sonrow->id }}'">删除</button>

                                                                <button type="button" class="btn btn-success btn-sm" style="float: right" data-toggle="tooltip" data-placement="left" title="预览">预览</button>

                                                                <button type="button" class="btn btn-danger btn-sm" style="float: right" data-toggle="tooltip" data-placement="top" title="编辑" onclick="javascript:window.location.href='/category/edit/id?id={{ $tyep_sonrow->id }}'">编辑</button>


                                                            </p>
                                                        </li>

                                                        @endif

                                                    @endforeach

                                                </ul>
                                                <!-- End to do list -->
                                            </div>
                                        </div>
                                    </div>



                                        @endforeach


                                   <!-- <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">Collapsible Group Items #2</h4>
                                        </a>
                                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                <p><strong>Collapsible Item 2 data</strong>
                                                </p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel">
                                        <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">Collapsible Group Items #3</h4>
                                        </a>
                                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                <p><strong>Collapsible Item 3 data</strong>
                                                </p>
                                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <!-- end of accordion -->


                            </div>
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
            title: "栏目添加管理",
            type: "注意事项",
            text: "目前栏目支持二级分类，二级以下分类在添加栏目界面上不能选中",
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
<!-- /Custom Notification -->
</body>
</html>