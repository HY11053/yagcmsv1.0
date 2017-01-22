<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
	<title>{{$data_archive->title}}</title>
	<link href="/frontend/css/style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="/frontend/css/news.css"/>
	<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
	<script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
	<script type="text/javascript" src="/frontend/js/index.js"></script>
</head>
<body>
@include('frontend.layouts.nav')
</div>
<!--header 结束-->


<div class="bn1190"><a href="#" target="_blank"><img src="images/temp/bn5.jpg" alt=""/></a></div>
<div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>
<!--主体开始-->
<div class="main clearfix">
	<!--头部开始-->
	<div class="brand_top">
		<div class="brand_left">
			<div class="brand_img"> <a href="#"><img src="{{$data_archive->litpic}}" width="157" height="114" alt=""/></a> </div>
			<div class="brand_jianjie">
				<div class="tit">{{$data_article->brandname}}加盟费 <span class="pice">￥16.66万元以上</span></div>
				<div class="detail">
					<ul>
						<li>设备费：<span>{{$data_article->brandtime}}</span></li>
						<li>首批进货费：<span>{{$data_article->brandorigin}}</span> </li>
						<li> 广告宣传费：<span>{{$data_article->brandnum}}</span></li>
						<li>水电杂费：<span>{{$data_article->brandpay}}</span> </li>
						<li> 流动资金：<span>{{$data_article->brabdaea}} </span></li>
						<li>总投资费：<span>16.66万元以上</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="brand_right">
			<p>联系电话:
				<sapn>0512-6820****</sapn>
			</p>
			<p class="btn_ly"><a href="#">立即留言咨询</a></p>
			<p class="tit_yx"><span>意向加盟：<strong>913人</strong> </span> <span> 申请加盟：<strong>716人</strong></span></p>
		</div>
	</div>
	<!--头部结束-->

	<div class="center_list clearfix">
		<!--左边内容开始-->
		<div class="news_center">
			<div class="join_cont">
				{!! $data_article->body !!}
						<!--用户留言 开始-->
				<div class="gbook">
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
		<!--左边内容结束-->

		<!--右边内容开始-->
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

			<!--品牌信息 开始-->
			<div class="new_bt">
				<h3> <i></i> 品牌：<strong>小胖子快餐</strong> </h3>
				<div class="bts">
					<div class="pingpai_img"><a href="#" target="_blank"><img src="images/temp/jim_money-logo.png"  alt=""/></a></div>
					<div class=" pingpai">
						<p>公司名称：<span>苏州市苏太太食品有限公司</span></p>
						<p>公司地址：<span>苏州市相城区望亭镇项路巨庄</span></p>
						<p>招商地区：<span>全国</span></p>
						<p>经营模式：<span>加盟</span></p>
						<p class="btn_jm"><a href="#" target="_blank">我要加盟</a></p>
					</div>
				</div>
			</div>
			<!--品牌信息 结束-->

			<!--品牌新闻 开始-->
			<div class="new_bt">
				<h3><i></i>品牌新闻</h3>
				<div class="bts com_news">
					<div class="common">
						<ul>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">想要开好零食店必须知道的事</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">长假期间零食加盟店要注意哪些事</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">秋季散装休闲零食如何储存</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">开休闲食品加盟店日常小道具</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">零食加盟店选址注意事项</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">零食加盟店选址注意事项</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">想要开好零食店必须知道的事</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">长假期间零食加盟店要注意哪些事</a></li>
							<li><a href="#" target="_blank" title="想要开好零食店必须知道的事">秋季散装休闲零食如何储存</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!--品牌新闻 结束-->

		</div>

		<!--右边内容结束-->

	</div>
</div>
<!--主体结束-->

<!--footer开始-->
<div class="footer">
	<div class="footer_nav"><a href="#">关于我们</a>　|　<a href="#">企业服务</a>　|　<a href="#">人才招聘</a>　|　<a href="#">联系我们</a>　|　<a href="#">合作客户</a>　|　<a href="#">法律声明</a>　|　<a href="#">友情链接</a>　|　<a href="#">服务导航</a>　|　<a href="#">网站地图</a>　|　<a href="#">小行业地图</a>　|　<a href="#">加盟导航 sitemap</a></div>
	<div class="copyright">
		<p>零食加盟网友情提示：多打电话、多咨询、实地考察，可降低投资风险！</p>
		<p>Copyright © 2015 www.lingshijm.com Corporation, All Rights Reserved 上海佐赛网络科技有限公司 版权所有</p>
		<p>沪ICP备14037163号-32</p>
	</div>
	<div class="cert"><img src="images/cert.jpg" alt="信用保障"/></div>
	<div class="wx"><img src="images/logo_wx.jpg" alt="微信"/></div>
</div>
<!--footer结束-->

</body>
</html>
