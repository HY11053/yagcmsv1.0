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
                        <li><a href="/search/all_1_5_0.shtml" target="_blank">5万以下</a></li>
                        <li><a href="/search/all_5_10_0.shtml" target="_blank">5-10万</a></li>
                        <li><a href="/search/all_10_20_0.shtml" target="_blank">10-20万</a></li>
                        <li><a href="/search/all_20_50_0.shtml" target="_blank">20-50万</a></li>
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
                        <a href="/paihangbang"><i class="icon1"></i><span class="tit">排行榜</span></a>
                    </li>
                    <li>
                        <a href="/search"><i class="icon2"></i><span class="tit">项目搜索</span></a>
                    </li>
                    <li>
                        <a href="/lsbrand"><i class="icon3"></i><span class="tit">品牌大全</span></a>
                    </li>
                    <li>
                        <a href="/ask"><i class="icon4"></i><span class="tit">加盟问答</span></a>
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
                <li class="cur"><a href="/" >首页</a></li>
                @foreach($typelinks as $typelink)

                    <li><a href="{{ $typelink->typedir }}" >{{ $typelink->typename }}</a></li>

                @endforeach
            </ul>
        </div>
    </div>