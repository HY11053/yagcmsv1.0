<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>问答</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="/frontend/css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/frontend/css/news.css"/>
	<link rel="stylesheet" type="text/css" href="/frontend/css/ask.css"/>
	<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/frontend/js/index.js"></script>
</head>

<body>
@include('frontend.layouts.nav')
</div>
<!--header 结束-->

<div class="bn1190"><a href="#" target="_blank"><img src="/frontend/images/temp/bn5.jpg" alt=""/></a></div>
<div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零食行业开店问答</a></div>

<!--主体开始-->
<div class="main clearfix">
	<div class="center_list clearfix"> 
		<!--左边内容开始-->
		<div class="news_center">

			<div class="ww_330">
				<div class="col-sm-12 col-md-9 aw-main-content">
						<div class="aw-mod aw-explore-list">
						<div class="mod-body">
							<div class="aw-common-list">
								<div class="col-sm-12 col-md-9 aw-main-content aw-article-content">
									<div class="aw-mod aw-topic-bar" id="question_topic_editor" data-type="article" data-id="336">

									</div>
									<div class="aw-mod aw-question-detail">
										<div class="mod-head">
											<h1>{{$thisAskInfos->title}}</h1>
										</div>
										<div class="mod-body">
											{!!$thisAskInfos->description!!}
											<div class="meta clearfix">
												<div class="aw-article-vote pull-left disabled">
													<a href="javascript:;" class="agree" onclick=""><i class="icon icon-agree"></i> <b>0</b></a>
												</div>
												<span class="pull-right  more-operate"><em class="text-color-999">{{$thisAskInfos->time}}</em></span>
											</div>
										</div>
									</div>

									<!-- 文章评论 -->
									<div class="aw-mod">
										<div class="mod-head common-head">
											<h2>0 个评论</h2>
										</div>



									</div>
									<!-- end 文章评论 -->

									<!-- 回复编辑器 -->
									<div class="aw-mod aw-article-replay-box">
										<a name="answer_form"></a>
										<p align="center">要回复文章请先<a href="http://wenda.golaravel.com/login/">登录</a>或<a href="http://wenda.golaravel.com/account/register/">注册</a></p>
									</div>
									<!-- end 回复编辑器 -->
								</div>
							</div>
						</div>

					</div>
				</div>
				{{--@foreach($articles as $article)
				<dl>
					<dt><a href="#" target="_blank"><img src="{{$article->litpic}}"  alt="{{$article->title}}"/></a></dt>
					<dd class="tit"> <a class="cate" href="#">餐饮美食</a> <a href="{{$article->retypedir}}{{$article->typedir}}{{$article->id}}.shtml" target="_blank" title="{{$article->title}}">{{$article->title}}</a> </dd>
					<dd class="teg"> <a href="#" target="_blank">{{substr($article->tag,0,12)}}</a> <a href="#" target="_blank">吉祥混沌</a> </dd>
					<dd class="desc">夏去秋来，告别酷热，迎来清凉，出行的人们渐渐多了起来。秋高气爽，吃货们的吃心也随着秋风渐渐复苏，一个又一个的身影出现在街头，寻觅着美味的存在。店面里的美味固然受人喜欢，但是消耗…… </dd>
					<dd class="date">发布于：<span>{{date('Y-m-d H:i:s',$article->pubdate)}}</span> <a href="{{$article->typedir}}{{$article->id}}.shtml" title="{{$article->title}}">阅读全文&gt;&gt;</a></dd>
				</dl>
				@endforeach--}}

			</div>
			
			<!--分页 开始-->
			
			<div class="page">
				<ul class="pagination">
					{{--{!! $articles->links() !!}--}}

				</ul>
			</div>
			
			<!--分页 结束--> 
		</div>
		
		<!--左边内容结束--> 
		
		<!--右边开始-->
		
		<div class="new_right"> 
			<!--搜索开始-->
			<div class="new_bt">
				<div class="search_bc">
					<form  method="get">
						<input type="text"  class="new_input"  name="search">
						<input type="submit" class="new_btn" value="搜索">
					</form>
				</div>
				<!--搜索结束--> 
			</div>
			<div class="new_bt">
				<h3> <i></i> 本周热门 </h3>
				<div class="new_hotes">
					<ul>
						{{--@foreach($hotbrands as $hotbrand)
                    <li > <a href="{{$article->retypedir}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml" target="_blank" title="{{$hotbrand->title}}"><img src="{{$hotbrand->litpic}}" alt="{{$hotbrand->title}}" ></a>
                            <p><a  href="{{$article->retypedir}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml" title="{{$hotbrand->title}}">{{substr($hotbrand->title,0,42)}}</a></p>
                            <p>{{substr($hotbrand->description,0,60)}}</p>
                        </li>
						@endforeach--}}
					</ul>
				</div>
			</div>
			
			<!--快速查询入口-->
			<div class="new_bt">
				<h3><i></i>快速查询入口</h3>
				<div class="kuishurk">
					<a href="#">智能电视</a>
					<a href="#">电视盒子</a>
					<a href="#">开箱晒物</a>
					<a href="#">智能电视</a>
					<a href="#">VR</a>
					<a href="#">智能电视</a>
					<a href="#">电视盒子</a>
					<a href="#">开箱晒物</a>
					<a href="#">智能电视</a>
					<a href="#">电视盒子</a>
					<a href="#">开箱晒物</a>
					<a href="#">智能电视</a>
					<a href="#">VR</a>
					<a href="#">智能电视</a>
					<a href="#">电视盒子</a>
					<a href="#">开箱晒物</a>
				</div>
			</div>
			
		</div>
		<!--右边结束--> 
		
	</div>
</div>
<!--主体结束-->

@include('frontend.layouts.footer')

</body>
</html>
