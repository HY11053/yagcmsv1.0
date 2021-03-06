<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="wap-font-scale" content="no"/>
    <title>品牌列表页</title>
    <link rel="stylesheet" type="text/css" href="/mobile-file/css/css.css">
    <script type="text/javascript" src="/mobile-file/js/jquery.min.js"></script>
    <script type="text/javascript" src="/mobile-file/js/TouchSlide.1.1.js"></script>
    <script type="text/javascript" src="/mobile-file/js/index.js"></script>
</head>
<body>

<div class="viewport">
    @include('mobile.layout.nav')
      <!--列表开始-->
    <div class="brand_list">
        <ul>
            @foreach($articlelists as $articlelist)
            <li>
                <div class="img_show"><a href="{{$articlelist->typedir}}{{$articlelist->id}}.shtml"><img src="{{$articlelist->litpic}}" alt="{{$articlelist->shorttitle}}"/></a></div>
                <div class="cont">
                    <p class="tit"><a href="{{$articlelist->typedir}}{{$articlelist->id}}.shtml">{{$articlelist->shorttitle}}</a></p>
                    <p class="price">基本投资：<em>{{$articlelist->brandpay}}</em></p>
                    <p class="info">经营范围：{{$articlelist->brandmap}}</p>
                    <p class="btn"><a href="#" class="btn_ask">加盟咨询</a><a href="{{$articlelist->typedir}}{{$articlelist->id}}.shtml" class="btn_intro">品牌介绍</a></p>
                </div>
            </li>
            @endforeach
        </ul>

        <!--分页开始-->
        <div class="page">
            {{$articlelists->links()}}
        </div>
        <!--分页开始-->
    </div>
    <!--内容结束-->

    <!--在线留言开始-->
    <div class="index_message">
        <div class="message_tit"><span>在线留言</span><em>(客服将第一时间给您回电)</em></div>
        <div class="mfdh clearfix">
            <form >
                <ul>
                    <li>
                        <label class="p-tips">姓名：</label>
                        <input name="fullname" type="text"  class="name" placeholder="如 王先生" value="">
                    </li>
                    <li>
                        <label class="p-tips">手机：</label>
                        <input name="phone" type="text" class="name" placeholder="如 13888888888" value="">
                    </li>
                    <li>
                        <label class="p-tips">留言：</label>
                        <textarea class="txt" name="message" cols="" rows="" placeholder="我对此项目很感兴趣，请联系我。"></textarea>
                    </li>
                </ul>
                <input name="" type="submit" class="anniu" value="立即提交留言">
            </form>
        </div>
    </div>
    <!--在线留言结束-->
    <!--footer开始-->
    <div class="footer">
        <div class="footer_nav"> <a href="#">网站地图</a>|<a href="#">关于我们</a>|<a href="#">免责声明</a>|<a href="#">电脑版</a> </div>
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
        <li> <a href="index.html"> <i class="icon1"></i>
                <p>首页</p>
            </a> </li>
        <li> <a href="javascript:void(0)"> <i class="icon2"></i>
                <p>在线咨询</p>
            </a> </li>
        <li> <a href="javascript:void(0)" id="js_popup"> <i class="icon3"></i>
                <p>快速留言</p>
            </a> </li>
    </ul>
</div>
<!--底部固定导航 结束-->

<!--弹窗 在线留言 开始-->
<div class="popup_mask">
    <div class="popup">
        <div class="hd"> <span class="tit">快速留言</span> <em>(客服将第一时间给您回电)</em> <a class="popup_close" href="#">关闭</a> </div>
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
