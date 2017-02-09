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
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>文档管理 <small>文档列表</small></h3>
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
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>文档列表管理</h2>
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
                                <p class="col-md-6 col-md-offset-6">文档添加选择
                                    <a href="/article/create" class="btn btn-danger btn-group-lg"><i class="fa fa-tag"></i> 添加文档 </a>
                                    <a href="/article/createbrand" class="btn btn-success btn-group-lg"><i class="fa fa-tags"></i> 添加品牌文档 </a>
                                    <a href="/article/createjmf" class="btn btn-danger btn-group-lg"><i class="fa fa-tags"></i> 添加加盟费文档 </a>
                                </p>
                                <hr/>


                                <!-- start project list -->
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th style="width: 1%">id</th>
                                        <th style="width: 17%">文章标题</th>
                                        <th style="width: 15%">所属栏目</th>
                                        <th style="width: 10%">更新时间</th>
                                        <th style="width: 5%">点击</th>
                                        <th style="width: 5%">状态</th>

                                        <th style="width: 10%">发布时间</th>
                                        <th style="width: 8%">发布人</th>
                                        <th style="width: 18%">编辑</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($Article_data as $keys=>$article_data)
                                    <tr>
                                        <td>{{ $article_data->id }}</td>
                                        <td><s><a>{{ $article_data->title }}</a></s></td>
                                        <td><ul class="list-inline"><li> {{ $article_data->typename }}</li></ul></td>
                                        <td class="project_progress">{{ date('Y-m-d',$article_data->pubdate) }}</td>
                                        <td> {{ rand(2000,3000) }}</td>
                                        <td>@if($article_data->ismake)已审核@else<s class="red">未审核</s> @endif</td>
                                        <td>{{ date('Y-m-d',$article_data->senddate) }}</td>
                                        <td>{{ $article_data->dutyname }}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-eye"></i> 预览 </a>
                                            <a href="/article/edit/id?id={{ $article_data->id }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> 编辑 </a>
                                            <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-toggle="modal" data-target="#myModa1d{{$article_data->id}}"><i class="fa fa-trash-o"></i> 删除 </a>
                                            <!-- Modal -->
                                            <div class="modal fade" id="myModa1d{{$article_data->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabe1">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                            <h4 class="modal-title" id="myModalLabel">删除1</h4>
                                                        </div>
                                                        <div class="modal-body" id="modal-body{{$article_data->id}}">
                                                            是否要删除{{ $article_data->id }}-<s>{{ $article_data->title }}</s>这篇文章?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary" id="subtn{{ $article_data->id }}" onclick="ajaxdel('#subtn{{ $article_data->id }}','{{$article_data->id}}','#modal-body{{$article_data->id}}')">删除</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach



                                    </tbody>
                                    <!-- Large modal -->

                                </table>
                                {!! $Article_data->render() !!}

                                <!-- end project list -->

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
<!-- bootstrap-progressbar -->
<script src="../asset/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../asset/build/js/custom.min.js"></script>

<script>

    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
    function ajaxdel(nodes,id,nd){

        event.stopPropagation();
            $.ajax({
                type: 'POST',
                url: '/article/delete',//后台文件上传接口
                data:{"id":id},
                datatype: "html",
                success:function (response, stutas, xhr) {
                    //alert();
                    $(nd).text(response);
                    $(nodes).attr("disabled","disabled");
                    setTimeout(function(){
                        window.location.href = "/article/lists";
                    },3000);

                }
            });

    }

</script>
</body>
</html>