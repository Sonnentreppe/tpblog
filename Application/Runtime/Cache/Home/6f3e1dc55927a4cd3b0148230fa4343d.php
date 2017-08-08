<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>博客添加</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />

  <script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>
</head>
<body>

  <div class="container" >

   <h1>master 个人页面 <small class='pull-right'>
     <a class='btn btn-default' href="<?php echo U("/Home/Index/index");?>?mid=1">返回主页</a></small></h1>
  <hr/>
<div class="rows">
  <div class="col-sm-12">
    <div class="col-sm-3">
      <img  width="200px;"  src=" /Uploads/master_photo/0.png" alt="..." class="img-rounded">
    </div>
  <div class="col-sm-8">
    <ul class="list-group">
  <li class="list-group-item list-group-item-success"><?php echo $master['master_name'];?></li>
  <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
  <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
  <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
</ul>
  </div>

</div>
  <form class="form-horizontal" action="<?php echo U('Home/Login/save')?>?master_name=<?php echo $master['master_name'];?>" method="post">
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
        <div class="col-sm-9">
         <input type="text" class="form-control" name="title" >
    </div>
</div>

  <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">正文</label>
    <div class="col-sm-9">
    <textarea id='content' style="height:400px" class="form-control" name="content"><?php echo $blog['content'];?></textarea>
    <script>
        var editor = new Simditor({
          textarea: $('#content'),
            upload:{
              url:'<?php echo U('/Admin/Blog/upload');?>',
              fileKey:'file1',
            }
        });

  </script>

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
  </div>
 </body>
</html>