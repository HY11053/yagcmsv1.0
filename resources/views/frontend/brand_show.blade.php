<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
	<title>{{$data_archive->title}}</title>
	<meta name="keywords" content="{{$data_archive->keywords}}" />
	<meta name="description" content="{{$data_archive->description}}" />
	<link href="/frontend/css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/frontend/css/news.css"/>
	<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/frontend/js/index.js"></script>
</head>

<body>
<!--header 开始-->
@include('frontend.layouts.nav')
</div>
<!--header 结束-->

<div class="bn1190"><a href="#" target="_blank"><img src="/frontend/images/temp/bn5.jpg" alt=""/></a></div>
<div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>

<!--主体开始-->
<div class="main clearfix"> 
	<!--头部开始-->
	<div  class="layout2"> 
		<!--幻灯片开始-->
		<div class="brand_slide">
			<ul class="bigImg">
				@foreach($data_articlelitpics as $articlelitpic)

				<li><a target="_blank" href="#"><img src="{{$articlelitpic}}" alt="{{$data_archive->shorttitle}}"/></a></li>
				@endforeach

			</ul>
			<div class="smallScroll"><a class="sPrev" href="javascript:void(0)"></a>
				<div class="smallImg">
					<ul>
						@foreach($data_articlelitpics as $articlelitpic)
						<li><img src="{{$articlelitpic}}" alt="{{$data_archive->shorttitle}}"/></li>
						@endforeach

					</ul>
				</div>
				<a class="sNext" href="javascript:void(0)"></a> </div>
		</div>
		<!--幻灯片结束-->
		
		<div class="info">
			<div class="tit">{{$data_archive->shorttitle}}</div>
			<div class="detail">
				<ul>
					<li>投资金额：<span class="price">{{$data_article->brandpay}}</span></li>
					<li>所属行业：<span class="crumbs">{{$data_article->brandmap}}</span></li>
				</ul>
			</div>
			<div class="tit_pice">
				<ul>
					<li>成立时间：<span class="price">{{$data_article->brandtime}}</span></li>
					<li>门店总数：<span class="price">{{$data_article->brandnum}}家</span></li>
					<li>加盟区域：<span class="price">{{$data_article->brabdaea}}</span></li>
					<li>适合人群：<span class="price">{{$data_article->brandperson}}</span></li>
					<li>经营范围：<span class="price">{{$data_article->brandmap}}</span></li>
					<li>店铺面积：<span class="price">{{$data_article->brandchat}} ㎡</span></li>
				</ul>
			</div>
			<div class="jiem">
				<ul>
					<li>意向加盟 <span class="price">187</span></li>
					<li style="border:none; margin-left:35px">申请加盟：<span class="price">289</span></li>
				</ul>
			</div>
			<div class="tel">联系电话：<span>4008-813-178</span></div>
			<div class="btn_area"> <a id="chatNowButton" href="#msg" class="zixun_btn">立即咨询</a> <a href="#msg" class="suoyao_btn">索要资料</a> </div>
		</div>
		<div class="layout2_right fl">
			<div class="comp_box">
				<div class="comp_info"> <b>公司信息</b>
					<div class="comp_logo"> <img src="{{$data_archive->litpic}}" alt="{{$data_article->brandname}}"/></div>
					<div class="comp_info_con">
						<h3 title="{{$data_article->brandgroup}}">{{$data_article->brandgroup}}</h3>
						<ul>
							<li><span>企业性质</span><em>国有企业</em></li>
							<li><span>注册资金</span><em>100 万元</em></li>
							<li><span>所在地</span><em>重庆市南岸区</em></li>
						</ul>
					</div>
				</div>
			</div>
			<!--公司信息开始-->
			<div class="comp_fenx">
				<div class="renZ_info">
					<ul >
						<li class="mr15"><span class="beian1"> </span><em>备案企业</em></li>
						<li class="mr15"><span class="renzheng1"></span><em>企业认证</em></li>
						<li><span class="baozhang1"></span><em>投资保障</em></li>
					</ul>
				</div>
				<div class="fx">
					<div class="fxd">分享到：</div>
					<div class="bdsharebuttonbox" data-tag="share_1">
						<a href="#" class="bds_qzone1" data-cmd="tsina" title="分享到QQ空间"></a>
						<a href="#" class="bds_tsina1" data-cmd="qzone" title="分享到新浪微博"></a>
						<a href="#" class="bds_weixin1" data-cmd="weixin" title="分享到微信"></a>
					</div>
					<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
				</div>
			</div>
			<!--公司信息开始--> 
		</div>
	</div>
	<div class="center_list clearfix"> 
		<!--左边详情开始-->
		<div class="news_box">
			<div class="w870"> 
				<!--快速导航 开始-->
				<div class="fixed_nav">
					<div class="cont_tab">
						<ul>
							<li class="js_join_1 cur"><a href="javascript:void(0)">加盟详情</a></li>
							<li class="js_join_2"><a href="javascript:void(0)">加盟优势</a></li>
							<li class="js_join_3"><a href="javascript:void(0)">加盟流程</a></li>
							<li class="js_join_4"><a href="javascript:void(0)">品牌动态</a></li>
							<li class="js_join_5"><a href="javascript:void(0)">加盟问答</a></li>
						</ul>
					</div>
				</div>
				<!--快速导航 结束--> 
			</div>
			<div class="news_center">

				<div class="join_cont">
					{!!$data_article->body!!}

					<div class="cy_img"><img src="/frontend/images/cye_03.jpg" alt="加盟步骤"/> </div>
					
					<!--用户留言 开始-->
					<div class="gbook" id="msg">
						<div class="hd">
							<span class="tit">我要咨询</span>
							<em>(24小时内获得企业的快速回复)</em>
							<span class="tips">(<i>*</i>为必填选项)</span>
						</div>
						<div class="bd">
							<ul>
								<li><span class="txt"><i>*</i>姓名</span><input type="text" name="guestname" id="guestname" value="" class="input_bk" placeholder="您的真实姓名"><span class="sex"><label><input type="radio" value="male" name="Sex" class="ly_radio"><em>先生</em></label><label><input type="radio" name="Sex" value="female" class="ly_radio"><em>女士</em></label></span></li>
								<li><span class="txt"><i>*</i>手机</span><input type="text" class="input_bk" name="iphone" placeholder="电话是与您联系的重要方式"></li>
								<li><span class="txt">地址</span><input type="text" class="input_bk" name="adr" placeholder="与您联系的重要方式"></li>
								<li>
									<span class="txt"><i>*</i>留言</span><textarea id="content" name="content" class="textarea_bk" placeholder="请输入您的留言内容或选择快捷留言"></textarea>
									<div class="check_msg">
										<div class="check_msg_tit">请填写留言或根据意向选择下列快捷留言</div>
										<div class="check_msg_bd">
											<ul>
											   <li><a href="javascript:;" class="no" target="_self">我加盟后，您们还会提供哪些服务？</a></li>
											   <li><a href="javascript:;" class="no" target="_self">有兴趣开一个店，请寄资料或给我打电话。</a></li>
											   <li><a href="javascript:;" class="no" target="_self">请问我这个地方有加盟商了吗？</a></li>
											   <li><a href="javascript:;" class="no" target="_self">请将详细投资方案和资料寄给本人。</a></li>
											   <li><a href="javascript:;" class="no" target="_self">初步打算加盟贵公司，请寄资料。</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li>
									<span class="txt">&nbsp;</span><input type="submit" value="提交留言" class="btn">
								</li>
							</ul>
						</div>
					</div>
					<!--用户留言 结束-->
					
				</div>
			</div>
		</div>
		<!--左边详情结束--> 
		
		<!--右边开始-->
		<div class="new_right"> 
			<!--加盟费计算器 开始-->
			<div class="jmf_calculator">
				<div class="common_bt">
					<div class="tit">加盟费计算器</div>
				</div>
				<form>
				<div class="bd">
					<ul>
						<li><span class="txt">品牌加盟费：</span><input type="text" class="input_bk"  value="10000" id="num1"><em>元</em></li>
						<li><span class="txt">品牌管理费：</span><input type="text" class="input_bk" value="10000" id="num2"><em>元</em><i>（按年计算）</i></li>
						<li><span class="txt">首批进货款：</span><input type="text" class="input_bk" value="10000" id="num3"><em>元</em></li>
						<li><span class="txt">店面租金：</span><input type="text" class="input_bk" value="10000" id="num4"><em>元</em><i>（按月计算）</i></li>
						<li><span class="txt">店面装修：</span><input type="text" class="input_bk" value="5000" id="num5"><em>元</em></li>
						<li><span class="txt">店面装修：</span><input type="text" class="input_bk" value="1200" id="num6"><em>元</em></li>
						<li><span class="txt">固定资产：</span><input type="text" class="input_bk" value="5000" id="num7"><em>元</em></li>
						<li><span class="txt">员工数量：</span><input type="text" class="input_bk" value="2" id="num8"><em>人</em><i>（按月计算）</i></li>
						<li><span class="txt">平均工资：</span><input type="text" class="input_bk" value="3000" id="num9"><em>元</em></li>
						<li><span class="txt">开业费用：</span><input type="text" class="input_bk" value="10000" id="num10"><em>元</em></li>
						<li><span class="txt">运营费用：</span><input type="text" class="input_bk" value="10000" id="num11"><em>元</em></li>
						<li><p class="price">总共：<span class="total" id="total_num"></span>元</p></li>
						<li><p class="btn"><input class="total_btn" value="计算"><input class="reset_btn" type="reset" value="重置"></p></li>
					</ul>
				</div>
				</form>
			</div>
			<!--加盟费计算器 结束-->
			
			<!--排行榜-->
			<div class="new_bt">
				<h3> <i></i> 零售店加盟排行榜 </h3>
				<div class="rank_bd">
					<ul>
						@foreach($hotbrands as $keys=>$hotbrand)
							@if($keys+1==1)
						<li class="top"> <a href="{{substr($retypedir,0,-1)}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml" target="_blank" title="{{$hotbrand->title}}"><i class="num">{{$keys+1}} </i> <img src="{{$hotbrand->litpic}}" alt="{{$hotbrand->title}}" ></a>
							<div class="cont">
								<p><a href="{{substr($retypedir,0,-1)}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml" target="_blank">{{$hotbrand->shorttitle}}</a></p>
								<p><span>投资金额：</span><i>20~50万</i></p>
								<p class="btn"><a href="{{substr($retypedir,0,-1)}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml">查看详情</a></p>
							</div>
						</li>
							@else

						<li @if($keys+1 <4)class="top"@endif> <i class="num">{{$keys+1}}</i> <span class="name"><a href="{{substr($retypedir,0,-1)}}{{$hotbrand->typedir}}{{$hotbrand->id}}.shtml" target="_blank" title="{{$hotbrand->title}}">{{$hotbrand->shorttitle}}</a></span> <span class="price">3-5万</span> </li>
						@endif
								@endforeach
					</ul>
				</div>
			</div>
			<!--排行榜--> 
			
			<!--最新加盟项目开始-->
			<div class="new_bt">
				<h3> <i></i> 最新休闲食品加盟项目 </h3>
				<div class="bt_xiangmu">
					<ul>
						@foreach($newbrands as $newbrand)
						<li> <a href="{{substr($retypedir,0,-1)}}{{$newbrand->typedir}}{{$newbrand->id}}.shtml">{{$newbrand->shorttitle}}</a> </li>
						@endforeach
					</ul>
				</div>
			</div>
			
			<!--最新加盟项目结束--> 
			
			<!--大家还在搜-->
			<div class="new_bt">
				<h3> <i></i> 大家还在搜 </h3>
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
			<!--新闻-->
			<div class="new_bt">
				<h3> <i></i> 相关新闻 </h3>
				<div class="bts com_news">
					<div class="common">
						<ul>
							@foreach($tjarticles as $tjarticle)
							<li><a href="{{substr($retypedir,0,-1)}}{{$tjarticle->typedir}}{{$tjarticle->id}}.shtml" target="_blank" title="{{$tjarticle->title}}">{{$tjarticle->title}}</a></li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!--右边结束--> 
		
		<!--快速导航 结束--> 
		
	</div>
</div>
<!--主体结束-->

@include('frontend.layouts.footer')
</body>
</html>
