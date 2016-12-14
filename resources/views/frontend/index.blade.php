<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>零食加盟网</title>
<link href="/frontend/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/frontend/js/index.js"></script>
</head>

<body>
@include('frontend.layouts.nav')
	
	<div class="sub_nav">
		<dl>
			<dt class="icon1"><a href="#" target="_blank">零食加盟品牌大全</a></dt>
			@foreach($navs as $nav)
			<dd><a href="{{$navstopdir}}{{ $nav->typedir }}" target="_blank" title="{{ $nav->typename }}">{{ $nav->typename }}</a></dd>
			@endforeach
		</dl>
		<dl class="dl_wid1">
			<dt class="icon2"><a href="#" target="_blank" >干果店加盟品牌</a></dt>
			@foreach($brandaiticles as $brandaiticle)
			<dd><a href="{{ $chaohuodir }}{{$brandaiticle->id}}.shtml" target="_blank" title="{{$brandaiticle->title}}">{{$brandaiticle->shorttitle}}</a></dd>
			@endforeach
		</dl>
		<dl class="dl_wid1">
			<dt class="icon3"><a href="#" target="_blank">进口零食品牌加盟</a></dt>
			@foreach($jinkoulingshiarticle as $jinkoulingshiarticles)

			<dd><a href="{{$jinkoulingshidir}}{{ $jinkoulingshiarticles->id }}.shtml" target="_blank" title="{{ $jinkoulingshiarticles->title }}">{{ $jinkoulingshiarticles->shorttitle }}</a></dd>
			@endforeach
		</dl>

	</div>
    <!--导航 结束-->
</div>
<!--header 结束-->

<!--主体开始-->
<div class="main">
	<!--第一部分开始-->
	<div class="index_box1 clearfix">

		<div class="index_box1_l">
			<div class="search_db">
				<div class="hd">项目查找</div>
				<div class="bd">
					<link href="/frontend/css/jquery.selectlist.css" rel="stylesheet" type="text/css" />
					<script type="text/javascript" src="/frontend/js/jquery.selectlist.js"></script>
					<script type="text/javascript">
						$(function(){
							$(".select_bk").selectlist({
								zIndex:10,
								width:139,
								height:32,
								triangleSize:6,
								triangleColor:'#D6D6D6'
							});		
						})
					</script>
					<!--搜索开始-->
					<form onsubmit="return false">
							{{ csrf_field() }}
					<div class="select_mod">
						<div class="clearfix">
							<p>
								<span class="cont">
								  <select name="select1" id="select1" class="select_bk">
									<option selected="selected">行业分类</option>
									<option value="零食店加盟">零食店加盟</option>
									<option>炒货加盟</option>
									<option>干果加盟</option>
									<option>进口零食加盟</option>
								  </select>
								</span>
							</p>
							<p>
								<span class="cont">
								  <select name="select2" id="select2" class="select_bk">
									<option selected="selected">投资金额</option>
									<option>1~5万</option>
									<option>5~10万</option>
									<option>10~20万</option>
									<option>20万~50万</option>
									<option>50~100万</option>
								  </select>
								</span>
							</p>
							<p>
								<span class="cont"><input name="keywordValue" id="ppmc" class="input_bk" value="请输入文本" onfocus="if (value =='请输入文本'){value =''}" onblur="if (value ==''){value='请输入文本'}"></span>
							</p>
						</div>
						<p><input type="submit" width="126" height="35" id="sub_btn" class="btn" value="项目搜索"></p>
						<p class="more"><a href="#">快速进入&gt;&gt;</a></p>
					</div>
					</form>
					<div class="tit">投资金额：</div>
					<div class="price">
						<a title="1-5万元项目" href="/search/all_1_5_0.shtml">1-5万元</a>
						<a title="5－10万元项目" href="/search/all_5_10_0.shtml">5-10万元</a>
						<a title="10－20万元项目" href="/search/all_10_20_0.shtml">10-20万元</a>
						<a title="20－50万元项目" href="/search/all_20_50_0.shtml">20-50万元</a>
						<a title="50-100万元项目" href="/search/all_50_100_0.shtml">50-100万元</a>
						<a title="100万元以上项目" href="/search/all_100_200_0.shtml">100万以上</a>
					</div>
					<div class="tit">面积：</div>
					<div class="area">
						<a title="10平以下" href="/search/all_0_1_10.shtml">10平以下</a>
						<a title="10-30平米" href="/search/all_0_10_30.shtml">10-30平米</a>
						<a title="30-80平米" href="/search/all_0_30_50.shtml">30-50平米</a>
						<a title="80-150平米" href="/search/all_0_50_80.shtml">50-80平米</a>
						<a title="150平以上" href="/search/all_0_100_200.shtml">100平以上</a>
					</div>
				</div>
			</div>
		</div>

		

		<div class="index_box1_c">
            <!--焦点图 开始-->
            <div class="slideBox">
                <div class="hd">
                    <ul><li>1</li><li>2</li><li>3</li><li>4</li></ul>
                </div>
                <div class="bd">
                    <ul>
                        <li><a href="#" target="_blank"><img src="/frontend/images/temp/banner1.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="/frontend/images/temp/banner2.jpg" /></a></li>
                        <li><a href="#" target="_blank"><img src="/frontend/images/temp/banner3.jpg" /></a></li>
						<li><a href="#" target="_blank"><img src="/frontend/images/temp/banner4.jpg" /></a></li>
                    </ul>
                </div>
            </div>
            <!--焦点图 结束-->
			
			<!--加盟步骤 开始-->
			<div class="index_step">
				<ul>
					<li>
						<i class="icon1"></i>
						<p>找项目</p>
					</li>
					<li>
						<i class="icon2"></i>
						<p>留言咨询</p>
					</li>
					<li>
						<i class="icon3"></i>
						<p>等待回访</p>
					</li>
					<li>
						<i class="icon4"></i>
						<p>成功合作</p>
					</li>
				</ul>
			</div>
			<!--加盟步骤 结束-->
			
		</div>


		<div class="index_box1_r">
			<div class="count">
				<p>零食加盟网入驻品牌数<br>
				   <span>63864</span>
				</p>
				<ul>
					<li><a href="#" title="【钻石黄金】未来发展空间巨大" target="_blank">【钻石黄金】未来发展空间巨大</a></li>
					<li><a href="#" title="【璀璨未来】互联网+珠宝" target="_blank">【璀璨未来】互联网+珠宝</a></li>
					<li><a href="#" title="【加入V6】颠覆你的饰界观" target="_blank">【加入V6】颠覆你的饰界观</a></li>
					<li><a href="#" title="【品牌荟萃】化妆品店选梵美诗" target="_blank">【品牌荟萃】化妆品店选梵美诗</a></li>
					<li><a href="#" title="【私人订制】宝乐迪量贩式KTV" target="_blank">【私人订制】宝乐迪量贩式KTV</a></li>
				</ul>
				<div class="btn"><a href="#">马上找好项目</a></div>
			</div>
			<div class="tools">
				<div class="hd">创业必备工具</div>
				<div class="bd">
					<ul>
						<li><a href="#" target="_blank" title="成本计算"><img src="/frontend/images/icon_1.png">成本计算</a></li>
						<li><a href="#" target="_blank" title="贷款计算"><img src="/frontend/images/icon_2.png">贷款计算</a></li>
						<li><a href="#" target="_blank" title="投资预测"><img src="/frontend/images/icon_3.png">投资预测</a></li>
						<li><a href="#" target="_blank" title="创业红包"><img src="/frontend/images/icon_4.png">创业红包</a></li>
						<li><a href="#" target="_blank" title="先行赔付"><img src="/frontend/images/icon_5.png">先行赔付</a></li>
						<li><a href="#" target="_blank" title="一扫光金融"><img src="/frontend/images/icon_6.png">一扫光金融</a></li>
					</ul>
				</div>
			</div>
		</div>

	</div>
	<!--第一部分结束-->
	
	
	<!--第二部分 开始-->
	<div class="index_box2">
		<div class="hd">
			<span class="tit">创业好店</span>
			<span class="txt">@foreach($hotbrand as $index=>$hotbrands)<a href="{{$navstopdir}}{{ $hotbrands->typedir }}{{$hotbrands->id}}.shtml" target="_blank">{{ $hotbrands->title }}</a>@if($index<9) | @endif @endforeach</span>
		</div>
		<div class="bd">
			<ul>
				@foreach($apexbrand as $index=>$apexbrands)
				<li><a href="{{$navstopdir}}{{ $apexbrands->typedir }}{{$apexbrands->id}}.shtml" target="_blank"><img src="{{$apexbrands->litpic}}" title="{{$apexbrands->title}}" alt="{{$apexbrands->title}}"><span>{{$apexbrands->title}}</span></a></li>
				@endforeach
			</ul>
		</div>
		<div class="index_item_pic">
			<ul>
				@foreach($recommenbrand as $index=>$recommenbrands)
				<li>
					<a href="{{$navstopdir}}{{ $recommenbrands->typedir }}{{$recommenbrands->id}}.shtml" target="_blank" data="{{$recommenbrands->litpic}}"><img src="{{$recommenbrands->litpic}}" width="140" height="81" alt="{{$recommenbrands->title}}" title="{{$recommenbrands->title}}"/></a>
				</li>
				@endforeach
			</ul>
		</div>
	</div>
	<!--第二部分 结束-->
	
	
	<!--第三部分 开始-->
	<div class="index_box3 clearfix">
		<div class="index_box3_l">
			<div class="img_show"><a href="#" target="_blank"><img src="/frontend/images/index_pic1.jpg" alt="零食店加盟"/></a></div>
			<p class="tit"><a href="#" target="_blank">零食店加盟</a></p>
			<p class="desc">中西美食 烹炸涮烤</p>
			<p class="more"><a href="#" target="_blank">查看详情&gt;</a></p>
		</div>
		<div class="index_box3_r">
			<div class="hd">
				<span class="tit">零食品牌</span>
				<span class="desc">美式快餐 抢占商机</span>
				<span class="more"><a href="#" target="_blank">更多&gt;&gt;</a></span>
			</div>
			<div class="bd">
				<div class="bd_l">
					<dl>
						@foreach($scrollbrand as $scrollbrands)
						<dd><a href="{{$navstopdir}}{{ $scrollbrands->typedir }}{{$scrollbrands->id}}.shtml" title="{{$scrollbrands->title}}" target="_blank">{{$scrollbrands->shorttitle}}</a></dd>
						@endforeach
					</dl>
					<dl>
						@foreach($scrollbrand2 as $scrollbrand2s)
							<dd><a href="{{$navstopdir}}{{ $scrollbrand2s->typedir }}{{$scrollbrand2s->id}}.shtml" title="{{$scrollbrand2s->title}}" target="_blank">{{$scrollbrand2s->shorttitle}}</a></dd>
						@endforeach
                    </dl>
					<dl>
						@foreach($scrollbrand3 as $scrollbrand3s)
							<dd><a href="{{$navstopdir}}{{ $scrollbrand3s->typedir }}{{$scrollbrand3s->id}}.shtml" title="{{$scrollbrand3s->title}}" target="_blank">{{$scrollbrand3s->shorttitle}}</a></dd>
						@endforeach
                    </dl>
				</div>
				<div class="bd_r">
					<div class="index_txt_list_wrap">
						<div class="index_txt_list">

							@foreach($picllbrand as $indes=>$picllbrands)
								@if($indes==0)<dl>@endif

								@if($indes>1 && $indes%2 ==0)
										<dl>
								@endif

										<dd><a href="{{$navstopdir}}{{ $picllbrands->typedir }}{{$picllbrands->id}}.shtml" title="{{$picllbrands->title}}" target="_blank">{{$picllbrands->title}}</a></dd>

								@if($indes%2 !=0 || $indes+1==count($picllbrand))
									</dl>
								@endif

							@endforeach
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--第三部分 结束-->
	
	
	<!--第四部分 开始-->
	<div class="index_box3 clearfix">
		<div class="index_box3_l h420">
			<div class="img_show"><a href="#" target="_blank"><img src="/frontend/images/index_pic2.jpg" alt="炒货品牌"/></a></div>
			<p class="tit"><a href="#" target="_blank">炒货品牌</a></p>
			<p class="desc">中西美食 烹炸涮烤</p>
			<p class="more"><a href="#" target="_blank">查看详情&gt;</a></p>
		</div>
		<div class="index_box3_r">
			<div class="hd">
				<span class="tit">炒货品牌</span>
				<span class="desc">美式快餐 抢占商机</span>
				<span class="more"><a href="#" target="_blank">更多&gt;&gt;</a></span>
			</div>
			<div class="bd">
				<div class="bd_l">
					<dl>
						@foreach($scrollchaohuobrand as $scrollchaohuobrands)
							<dd><a href="{{ $scrollchaohuobrands->typedir }}{{$scrollchaohuobrands->id}}.shtml" title="{{$scrollchaohuobrands->title}}" target="_blank">{{$scrollchaohuobrands->shorttitle}}</a></dd>
						@endforeach
					</dl>
					<dl>
						@foreach($scrollchaohuobrand2 as $scrollchaohuobrand2s)
							<dd><a href="{{ $scrollchaohuobrand2s->typedir }}{{$scrollchaohuobrand2s->id}}.shtml" title="{{$scrollchaohuobrand2s->title}}" target="_blank">{{$scrollchaohuobrand2s->shorttitle}}</a></dd>
						@endforeach
					</dl>
					<dl>
						@foreach($scrollchaohuobrand3 as $scrollchaohuobrand3s)
							<dd><a href="{{ $scrollchaohuobrand3s->typedir }}{{$scrollchaohuobrand3s->id}}.shtml" title="{{$scrollchaohuobrand3s->title}}" target="_blank">{{$scrollchaohuobrand3s->shorttitle}}</a></dd>
						@endforeach
					</dl>
				</div>
				<div class="bd_r">
					<div class="index_brand_list">
						<ul>

							@foreach($picchaohuobrand as $picchaohuobrands)

								<li><a href="{{ $picchaohuobrands->typedir }}{{$picchaohuobrands->id}}.shtml" target="_blank"><img src="{{$picchaohuobrands->litpic}}" title="{{$picchaohuobrands->title}}" alt="{{$picchaohuobrands->shorttitle}}"><span>{{$picchaohuobrands->shorttitle}}</span></a></li>

							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--第四部分 结束-->
	
	<!--第五部分 开始-->
	<div class="index_box3 clearfix">
		<div class="index_box3_l h420">
			<div class="img_show"><a href="#" target="_blank"><img src="/frontend/images/index_pic3.jpg" alt="进口零食"/></a></div>
			<p class="tit"><a href="#" target="_blank">进口零食</a></p>
			<p class="desc">中西美食 烹炸涮烤</p>
			<p class="more"><a href="#" target="_blank">查看详情&gt;</a></p>
		</div>
		<div class="index_box3_r">
			<div class="hd">
				<span class="tit">进口零食</span>
				<span class="desc">美式快餐 抢占商机</span>
				<span class="more"><a href="#" target="_blank">更多&gt;&gt;</a></span>
			</div>
			<div class="bd">
				<div class="bd_l">
					<dl>
						@foreach($importbrand as $importbrands)
							<dd><a href="{{ $importbrands->typedir }}{{$importbrands->id}}.shtml" title="{{$importbrands->title}}" target="_blank">{{$importbrands->shorttitle}}</a></dd>
						@endforeach
					</dl>
					<dl>
						@foreach($importbrand2 as $importbrand2s)
							<dd><a href="{{ $importbrand2s->typedir }}{{$importbrand2s->id}}.shtml" title="{{$importbrand2s->title}}" target="_blank">{{$importbrand2s->shorttitle}}</a></dd>
						@endforeach
					</dl>
					<dl>
						@foreach($importbrand3 as $importbrand3s)
							<dd><a href="{{ $importbrand3s->typedir }}{{$importbrand3s->id}}.shtml" title="{{$importbrand3s->title}}" target="_blank">{{$importbrand3s->shorttitle}}</a></dd>
						@endforeach
					</dl>
				</div>
				<div class="bd_r">
					<div class="index_brand_list">
						<ul>
							@foreach($picimportbrand as $picimportbrands)

								<li><a href="{{ $picimportbrands->typedir }}{{$picimportbrands->id}}.shtml" target="_blank"><img src="{{$picimportbrands->litpic}}" title="{{$picimportbrands->title}}" alt="{{$picimportbrands->shorttitle}}"><span>{{$picimportbrands->shorttitle}}</span></a></li>

							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--第五部分 结束-->
	
	<!--广告 开始-->
	<div class="bn">
		<ul>
			<li><a href="#" target="_blank"><img src="/frontend/images/temp/bn1.jpg" /></a></li>
			<li><a href="#" target="_blank"><img src="/frontend/images/temp/bn2.jpg" /></a></li>
		</ul>
	</div>
	<!--广告 结束-->
	
	
	<!--第六部分 开始-->
	<div class="index_box4 clearfix">
            <div class="cont4_con fl">
                <h2>大家都在看</h2>
                <div class="con_fir">
                    <div class="fir_left">
						@foreach($seeallbrands as $seeallbrand)
                         <div class="li_div"><a href="{{$navstopdir}}{{$seeallbrand->typedir}}{{$seeallbrand->id}}.shtml" title="{{$seeallbrand->shorttitle}}" target="_blank"><img src="{{$seeallbrand->litpic}}"></a><span><a href="{{$seeallbrand->typedir}}{{$seeallbrand->id}}.shtml" target="_blank">{{$seeallbrand->shorttitle}}</a><br><font color="#9c9c9c">{{$seeallbrand->brandapply}}人</font><em><a href="#" target="_blank">咨询</a></em></span></div>
                         @endforeach
                    </div>
                    <div class="fir_right">
                        <ul>
							@foreach($seeallbrand2s as $seeallbrand2)
                            <li>
                                <div class="jg">￥{{$seeallbrand2->brandpay}}万</div>
                                <div class="wz"><a href="{{$seeallbrand2->typedir}}{{$seeallbrand2->id}}.shtml" title="{{$seeallbrand2->shorttitle}}" target="_blank">{{$seeallbrand2->shorttitle}}</a><br><span class="fl">行业：<font color="#666">{{$seeallbrand2->brandmap}}</font></span><span class="fr">{{$seeallbrand2->brandnum}}人咨询</span></div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cont4_con fr">
                <h2>生意百科</h2>
                <div class="con_sec">
                    <ul>
                        <li class="one bor">
                            <span><a href="#" title="加盟一家奶茶店大概需要多少钱呢?" target="_blank">加盟一家奶茶店大概需要多少钱呢?</a></span>
                            <p>想加盟一家奶茶店，加盟什么品牌好呢?大概需要多少费用呢?</p>
                        </li>
                        <li class="two bor">
                            <span><a href="#" title="开两元店怎么样?利润高吗?" target="_blank">开两元店怎么样?利润高吗?</a></span>
                            <p>我周边有很多厂子，想开一家两元店，主要的针对群体就是厂里的职工，不知道</p>
                        </li>
                        <li class="three bor">
                            <span><a href="#" title="在北京开一个美甲店需要投资多少钱?" target="_blank">在北京开一个美甲店需要投资多少钱?</a></span>
                            <p>美甲在当下非常流行，自己以前在美甲店实习过两年，有丰富的经验，想在北京</p>
                        </li>
                     </ul>
                     <textarea class="question" onclick="this.value = '';" name="question">#说出您创业疑问，10分钟将得到答案#</textarea>
                     <input type="button" class="wd_submit" value="提问">
                 </div>
            </div>
        </div>
		<!--第六部分 结束-->
		
		
		<!--第七部分 开始-->
		<div class="index_box5">
			<div class="cont5_left">
				<h2>创业大讲堂</h2>
				<div class="left_one">
					<div class="one_top">
						@foreach($recommennews as $recommennew)
						<div class="li_d"> <a href="{{$recommennew->typedir}}{{$recommennew->id}}.shtml" title="{{$recommennew->title}}" target="_blank"><img src="{{$recommennew->litpic}}" alt="{{$recommennew->title}}"></a>
							<div class="d_wz">
								<h3><a href="#" target="_blank" title="{{$recommennew->title}}">{{$recommennew->title}}</a></h3>
								<p>{{$recommennew->description}}</p>
							</div>
						</div>
						@endforeach
					</div>
					<div class="one_cen">
						<ul>
							@foreach($sexnews as $sexnew)
								<li><a href="{{$sexnew->typedir}}{{$sexnew->id}}.shtml" title="{{$sexnew->title}}" target="_blank">{{substr($sexnew->title,0,30)}} </a></li>
							@endforeach
						</ul>
					</div>
					<div class="one_bot">
						<dl>
							<dt>人群解读</dt>
							@foreach($tagnews as $tagnew)
							<dd><a href="{{$tagnew->typedir}}{{$tagnew->id}}.shtml" target="_blank" title="{{$tagnew->title}}"><font color="#D71318">[{{substr($tagnew->shorttitle,0,12)}}]</font>{{$tagnew->title}}</a></dd>
							@endforeach
						</dl>
					</div>
				</div>
				<div class="left_two">
					<h4>创业风向标</h4>
					<dl>
						@foreach($brandnews as $newindex=>$brandnew)
						<dd><span>{{date('Y-m-d',$brandnew->pubdate)}}</span><i class="@if($newindex+1 <4) ye @endif">{{$newindex+1}}.</i><a href="{{$brandnew->typedir}}{{$brandnew->id}}.shtml" target="_blank" title="{{$brandnew->title}}">{{$brandnew->title}}</a></dd>
						@endforeach
					</dl>
				</div>
				<div class="left_two">
					<h4>地区潮流</h4>
					<dl>
						<dt><a href="#" title="女子当众声称小三跳河3次均被救起" target="_blank"><img src="http://images.qudao.com/article/2016-09-06/57ce86e9d81f2.jpg"></a><span>未来路办事处巡防队员司春园等人巡逻到商城东路与【<a href="#" style="color:#D71318;" target="_blank">阅读</a>】</span></dt>
						<dd><span>10/11</span><a href="#" target="_blank" title="三环路全线公交专用道正式启用早高峰行驶比往日省时近一半"><font color="#D71318">[北京]</font>三环路全线公交专用道</a></dd>
						<dd><span>10/11</span><a href="#" target="_blank" title="上海金山工业区将打通线上线下志愿服务"><font color="#D71318">[上海]</font>上海金山工业区将打通</a></dd>
						<dd><span>10/11</span><a href="#" target="_blank" title="天津住房公积金可通过互联网办理相关个人业务"><font color="#D71318">[天津]</font>天津住房公积金可通过</a></dd>
						<dd><span>10/11</span><a href="#" target="_blank" title="重阳佳节  广州全市25万余人登高"><font color="#D71318">[广东]</font>重阳佳节  广州全市</a></dd>
						<dd><span>10/11</span><a href="#" target="_blank" title="安徽等8省严厉打击“重金求子”电信网络诈骗犯罪"><font color="#D71318">[安徽]</font>安徽等8省严厉打击“</a></dd>
						<dd><span>10/10</span><a href="#" target="_blank" title="山东农商互联大会在潍坊召开"><font color="#D71318">[山东]</font>山东农商互联大会在潍</a></dd>
						<dd><span>10/11</span><a href="#" target="_blank" title="河南将全面实施统一的城乡居民医保制度"><font color="#D71318">[河南]</font>河南将全面实施统一的</a></dd>
					</dl>
				</div>
			</div>
			<div class="cont5_right">
				<h2>零食展会信息</h2>
				<div class="right_con">
					<dl>
						<dt><a href="#" title="10个关键词总结2016上半年食品饮料行业" target="_blank"><img src="http://images.qudao.com/temp/2016-08-19/57b69a1b3be94.jpg" alt="10个关键词总结2016上半年食品饮料行业"></a></dt>
						<dd><a href="#" title="化妆品行业现状分析及发展趋势预测" target="_blank"><span>[最新]</span>化妆品行业现状分析及发展趋势预</a></dd>
						<dd><a href="#" title="我国银饰行业发展前景分析" target="_blank"><span>[最新]</span>我国银饰行业发展前景分析</a></dd>
						<dd><a href="#" title="我国快递行业发展现状分析" target="_blank"><span>[最新]</span>我国快递行业发展现状分析</a></dd>
						<dd><a href="#" title="2016年1-8月国内汽车销售情况分析" target="_blank"><span>[最新]</span>2016年1-8月国内汽车销售</a></dd>
						<dd><a href="#" title="2016年礼品行业趋势分析" target="_blank"><span>[最新]</span>2016年礼品行业趋势分析</a></dd>
						<dd><a href="#" title="零售行业市场销售形势分析" target="_blank"><span>[最新]</span>零售行业市场销售形势分析</a></dd>
						<dd><a href="#" title="分析：白酒泛品牌化成行业发展新出路" target="_blank"><span>[最新]</span>分析：白酒泛品牌化成行业发展新</a></dd>
						<dd><a href="#" title="家纺行业出口数据分析浅谈" target="_blank"><span>[最新]</span>家纺行业出口数据分析浅谈</a></dd>
					</dl>
				</div>
			</div>
		</div>
		<!--第七部分 结束-->
		
		
		<!--广告 开始-->
		<div class="bn">
			<ul>
				<li><a href="#" target="_blank"><img src="/frontend/images/temp/bn3.jpg" /></a></li>
				<li><a href="#" target="_blank"><img src="/frontend/images/temp/bn4.jpg" /></a></li>
			</ul>
		</div>
		<!--广告 结束-->
	
		<!--友情链接 开始-->
		<div class="friend_links">
			<span>友情链接：</span>
			@foreach($flinks as $flink)
			<a href="{{$flink->url}}" target="_blank">{{$flink->webname}}</a>
			@endforeach
		</div>
		<!--友情链接 结束-->
	
</div>
<!--主体结束-->

@include('frontend.layouts.footer')


</body>
</html>
