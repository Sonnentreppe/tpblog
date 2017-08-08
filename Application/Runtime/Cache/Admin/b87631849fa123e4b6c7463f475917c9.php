<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>后台管理首页</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <div class="container" >
   <?php include(THEME_PATH.'nav.php') ?>
   <h1>管理员添加 <small class='pull-right'>
     <a class='btn btn-default' href="<?php echo U("/Admin/Auser/index");?>">返回到列表</a></small></h1>
  <hr/>
<div class="rows">

  <form class="form-horizontal" action="<?php echo U('Admin/Auser/save')?>?aid=<?php echo $user['aid'];?>" method="post">
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">用户</label>
        <div class="col-sm-6">
         <input type="text" class="form-control" name="auser" id="auser" placeholder="请输入用户名" value="<?php echo $user['auser'];?>">
    </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
    <div class="col-sm-6">
     <input type="password" class="form-control" name="apass" id="apass" placeholder="请输入密码" value="<?php echo $user['auser'];?>">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-8"></div>
 <div class="col-sm-2">
     <input type="submit" value="提交"class="btn btn-primary"/ >
</div>
</div>
</form>


</div>
  </div>
 </body>
</html>