<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{{$data_archive->title}}</title>
<link href="/frontend/css/style.css" rel="stylesheet" type="text/css" />
<link href="/frontend/css/news.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
<script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/frontend/js/index.js"></script>
</head>
<body>
@include('frontend.layouts.nav')
</div>
<!--header 结束-->

<div class="bn1190"><a href="#" target="_blank"><img src="/frontend/images/temp/bn5.jpg" alt=""/></a></div>
<div class="path">当前位置：<a href="#">首页</a> &gt; <a href="#">零售行业资讯</a></div>
<!--主体开始-->
<div class="main clearfix">
  <div class="center_list clearfix">
  <!--左边内容开始-->
    <div class="news_center"> 
      <!--标题-->
      <div class="ny_message">
        <h1>{{$data_archive->title}}</h1>
        <div class="ny_message-js"> 时间：{{date('Y-m-d H:i:s',$data_archive->pubdate)}} <span>来源：零食品牌加盟网</span> <span>编辑：小虎</span> </div>
      </div>
      <!--摘要-->
      <div class="new_abstract">
        <p><span>[摘要]</span>街头、菜场、超市都是贩卖鸡蛋的地点之一，很多人吃鸡蛋还要选择草鸡蛋，也就是散养鸡生的蛋。草鸡蛋营养价值高，无污染所以很多人都喜欢，如何在混乱的市场辨别草鸡蛋呢，下面一起学习一下下吧。</p>
      </div>
      <!--新闻内容-->
      <div class="body_tit clearfix">
        {!! $data_article->body !!}
      </div>
      <!--分享-->
    <div class="fenxiang">
			<div class="fenxiangdao">分享到：</div>
			<div class="bdsharebuttonbox" data-tag="share_1">
				<a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
				<a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
				<a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
			</div>
			<div class="nr_biaoqian"><b>标签：</b><a href="#">上班族创业</a><a href="#">创业指导</a></div>
		</div>	
		<script>
window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
</script>
      
      <!--上一篇-->
      <div class="shangxiapian">
        <p>上一篇：<a href="#" title="小吃车代理 一品飘香小吃车满载商机跑不掉">小吃车代理 一品飘香小吃车满载商机跑不掉</a> </p>
        <p >下一篇：<a href="#" title="财气创业顺势而行 库克努比童装安心经营后顾无忧">财气创业顺势而行 库克努比童装安心经营后顾无忧</a> </p>
      </div>
      <!--相关资讯-->
      <div class="xg_news">
        <div class="title"><strong>良品铺子资讯</strong></div>
        <div class="xw">
          <ul class="clearfix">
            <li><em>2016-06-12</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">家庭主妇选择一扫光零食店加盟收获事业 </a></li>
            <li><em>2015-09-24</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">全职妈妈选择一扫光休闲食品加盟 重拾</a></li>
            <li><em>2015-08-31</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">创业选择一扫光休闲食品加盟怎么样</a></li>
            <li><em>2015-08-18</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">一扫光休闲食品加盟，您的创业首选</a></li>
            <li><em>2015-06-23</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">选择一扫光零食店加盟，助你实现梦想</a></li>
            <li><em>2016-06-12</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">家庭主妇选择一扫光零食店加盟收获事业 </a></li>
            <li><em>2015-09-24</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">全职妈妈选择一扫光休闲食品加盟 重拾</a></li>
            <li><em>2015-08-31</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">创业选择一扫光休闲食品加盟怎么样</a></li>
            <li><em>2015-08-18</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">一扫光休闲食品加盟，您的创业首选</a></li>
            <li><em>2015-06-23</em><a href="#" title="家庭主妇选择一扫光零食店加盟收获事业">选择一扫光零食店加盟，助你实现梦想</a></li>
          </ul>
        </div>
      </div>
    </div>
  <!--左边内容结束-->
    
    <!--右边开始-->
    <div class="new_right"> 
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
      
      <!--新闻-->
      <div class="new_bt">
        <h3> <i></i> 品牌新闻 </h3>
        <div class="bts">
            @foreach($htarticles as $htarticle)
          <div class="ny-gz_ul"> <a href="#"> <img src="{{$htarticle->litpic}}" width="90" height="68" alt=""/></a>
            <p><a href="{{$htarticle->typedir}}{{$htarticle->id}}.shtml" target="_blank" title="{{$htarticle->title}}">{{$htarticle->title}}</a></p>
            <p>好项目总有人发现，皮具护理被人们发现后，一直延续到现在</p>
          </div>
            @endforeach
          <div class="common">
            <ul>
                @foreach($tjarticles as $tjarticle)
                    <li><a href="{{$tjarticle->typedir}}{{$tjarticle->id}}.shtml" target="_blank" title="{{$tjarticle->title}}">{{$tjarticle->title}}</a></li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
      
      <!--快速查询入口-->
      <div class="new_bt">
        <h3> <i></i> 快速查询入口 </h3>
        <div class="kuishurk">
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">电视盒子</a>
			<a href="#" target="_blank">开箱晒物</a>
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">VR</a>
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">电视盒子</a>
			<a href="#" target="_blank">开箱晒物</a>
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">电视盒子</a>
			<a href="#" target="_blank">开箱晒物</a>
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">VR</a>
			<a href="#" target="_blank">智能电视</a>
			<a href="#" target="_blank">电视盒子</a>
			<a href="#" target="_blank">开箱晒物</a>
        </div>
      </div>
    </div>
    <!--右边结束-->
    
    <!--主体结束--> 
    
  </div>
  </div>
@include('frontend.layouts.footer')


</body>
</html>
