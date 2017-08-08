<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title><?php echo $cfg['title'];?></title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>

  <div class="container" >

     <ol class="breadcrumb">
       <li><a href="<?php echo U('/Home/Index');?>">首页</a></li>
       <li><?php echo $blog['title'];?></li>

     </ol>
     <div class="col-md-3">
<div class="panel panel-default">
 <div class="panel-heading">作者简介</div>
 <div class="panel-body">
   小框，介绍作者
 </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">作者简介</div>
  <div class="panel-body">
    小框，介绍作者
  </div>
</div>

</div>
     <div class="col-md-9">

       <div class="panel panel-default">
          <div class="panel-heading">
           <?php echo $blog['title'];?>
          </div>
          <div class="panel-body">
            <?php echo html_entity_decode($blog['content']);?>
          </div>
        </div>

     </div>
  </div>
 </body>
</html>