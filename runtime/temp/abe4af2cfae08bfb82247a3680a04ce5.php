<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"C:\xampp\htdocs\appFactory\public/../application/index\view\pay\index.html";i:1557106413;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="http://cdn.bootcss.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="__PUBLIC__/css/build.css">
  <link rel="stylesheet" href="__PUBLIC__/css/main.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="">
        <ul class="breadcrumb">
          <li><a href="javascript:;">APP激活</a></li>
        </ul>
    </div>
    <div class="container">
      <form class="form-horizontal" role="form" id="orderForm">
        <input type="hidden" name="price" value="">
        <input type="hidden" name="proName" value="">
        <input type="hidden" name="appId" value="<?php echo $ls['id']; ?>">
        <div class="form-group">
          <label class="col-sm-2 control-label">激活APP名称</label>
          <div class="col-sm-10">
            <input class="form-control" id="focusedInput" type="text" value="<?php echo $ls['appName']; ?>" placeholder="" name="appName" readonly>
          </div>
        </div>
        <div class="form-group item">
              <label class="col-sm-2 control-label">选择套餐</label>
              <div class="col-sm-10">
                <div class="row">
                    <?php if(is_array($prolist) || $prolist instanceof \think\Collection || $prolist instanceof \think\Paginator): $k = 0; $__LIST__ = $prolist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                  <div class="col-sm-6 col-md-6">
                      <!--默认给第一个子元素加active-->
                      <div class="thumbnail <?php echo !empty($k) && $k==1?'active':''; ?>">
                          <div class="caption">
                              <h4><img src="__PUBLIC__/images/icon.png"/><?php echo $vo['proName']; ?></h4>
                              <p class="price">¥<?php echo $vo['price']; ?></p>
                              <p class="y_price">¥<?php echo $vo['y_price']; ?></p>
                          </div>
                      </div>
                  </div>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
              </div>
        </div>
        <div class="form-group item">
            <label class="col-sm-2 control-label">选择支付方式</label>
            <div class="col-sm-10">
                  <div class="row">
                      <!-- <div class="col-md-2">
                            <div class="radio radio-danger">
                                  <input type="radio" name="type" value="wxpay" id="weixin">
                                  <label for="weixin">微信支付</label>
                            </div>
                      </div>       -->
                      <div class="col-md-2"> 
                          <div class="radio radio-danger">
                            <input type="radio" name="type" value="alipay" id="zhifubao" checked>
                            <label for="zhifubao">支付宝</label>
                          </div>
                      </div>
                      <!-- <div class="col-md-2">
                          <div class="radio radio-danger">
                              <input type="radio" name="type" value="qqpay" id="QQ">
                              <label for="QQ">QQ钱包</label>
                          </div>
                      </div>
                      <div class="col-md-2">
                          <div class="radio radio-danger">
                              <input type="radio" name="type" value="tenpay" id="caifutong">
                              <label for="caifutong">财付通</label>
                          </div>
                      </div> -->
                  </div>
            </div>
      </div>
        <div class="form-group has-error">
          <label class="col-sm-2 control-label"></label>
          <div class="col-sm-10">
                <button class="btn btn-default" id="OrderAddBtn">提交订单</button>
          </div>
        </div>
      </form>
    </div>
    <script>
          $(function(){
                //默认套餐数据
                getProInfo($(".item .thumbnail").first())  
                //选择套餐
                $(".item .thumbnail").on('click',function(){
                      $(this).addClass('active').parent().siblings().find('.thumbnail').removeClass('active');
                      getProInfo($(this));
                })
                $("#OrderAddBtn").click(function(e){
                      e.preventDefault();
                      var data=$("#orderForm").serialize();
                      $.ajax({
                            url:'/index/Pay/OrderAdd',
                            type:'POST',
                            data:data,
                            success:function(data){
                                console.log(data);
                                $("body").append(data);
                                $("#alipaysubmit").attr('target','_blank')
                                $("#alipaysubmit").submit();
                              

                            },
                            error:function(){

                            }
                      })
                })
          })
          function getProInfo($obj){
              var str=$.trim($obj.find('.price').text());
              var price=parseFloat(str.substring(1));
              $("input[name=price]").val(price);
              var proName=$obj.find('.caption h4').text();
              $("input[name=proName]").val(proName);
          }
    </script>
</body>
</html>