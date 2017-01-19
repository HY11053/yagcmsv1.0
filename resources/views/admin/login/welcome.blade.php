<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>laravel_5.3_CMS| 网站栏目管理 </title>

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
        <div class="right_col" role="main">
            简介：零食品牌CMS是基于laravel5.3框架开发的CMS系统
            <hr/>
            当前版本V1.0
            <hr/>
            运行环境信息：{{$_SERVER['SERVER_SOFTWARE']}}
            <hr/>
            数据库类型：{{env('DB_CONNECTION')}}
            <hr/>
            当前登录用户名：{{auth('admin')->user()->name}}
            <hr/>
            文章总数：
            <hr/>
            问答总数：
            <hr/>
            收录量：
            <hr/>
            当日收录：
            <hr/>

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
<!-- bootstrap-progressbar -->
<script src="../asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../asset/build/js/custom.min.js"></script>

</body>
</html>