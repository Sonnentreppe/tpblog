<!DOCTYPE HTML>
<html>
 <head>
  <title>博客管理</title>
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
  <script src="__PUBLIC__/js/jquery-3.2.0.min.js"></script>
  <script src="__PUBLIC__/bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />

  <script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>
</head>
<body>
  <div class="container" >
   <?php include(THEME_PATH.'nav.php') ?>
   <h1>博客添加 <small class='pull-right'>
     <a class='btn btn-default' href="<?php echo U("/Admin/Blog/index");?>">返回到列表</a></small></h1>
  <hr/>
<div class="rows">

  <form class="form-horizontal" action="<?php echo U('Admin/Blog/save')?>?pid=<?php echo $blog['pid'];?>" method="post">
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">标题</label>
        <div class="col-sm-9">
         <input type="text" class="form-control" name="title" value='<?php echo $blog['title'];?>'>
    </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">作者</label>
    <div class="col-sm-9">
     <input type="text" class="form-control" name="author"value='<?php echo $blog['author'];?>'>
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
