<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>系统设置</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <div class="container" >
   <?php include(THEME_PATH.'nav.php') ?>
   <h1>系统设置</h1>
  <hr/>
<div class="rows">

  <form class="form-horizontal" action="<?php echo U('Admin/Setting/save')?>" method="post">

<?php foreach( $setting as $key=>$val ):?>
  <div class="form-group">
     <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $key; ?></label>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="<?php echo $key; ?>"  value="<?php echo $val;?>">
     </div>
  </div>
<?php endforeach;?>
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