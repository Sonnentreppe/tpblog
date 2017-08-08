<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>博客管理</title>
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

   <h1>博客添加 <small class='pull-right'>
     <a class='btn btn-default' href="<?php echo U("/Home/Ms");?>">返回到列表</a></small></h1>
  <hr/>
<div class="rows">

  <form class="form-horizontal" action="<?php echo U('Home/Ms/add')?>?check=1" method="post">
      <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">name</label>
        <div class="col-sm-9">
         <input type="text" class="form-control" name="name" value=''>
    </div>
</div>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">blog address</label>
    <div class="col-sm-9">
     <input type="text" class="form-control" name="address"value=''>
    </div>
  </div>
  <div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">Massage</label>
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