<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>友情链接列表 | </title>

    <!-- Bootstrap -->
    <link href="../asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../asset/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../asset/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        @include('layouts.left')

                <!-- top navigation -->
        @include('layouts.navigation')

                <!-- page content -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>友情链接管理列表</h3>
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
                                <h2>友情链接 <small>Flink</small></h2>
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

                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                        <tr class="headings">
                                            <th>
                                                <input type="checkbox" id="check-all" class="flat">
                                            </th>
                                            <th class="column-title">id </th>
                                            <th class="column-title">电话 </th>
                                            <th class="column-title">姓名 </th>
                                            <th class="column-title">地址 </th>
                                            <th class="column-title">性别</th>
                                            <th class="column-title">备注 </th>
                                            <th class="column-title">提交时间 </th>
                                            <th class="column-title">IP地址</th>
                                            <th class="column-title">来源</th>
                                            <th class="column-title">状态</th>
                                            <th class="column-title no-link last"><span class="nobr">删除</span>
                                            </th>
                                            <th class="bulk-actions" >
                                                <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down">编辑</i></a>
                                            </th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        @foreach($dates as $key=>$data)
                                        <tr class="even pointer">
                                            <td class="a-center ">
                                                <input type="checkbox" class="flat" name="table_records">
                                            </td>
                                            <td class=" ">{{ $data->id }}</td>
                                            <td class=" ">{{ $data->phone }} </td>
                                            <td class=" ">{{ $data->name}} </td>
                                            <td class=" ">{{$data->addr}}</td>
                                            <td class=" ">{{$data->sex}}</td>
                                            <td class=" ">{{$data->content}}</td>
                                            <td class=" ">{{$data->time}}</td>
                                            <td class=" ">{{$data->ip}}</td>
                                            <td class=" ">{{$data->host}}</td>
                                            <td class=" ">{{$data->mark}}</td>
                                           <td class=" last"><a href="/flink/del/{{ $data->id }}">删除</a>
                                            </td>
                                        </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {{$dates->links()}}
                                </div>
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
</body>
</html>