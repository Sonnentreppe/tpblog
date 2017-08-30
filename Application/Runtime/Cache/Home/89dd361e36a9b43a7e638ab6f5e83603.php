<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
  <title>MS</title>
  <head>
    <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
    <script src="/Public/js/jquery-3.2.0.min.js"></script>
    <script src="/Public/bootstrap/js/bootstrap.js"></script>
    <link rel="icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">

    <link rel="shortcut icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">


  </head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-1"></div>
    <div class="col-md-10">

<div class="panel panel-default">
  <div class="panel-heading">
    <ol class="breadcrumb">
      <li><a href="<?php echo U('/Home/Index');?>">首页</a></li>
      <li>留言模板</li>
    </ol>
  </div>
  <div class="panel-body">
    <?php foreach( $Massages as $Massage):?>
      <?php
 $change= rand(0,3); switch ($change) { case 0:$nc="success"; break; case 1:$nc="info"; break; case 2:$nc="warning"; break; case 3:$nc="danger"; break; } ?>
<div class="alert alert-<?php echo $nc;?>">
    <div class="media">
        <div class="media-left">
          <a href="http://<?php echo $Massage['address'];?>">
            <img class="media-object" src="/Uploads/avatar/<?php echo $Massage['mid'];?>.jpg" alt="...">
          </a>
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $Massage['name']?></h4>
        <?php echo html_entity_decode($Massage['content'])?>
        </div>
      </div>
  </div>
    <?php endforeach;?>

        <nav aria-label="Page navigation">
          <ul class="pagination">
            <?php echo $msshow;?>
        </ul>
</div>
<a href="<?php echo U('Home/Ms/msadd');?>">
<button  type="button" class="btn btn-info btn-lg btn-block">立即留言</button></a>
</div>
<div class="col-md-1"></div>
</div>
</body>