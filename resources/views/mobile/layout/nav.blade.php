    <!--header开始-->
    <div class="header">
        <p class="title"><img src="/mobile-file/images/logo.png" alt="零食加盟网"/></p>
        <p class="mcate"><b>分类</b></p>
        <div class="d_nav">
            <ul>
                <li><a href="/lsbrand">品牌</a></li>
                <li><a href="/ganguodian">干果</a></li>
                <li><a href="/chaohuodian">炒货</a></li>
                <li><a href="/jinkoulingshi">进口零食</a></li>
                <li><a href="/zhanhui">展会</a></li>
                <li><a href="/ask">问答</a></li>
                <li><a href="/news">资讯</a></li>
                <li><a href="/jiamengfei">加盟费</a></li>
            </ul>
        </div>
    </div>
    <!--header结束-->

    <!--搜索开始-->
    <div class="search">
        <input type="text" name="keyword" class="search_txt" maxlength="18" id="keyword" value="输入您要找的项目">
        <a type="submit" class="search_btn"></a>
    </div>
    <!--搜索结束-->

    <!--幻灯片开始-->
    <div id="focus" class="focus">
        <div class="hd">
            <ul>
            </ul>
        </div>
        <div class="bd">
            <ul>
                <li><a href="javascript;"><img _src="/mobile-file/images/temp/bn1.jpg" src="/mobile-file/images/blank.png" /></a></li>
                <li><a href="javascript;"><img _src="/mobile-file/images/temp/bn2.jpg" src="/mobile-file/images/blank.png"/></a></li>
                <li><a href="javascript;"><img _src="/mobile-file/images/temp/bn3.jpg" src="/mobile-file/images/blank.png"/></a></li>
                <li><a href="javascript;"><img _src="/mobile-file/images/temp/bn4.jpg" src="/mobile-file/images/blank.png"/></a></li>
            </ul>
        </div>
    </div>
    <script type="text/javascript">
        TouchSlide({
            slideCell:"#focus",
            titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
            mainCell:".bd ul",
            effect:"left",
            autoPlay:true,//自动播放
            autoPage:true, //自动分页
            switchLoad:"_src" //切换加载，真实图片路径为"_src"
        });
    </script>
    <!--幻灯片结束-->

    <!--分类开始-->
    <div class="index_nav">
        <ul>
            <li><a href="/lsbrand" class="icon1"><em></em>零食</a></li>
            <li><a href="/ganguodian" class="icon2"><em></em>干果</a></li>
            <li><a href="/chaohuodian" class="icon3"><em></em>炒货</a></li>
            <li><a href="/jinkoulingshi" class="icon4"><em></em>进口零食</a></li>
            <li><a href="/zhanhui" class="icon5"><em></em>展会</a></li>
            <li><a href="/ask" class="icon6"><em></em>问答</a></li>
            <li><a href="/news" class="icon7"><em></em>资讯</a></li>
            <li><a href="/jiamengfei" class="icon8"><em></em>加盟费</a></li>
        </ul>
    </div>