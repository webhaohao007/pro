<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"C:\xampp\htdocs\appFactory\public/../application/index\view\alist\index.html";i:1557802548;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="__PUBLIC__/css/main.css">
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="__PUBLIC__/js/beyond.js"></script>
  <script src="__PUBLIC__/js/common.js"></script>
</head>
<style>
    .label{
          font-size:14px;
    }
</style>
<body>
    <div class="">
        <ul class="breadcrumb">
          <li><a href="javascript:;">APP管理-列表</a></li>
        </ul>
    </div>
    <div class="createApp">
          <a href="/index/Createapp" class="ms-btn ms-btn-primary">创建App</a>
    </div>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>App名称</th>
          <th>h5地址(已转短链接)</th>
          <th>APP有效期</th>
          <th>APP下载量</th>
          <th>APP状态</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <!-- <tr class="active">
          <td>产品1</td>
          <td>23/11/2013</td>
          <td>待发货</td></tr>
        <tr class="success">
          <td>产品2</td>
          <td>10/11/2013</td>
          <td>发货中</td></tr>
        <tr class="warning">
          <td>产品3</td>
          <td>20/10/2013</td>
          <td>待确认</td></tr>
        <tr class="danger">
          <td>产品4</td>
          <td>20/10/2013</td>
          <td>已退货</td></tr> -->
         <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <tr class="active">
                <td class="appId"><?php echo $vo['id']; ?></td>
                <td><?php echo $vo['appName']; ?></td>
                <td><?php echo $vo['url_short']; ?></td>
                <td><?php echo date("Y-m-d H:i:s",$vo['deadline']); ?></td>
                <td><?php echo $vo['downCount']; ?></td>
                <td><?php echo !empty($vo['status'])?'<span class="label label-success">有效</span>':'<span class="label label-danger">无效</span>'; ?></td>
                <td>
                    <button class="btn btn-sm btn-success appInstallLink" data-uuid="<?php echo $vo['uuid']; ?>" data-host="<?php echo $vo['host']; ?>">app安装链接</button>
                    <button class="btn btn-sm btn-info appaActivate" data-uuid="<?php echo $vo['uuid']; ?>">app激活</button>  
                    <button class="btn btn-sm btn-danger" onclick="warning('确定要删除吗?','<?php echo url('Alist/del',array('id'=>$vo['id'])); ?>')">删除</button>
                </td>
            </tr>
          <?php endforeach; endif; else: echo "" ;endif; ?>
      </tbody>
    </table>
    <!--模态框-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">APP下载链接-请复制</h4>
                </div>
                <div class="modal-body">
                      <h5 class="text-center">App在线安装链接：<span></span></h5>
                      <div class="text-center">
                            <img src="" alt="">
                      </div>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">提交更改</button> -->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
    <script>
        $(".appInstallLink").on('click',function(){
          var id = $(this).parent().siblings('.appId').text();
          //通过appid 查询当前app的状态
          $.ajax({
                url:'/index/Alist/selectAppInfoByAppId',
                data:{
                     appid:id
                },
                success:function(data){
                    if(data.code==500){
                            toastr.error(data.data.msg);
                    } 
                }
          })
          //var uid=<?php echo session('uid'); ?>;
          //获取唯一标识的uuid
          var uuid = $(this).attr('data-uuid');
          var host = $(this).attr('data-host')
          //var urlencode = encodeURIComponent(window.location.protocol+"//"+window.location.host+'/index/Install?uuid='+uuid);
          var urlencode = encodeURIComponent(host+'/index/Install?uuid='+uuid);
           $.ajax({
                url:'http://api.weibo.com/2/short_url/shorten.json?source=2849184197&url_long='+urlencode,
                type:'GET',
                dataType:'jsonp',
                cache:false,
                success:function(res){
                      console.log(res);
                      var url_short=res.data.urls[0].url_short;
                      $("#myModal .modal-body h5 span").text(url_short);
                      var codeUrl = 'https://www.kuaizhan.com/common/encode-png?large=true&data='+url_short
                      $("#myModal .modal-body div img").attr('src',codeUrl);
                      $("#myModal").modal('show');
                      $.ajax({
                            type:'POST',
                            url:'/index/Alist/updateAppInfo',
                            data:{
                                code : codeUrl,
                                id :id
                            },
                            success:function(data){
                                  console.log(data);
                            }

                      })
                },
                error:function(res){

                }
            })
           })
        $(".appaActivate").on('click',function(){
                var uuid = $(this).attr('data-uuid');
                window.location.href='/index/Pay?uuid='+uuid; 
        })  
    </script>
</body>
</html>