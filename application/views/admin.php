<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <meta name="keywords" content="汕头电商诚信保障平台, 汕头电商, 诚信, 保障">
        <meta name="description" content="汕头电商诚信保障平台，让您更放心的去购物">
        <title>汕头电商诚信保障平台</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/layout.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/head.css" />
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/home.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/admin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>static/css/foot.css" />
        <script type="text/javascript">
            /* 检测IE版本
             * 若IE版本低于9，则跳转
             * 
            */
            var isIE = !!window.ActiveXObject
            var version = navigator.appVersion;
            var version = version.split(";");  
            var trimVersion = version[1].replace(/\s/g,""); 
            if(isIE && (trimVersion=="MSIE6.0" || trimVersion == "MSIE7.0" || trimVersion == "MSIE8.0") ) {
                alert("您的IE版本过低，请升级您的IE浏览器至IE9+或使用谷歌、火狐等高级浏览器");
                window.location.href = "http://ie.microsoft.com";
            }
        </script>
    </head>
    <body>
        <header>
            <div id="head-container">
                <h1>
                    <a href="#"><img src="<?php echo base_url(); ?>static/img/logo.png"></a>
                    汕头电商诚信保障平台
                </h1> 
            </div>
        </header>
        
        <div id="main-container" class="clear-float">
            <div id="user-operation">
                <a href="#" class="float-right user-operation" id="logout">退出</a>
                <a href="#" class="float-right user-operation" id="personal">个人</a>
            </div>
            <h2 class="title">主页编辑</h2>
            <aside>
                <ul>
                    <li class="active"><a href="admin">主页编辑</a></li>
                    <li><a href="admin/approve">商家审批</a></li>
                    <li><a href="admin/user_manage">用户管理</a></li>
                    <li><a href="admin/news_manage">新闻管理</a></li>
                </ul>
            </aside>
            <article>
                <div id="home-edit">
                    <nav>
                        <button class="home-item">平台介绍</button>
                        <button class="home-item">诚信会员</button>
                        <button class="home-item">动态新闻</button>
                        <button class="home-item">平台服务</button>
                        <button class="home-item">诚信保障</button>
                        <button class="home-item">会员特权</button>
                        <button class="home-item">诚信之星</button>
                        <button class="home-item">二维码扫描</button>
                    </nav>
                    <div id="home-edit-forms">
                        <form action="#" method="post" id="home-item-0">
                            <h2>平台介绍</h2>
                            <div class="items">
                                <label>内容</label>
                                <textarea name="home-item-0">内容</textarea>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-1">
                            <h2>诚信会员</h2>
                            <div class="items">
                                <label>待选</label>
                                <div class="clear-float man-list candidate">
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                </div>
                            </div>
                            <div class="items">
                                <label>已选</label>
                                <div class="clear-float man-list selected">
                                    <button>123</button>
                                </div>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-2">
                            <h2>动态新闻</h2>
                            <div class="items">
                                <table>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><a href="#">新闻新闻</a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><a href="#">新闻新闻</a></td>
                                    </tr>
                                    <tr>
                                        <td><input type="checkbox" /></td>
                                        <td><a href="#">新闻新闻</a></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-3">
                            <h2>平台服务</h2>
                            <div class="items">
                                <label>内容</label>
                                <textarea name="home-item-0">内容</textarea>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-4">
                            <h2>诚信保障</h2>
                            <div class="items">
                                <label>内容</label>
                                <textarea name="home-item-0">内容</textarea>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-5">
                            <h2>会员特权</h2>
                            <div class="items">
                                <label>内容</label>
                                <textarea name="home-item-0">内容</textarea>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-6">
                            <h2>诚信之星</h2>
                            <div class="items">
                                <label>待选</label>
                                <div class="clear-float man-list candidate">
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                    <button>123</button>
                                    <button>234</button>
                                    <button>345</button>
                                </div>
                            </div>
                            <div class="items">
                                <label>已选</label>
                                <div class="clear-float man-list selected">
                                    <button>123</button>
                                </div>
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                        <form action="#" method="post" class="hide" id="home-item-7">
                            <h2>二维码扫描</h2>
                            <div class="items">
                                <label>上传图片</label>
                                <input type="file" accept="image/*" />
                            </div>
                            
                            <div class="btns">
                                <button type="submit">修改</button>
                                <button type="reset">取消</button>
                            </div>
                        </form>
                    </div>
                </div>
            </article>
        </div>



        <footer>
            <address>&copy;2014 By 陈冠达 郑锦泽 &nbsp; 备案号：粤12345678</address>
        </footer>
    </body>
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-2.1.1.js"></script>
    <!-- // <script type="text/javascript" src="<?php echo base_url(); ?>static/js/home.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url(); ?>static/js/admin.js"></script>
</html>