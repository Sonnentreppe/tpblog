<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>博客管理</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <div class="container" >
   <?php include(THEME_PATH.'nav.php') ?>
   <h1>博客管理 <small class='pull-right'><a class='btn btn-default' href="<?php echo U("/Admin/Blog/add");?>">添加博客</a></small></h1>
  <hr/>
<div class="rows">
<table class="table table-striped">
      <thead>
        <tr>
          <th>mid</th>
          <th>name</th>
          <th>mail</th>
          <th>address</th>
          <th>contnent</th>
          <th>管理</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($Massages as $blog): ?>
        <tr>
          <td><?php echo $blog['mid']; ?></td>
          <td><?php echo $blog['name']; ?></td>
          <td><?php echo $blog['mail']; ?></td>
          <td><?php echo $blog['address']; ?></td>
          <td><?php echo html_entity_decode($blog['content']); ?></td>

          <td>

           <a href="<?php echo U("/Admin/Ms/delete");?>?mid=<?php echo $blog['mid'];?>">删除</a>
          </td>
       </tr>
     <?php endforeach; ?>
       </tbody>
    </table>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <?php echo $msshow;?>
  </ul>




</div>
  </div>
 </body>
</html>