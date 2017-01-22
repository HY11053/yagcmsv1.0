<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>网站地图</title>
    <link href="/frontend/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/frontend/css/news.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="/frontend/js/jquery.min.js"></script>
    <script type="text/javascript" src="/frontend/js/jquery.SuperSlide.2.1.1.js"></script>
    <script type="text/javascript" src="/frontend/js/index.js"></script>
</head>

<body>
<!--header 开始-->
<div class="header">
    <div class="top">
        <div class="inner">
            <div class="top_l">您好，欢迎访问零食加盟网！</div>
            <div class="top_r">
                <div class="tel">7*24小时免费直拨 400-618-1717</div>
                <div class="add_wx" id="js_add_wx">
                    <img src="/frontend/images/wx_link.jpg" width="76" height="22" alt="官方微信"/>
                    <div class="wx_drop_down">
                        <img src="/frontend/images/wx_qrcode.png" alt="微信二维码"/>
                    </div>
                </div>
                <div class="add_wb">
                    <iframe scrolling="no" allowtransparency="true" marginwidth="0" marginheight="0" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=63&amp;height=24&amp;uid=3083675110&amp;style=1&amp;btn=light&amp;dpc=1" frameborder="0" height="24" width="63"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="header_box_wrap">
        <div class="header_box">
            <div class="logo"><a href="/" target="_blank"><img src="/frontend/images/logo.jpg" alt="零食加盟网"/></a></div>
            <!--搜索 开始-->
            <div class="search">
                <div class="search_tab">
                    <ul>
                        <li class="cur">找商机</li>
                        <li><a href="#" target="_blank">5万以下</a></li>
                        <li><a href="#" target="_blank">5-10万</a></li>
                        <li><a href="#" target="_blank">10-20万</a></li>
                        <li><a href="#" target="_blank">20-50万</a></li>
                    </ul>
                </div>
                <div class="search_box">
                    <form action="/search/" method="get">
                        <input type="text" onblur="if (this.value == '') {this.value = this.attributes['def'].value;this.className='search_input';}" onfocus="if (this.value == this.attributes['def'].value) {this.value='';this.className='search_input1';}" def="想找什么项目？" class="search_input" value="想找什么项目？" name="search">
                        <input type="submit" class="search_btn" value="搜索">
                    </form>
                </div>
            </div>
            <!--搜索 结束-->

            <!--快速链接 开始-->
            <div class="quick_btn">
                <ul>
                    <li>
                        <a href="#"><i class="icon1"></i><span class="tit">排行榜</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon2"></i><span class="tit">项目搜索</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon3"></i><span class="tit">品牌大全</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon4"></i><span class="tit">加盟问答</span></a>
                    </li>
                </ul>
            </div>
            <!--快速链接 结束-->
        </div>
    </div>

    <!--导航 开始-->
    <div class="nav">
        <div class="inner">
            <ul class="nav_list">
                <li class="cur"><a href="#" target="_blank">首页</a></li>
                <li><a href="#" target="_blank">零售店品牌</a></li>
                <li><a href="#" target="_blank">零售行业资讯</a></li>
                <li><a href="#" target="_blank">加盟费用</a></li>
                <li><a href="#" target="_blank">行业展会</a></li>
                <li><a href="#" target="_blank">问答</a></li>
                <li><a href="#" target="_blank">干果店</a></li>
                <li><a href="#" target="_blank">炒货店</a></li>
                <li><a href="#" target="_blank">进口零食店</a></li>
                <li><a href="#" target="_blank">进货批发</a></li>
                <li><a href="#" target="_blank">城市</a></li>
            </ul>
        </div>
    </div>
    <!--导航 结束-->
</div>
<!--header 结束-->

<!--主体开始-->
<div class="main">

    <!--主体部分开始-->
    <div class="error404_wrapper clearfix">
        <div class="error404">
            <div class="tip_area">
                <p><font id="num">5</font>秒之后将会带您进入网站首页...</p>
            </div>
            <div class="btn_area">
                <a class="pub_btn" href="/">首页</a>
                <a class="pub_btn" href="#">加盟项目</a>
                <a class="pub_btn" href="#">商机排行</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            function jump(count) {
                window.setTimeout(function(){
                    count--;
                    if(count > 0) {
                        $('#num').text(count);
                        jump(count);
                    } else {
                        location.href="http://www.larcms.com";
                    }
                }, 1000);
            }
            jump(5);
        });
    </script>
    <!--主体部分结束-->

    <div class="index_step"></div>


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
    <div class="cert"><img src="/frontend/images/cert.jpg" alt="信用保障"/></div>
    <div class="wx"><img src="/frontend/images/logo_wx.jpg" alt="微信"/></div>
</div>
<!--footer结束-->


</body>
</html>
