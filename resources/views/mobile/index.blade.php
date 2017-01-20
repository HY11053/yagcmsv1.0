<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <link rel="stylesheet" type="text/css" href="/mobile-file/css/css.css">
    <script type="text/javascript" src="/mobile-file/js/jquery.min.js"></script>
    <script type="text/javascript" src="/mobile-file/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/mobile-file/js/index.js"></script>
    <title>零食加盟网</title>
</head>

<body>
<div class="viewport">
@include('mobile.layout.nav')
    <!--分类结束-->

    <!--最新品牌 开始-->
    <div class="index_item">
        <div class="common_tit">
            <a class="tit" href="#">零食品牌加盟店</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($recommenbrand as $recommenbrands)
                <li>
                    <a href="{{$navstopdir}}{{$recommenbrands->typedir}}{{$recommenbrands->id}}.shtml">
                        <div class="img_show"><img src="{{$recommenbrands->litpic}}"/></div>
                        <div class="cont">
                            <p class="tit">{{$recommenbrands->shorttitle}}</p>
                            <p class="desc">{{$recommenbrands->description}}</p>
                            <p class="price">投资金额：<em>￥{{$recommenbrands->brandpay}}</em></p>
                        </div>
                    </a>
                </li>
              @endforeach
            </ul>
        </div>
        <div class="list">
            <ul>
                @foreach($apexbrand as $indes=>$apexbrands)
                <li>
                    <a href="{{$navstopdir}}{{$apexbrands->typedir}}{{$apexbrands->id}}.shtml">
                        <i>{{$indes+1}}</i><span>{{$apexbrands->shorttitle}}</span><em>已有{{$apexbrands->brandnum}}人申请</em>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--最新品牌 结束-->

    <!--推荐品牌 开始-->
    <div class="index_item">
        <div class="common_tit">
            <a class="tit" href="#">炒货店加盟</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($scrollchaohuobrand as $scrollchaohuobrands)
                <li>
                    <a href="#">
                        <div class="img_show"><img src="{{$scrollchaohuobrands->litpic}}"/></div>
                        <div class="cont">
                            <p class="tit">{{$scrollchaohuobrands->shorttitle}}</p>
                            <p class="desc">{{$scrollchaohuobrands->description}}</p>
                            <p class="price">投资金额：<em>￥{{$scrollchaohuobrands->brandpay}}万</em></p>
                        </div>
                    </a>
                </li>
                @endforeach

            </ul>
        </div>
        <div class="list">
            <ul>
                @foreach($chaohuobrands as $index=>$chaohuobrand)
                <li>
                    <a href="{{$chaohuobrand->typedir}}{{$chaohuobrand->id}}.shtml">
                        <i>{{$index+1}}</i><span>{{$chaohuobrand->shorttitle}}</span><em>已有{{$chaohuobrand->brandnum}}人申请</em>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--推荐品牌 结束-->
    <!--推荐品牌 开始-->
    <div class="index_item">
        <div class="common_tit">
            <a class="tit" href="#">进口零食店加盟</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($hotimportbrand as $hotimportbrands)
                    <li>
                        <a href="#">
                            <div class="img_show"><img src="{{$hotimportbrands->litpic}}"/></div>
                            <div class="cont">
                                <p class="tit">{{$hotimportbrands->shorttitle}}</p>
                                <p class="desc">{{$hotimportbrands->description}}</p>
                                <p class="price">投资金额：<em>￥{{$hotimportbrands->brandpay}}万</em></p>
                            </div>
                        </a>
                    </li>
                @endforeach

            </ul>
        </div>
        <div class="list">
            <ul>
                @foreach($importbrand as $index=>$importbrands)
                    <li>
                        <a href="{{$importbrands->typedir}}{{$importbrands->id}}.shtml">
                            <i>{{$index+1}}</i><span>{{$importbrands->shorttitle}}</span><em>已有{{$importbrands->brandnum}}人申请</em>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--推荐品牌 结束-->

    <!--加盟快讯 开始-->
    <div class="index_news">
        <div class="common_tit">
            <a class="more" href="#">更多&gt;&gt;</a>
            <a class="tit" href="#">加盟快讯</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($recommennews as $recommennew)
                <li><span class="date">{{date('Y-m-d',$recommennew->pubdate)}}</span><a class="txt" href="{{$recommennew->typedir}}{{$recommennew->id}}.shtml">{{$recommennew->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--加盟快讯 结束-->

    <!--创业指南 开始-->
    <div class="index_news">
        <div class="common_tit">
            <a class="more" href="#">更多&gt;&gt;</a>
            <a class="tit" href="#">创业指南</a>
        </div>
        <div class="bd">
            <ul>
                @foreach($askrows as $askrow)
                <li><span class="date">{{$askrow->time}}</span><a class="txt" href="/ask/{{$askrow->id}}.shtml">{{$askrow->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <!--创业指南 结束-->

    <!--footer开始-->
    <div class="footer">
        <div class="footer_nav">
            <a href="#">网站地图</a>|<a href="#">关于我们</a>|<a href="#">免责声明</a>|<a href="#">电脑版</a>
        </div>
        <div class="copyright">
            <p>零食加盟网 沪ICP备14037163号-46</p>
            <p>上海佐赛网络科技有限公司</p>
        </div>
    </div>
    <!--footer结束-->
</div>

<!--底部固定导航 开始-->
<div class="fixed_nav">
    <ul>
        <li>
            <a href="index.html">
                <i class="icon1"></i>
                <p>首页</p>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)">
                <i class="icon2"></i>
                <p>在线咨询</p>
            </a>
        </li>
        <li>
            <a href="javascript:void(0)" id="js_popup">
                <i class="icon3"></i>
                <p>快速留言</p>
            </a>
        </li>
    </ul>
</div>
<!--底部固定导航 结束-->

<!--弹窗 在线留言 开始-->
<div class="popup_mask">
    <div class="popup">
        <div class="hd">
            <span class="tit">快速留言</span>
            <em>(客服将第一时间给您回电)</em>
            <a class="popup_close" href="#">关闭</a>
        </div>
        <div class="bd">
            <ul>
                <li>
                    <label for="msg_name" class="label">姓名：</label>
                    <input id="msg_name" class="input_bk" type="text" name="msg_name" value="" placeholder="如 万先生">
                </li>
                <li>
                    <label for="msg_phone" class="label">手机：</label>
                    <input id="msg_phone" class="input_bk" type="text" name="msg_phone" value="" placeholder="如 13888888888">
                </li>
                <li>
                    <label for="msg_cont" class="label">留言：</label>
                    <textarea id="msg_cont" class="textarea_bk" type="text" name="msg_cont" value="" placeholder="我对此项目很感兴趣，请联系我。"></textarea>
                </li>
                <li>
                    <input type="submit" value="立即提交留言" class="btn">
                </li>
            </ul>
        </div>
    </div>
</div>
<!--弹窗 在线留言 结束-->
</body>
</html>
