<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <title>管理员登录</title>
     <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
     <script src="/Public/js/jquery-3.2.0.min.js"></script>
     <script src="/Public/bootstrap/js/bootstrap.js"></script>

</head>
<body>
  <div class="container" >
  <div class="row" style="margin-top:225px;">
    <div class="col-md-3"></div>
    <div class="col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">管理员登陆</div>
        <div class="panel-body">

        <form class="form-horizontal"action="<?php echo U('Admin/Index/login?do=chk')?>" method="post">
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
              <div class="col-sm-10">
               <input type="text" class="form-control" name="auser" id="auser" placeholder="请输入用户名">
          </div>
    </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
          <div class="col-sm-10">
           <input type="password" class="form-control" name="apass" id="apass" placeholder="请输入密码">
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10"></div>
       <div class="col-sm-2">
           <input type="submit" value="提交"class="btn btn-primary"/ >
      </div>
  </div>
  </form>
         </div>
         <div class="panel-footer text-right">版权所有</div>
  </div>
      </div>
     <div class="col-md-3"></div>
    </div>
   </div>
</body>
</html>