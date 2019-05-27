<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"C:\xampp\htdocs\appFactory\public/../application/index\view\index\index.html";i:1558314190;s:78:"C:\xampp\htdocs\appFactory\public/../application/index\view\common\header.html";i:1558314190;s:78:"C:\xampp\htdocs\appFactory\public/../application/index\view\common\footer.html";i:1558314190;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>IOS app生成</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/font_780494_gi02bcyvmy5.css">
    <link rel="stylesheet" href="__PUBLIC__/css/main.css"/>
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/js/swiper.min.js"></script>
    <script src="__PUBLIC__/js/common.js"></script>
</head>
<body>

<nav role="navigation">
	<div class="container">
    <div class="login-nav">
            <div class="navbar-header">
                <a class="logo" href="#">
                        <img src="__IMG__/images/logo.png">
                </a>
            </div>
            <div class="userHandle">
                <?php if(\think\Request::instance()->session('uname')): ?>
                    <div class="login-in">
                            <!-- <li><a href="javascript:void (0);">欢迎您,<?php echo \think\Request::instance()->session('uname'); ?></a></li> -->
                                <div class="notification fl">
                                            <span class="iconfont icon-msg"></span>
                                            <span class="ms-badge">1</span>
                                </div>
                                <div class="login-user clear fl">
                                            <span class="fl">
                                                    <?php echo \think\Request::instance()->session('uname'); ?>
                                            </span>
                                            <span class="iconfont icon-arrow-bottom fl hidden-xs">
                                            </span>
                                            <div class="user-wrap">
                                                        <dl>
                                                                <!-- <dd>
                                                                        <a href="">我的订单</a>	
                                                                </dd> -->
                                                                <dd>
                                                                    <a href="">修改密码</a>
                                                                </dd>
                                                                <dd>
                                                                        <a href="/index/Main/loginOut">退出</a>	
                                                                </dd>
                                                        </dl>
                                            </div>
                                </div>
                    </div>
                
                <?php else: ?>
                    <ul class="pull-right">
                            <li class="active"><a href="" data-toggle="modal" data-target="#loginModal" class="ms-btn ms-btn-default">登录</a></li>
                            <li><a href="/index/Register"  class="ms-btn ms-btn-primary">注册</a></li>
                    </ul>
                <?php endif; ?>
            </div>
    </div>
	</div>
</nav>
<div class="banner">
        <div class="swiper-container">
               <div class="swiper-wrapper">
                    <div class="swiper-slide">
                           <a href="" style="background:url(__IMG__/images/index-banner-1.jpg)no-repeat center">
                                    <div class="container">
                                        <div class="banner-con con3 hidden-xs">
                                                <div class="h1">在线打包制作APP</div>
                                                <div class="h2">
                                                    
                                                        只需一个网站链接，即可快速制作APP，无需编程，数十项功能任意搭配使用<br>
                                                        可重新编辑
                                                        <i>|</i>
                                                        在线更新
                                                        <i>|</i>
                                                        免费试用
                                                        <!-- 支持安卓苹果双平台  -->
                                                </div> 
                                                <button type="button" class="ms-btn">立即制作</button>
                                        </div>
                                    </div>   
                           </a> 
                    </div>
               </div> 
        </div>
</div>
<div class="section">
        <div class="container">
                <div class="goodness encapsulation-advantage">
                        <h1 class="h1">我们的优势</h1>    
                        <div class="container">
                                <div class="row">
                                        <div class="col-sm-3 col-xs-6">
                                                <div class="ms-thumbnail">
                                                        <div class="img-wrap">
                                                                <img src="__IMG__/images/tg-33.png" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="ms-caption">
                                                                <div class="tit">在线自助操作</div>
                                                                <p>
                                                                        自助式操作<br>
                                                                        根据自身所需配置功能，1分钟生成
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                                <div class="ms-thumbnail">
                                                        <div class="img-wrap">
                                                                <img src="__IMG__/images/tg-34.png" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="ms-caption">
                                                                <div class="tit">突破各种限制</div>
                                                                <p>
                                                                    
                                                                        不用越狱、不用企业证书<br>
                                                                        不用上架appStore、即装即用
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                                <div class="ms-thumbnail">
                                                        <div class="img-wrap">
                                                                <img src="__IMG__/images/tg-35.png" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="ms-caption">
                                                                <div class="tit">兼容所有苹果机型</div>
                                                                <p>
                                                                    
                                                                        支持所有苹果机型<br>
                                                                        完美兼容各个ios版本
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-sm-3 col-xs-6">
                                                <div class="ms-thumbnail">
                                                        <div class="img-wrap">
                                                                <img src="__IMG__/images/tg-36.png" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="ms-caption">
                                                                <div class="tit">同步更新</div>
                                                                <p>
                                                                    
                                                                        H5网站内容更新后，<br>
                                                                        IOS APP自动同步，无需重新打包
                                                                </p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</div>
<div class="bg-f7">
        <div class="container">
                <div class="encapsulation-complete-6">
                        <div class="h1">5步完成在线制作APP</div>
                        <ul class="clearfix">
                                <li>
                                        <img src="__IMG__/images/en-5.png" alt="">
                                        <p>
                                               
                                                注册登录<br>
                                                点击导航栏【APP打包】
                                        </p>
                                </li>
                                <li>
                                        <img src="__IMG__/images/en-6.png" alt="">
                                        <p>
                                                填写网站、APP名称
                                        </p>
                                </li>
                                <li>
                                        <img src="__IMG__/images/en-7.png" alt="">
                                        <p>
                                                上传或在线制作<br>
                                                图标、启动图
                                        </p>
                                </li>
                                <li>
                                        <img src="__IMG__/images/en-9.png" alt="">
                                        <p>
                                            
                                                选择套餐购买<br>
                                                （有免费试用）
                                        </p>
                                </li>
                                <li>
                                        <img src="__IMG__/images/en-10.png" alt="">
                                        <p>
                                                2分钟内完成打包<br>
                                                测试下载封装包
                                        </p>
                                </li>
                        </ul>
                </div>
        </div>
</div>
<div class="section">
        <div class="container">
                <div class="appList">
                        <h1 class="h1">最近生成的APP</h1>
                        <ul>
                            <li>
                                <img src="__IMG__/images/app1.jpg" alt="">
                                <p>秦皇岛小区</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app2.jpg" alt="">
                                <p>岩土云都</p>
                             </li>
                             <li>
                                <img src="__IMG__/images/app3.jpg" alt="">
                                <p>养生房产网</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app4.jpg" alt="">
                                <p>CRM管家</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app5.jpg" alt="">
                                <p>京华惠淘</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app6.jpg" alt="">
                                <p>91赚钱</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app7.jpg" alt="">
                                <p>礼品屋</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app8.jpg" alt="">
                                <p>爱看电影</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app9.jpg" alt="">
                                <p>吾爱淘</p>
                            </li>
                            <li>
                                <img src="__IMG__/images/app10.jpg" alt="">
                                <p>先生商店</p>
                            </li>
                        </ul>
                </div>
        </div>
</div>
<!--底部-->
<!--底部-->
<footer>
  <div class="container">
       <div class="clearfix f-con">
                   <div class="left fl clearfix">
                           <a href="" class="footer-logo">
                                   <img src="__IMG__/images/footer_logo.png" alt="">
                           </a> 
                   </div>
                   <div class="fr right clearfix">
                           <dl class="fl r-1">
                               <dt class="clearfix">
                                     <img src="__IMG__/images/f-1.png" alt="">
                                     <span>产品服务</span>  
                               </dt>
                               <dd class="line"></dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                           </dl>
                           <dl class="fl r-2">
                               <dt class="clearfix">
                                       <img src="__IMG__/images/f-2.png" alt="">
                                       <span>关于我们</span>  
                               </dt>
                               <dd class="line"></dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                               <dd>
                                   <span class="icon-jiantou iconfont"></span>
                                   <a href="" target="_blank">APP制作</a>
                               </dd>
                           </dl>
                           <dl class="fl r-2">
                                   <dt class="clearfix">
                                           <img src="__IMG__/images/f-3.png" alt="">
                                           <span>联系我们</span>  
                                   </dt>
                                   <dd class="line"></dd>
                                   <dd>
                                      <a href="javascript:;">QQ:734714852</a>
                                   </dd>
                                   <dd>
                                       <a href="javascript:;">邮箱:</a> 
                                   </dd>
                                   <dd>
                                       <a href="">地址:</a>
                                   </dd>
                           </dl>
                   </div>
       </div> 
       <div class="copy-right">
               海南竞游网络游戏有限责任公司 kuaifabu.com 版权所有  
               <a href="" href="http://www.beian.miit.gov.cn">琼ICP备18004564号-2</a> 
       </div>
   </div> 
</footer>
<!--登陆模态框-->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
   <div class="modal-content">
       <div class="modal-header">
           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
           <h4 class="modal-title" id="loginModalLabel">用户登录</h4>
       </div>
       <div class="modal-body">
           <form class="form-horizontal" role="form" id="loginForm">
               <div class="form-group">
                   <div class="col-sm-12">
                       <input type="text" class="form-control"  placeholder="请输入您的用户名" name="uname">
                   </div>
               </div>
               <div class="form-group">
                   <div class="col-sm-12">
                       <input type="password" class="form-control"  placeholder="请输入密码" name="upwd">
                   </div>
               </div>
               <!--<div class="form-group">-->
               <!--<div class="col-sm-offset-2 col-sm-10">-->
               <!--<div class="checkbox">-->
               <!--<label>-->
               <!--<input type="checkbox">请记住我-->
               <!--</label>-->
               <!--</div>-->
               <!--</div>-->
               <!--</div>-->
           </form>
       </div>
       <div class="modal-footer">
           <!--<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>-->
           <button type="button" class="ms-btn ms-btn-primary" id="loginBtn">登录</button>
       </div>
   </div><!-- /.modal-content -->
</div><!-- /.modal -->
</div>
<script>
  $(function(){
        //用户登录
        $("#loginBtn").on('click',loginFun);
  }) 
 
//   function regFun(){
//        //toastr.info('Are you the 6 fingered man?')
//        if(checkUname()&&checkPwd()&&checkPwd2()){
//            var data=$("#regForm").serialize();
//            $.ajax({
//                url:'/index/index/Reg',
//                type:'POST',
//                data:data,
//                success:function(data){
//                        if(data.code==200){
//                            toastr.info(data.msg);
//                            setTimeout(function(){
//                                location.href='/index/Main';
//                            },1000);  
                          
//                        }
//                        else{
//                            toastr.error(data.msg);
//                        }                 
//                }
//            })
//        }
//   }
  function loginFun(){
      var data=$("#loginForm").serialize();
      $.ajax({
          url:'/index/index/login',
          type:'POST',
          data:data,
          success:function(data){
               if(data.code==200){
                       //toastr.info(data.msg);
                       location.href='/index/Main';
               }
               else{
                       toastr.error(data.msg);
               }
          }
      })
  }
</script>
</body>
</html>