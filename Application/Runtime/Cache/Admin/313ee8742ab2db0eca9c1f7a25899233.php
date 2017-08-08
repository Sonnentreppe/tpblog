<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>管理员管理</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
</head>
<body>
  <div class="container" >
   <?php include(THEME_PATH.'nav.php') ?>
   <h1>管理员管理 <small class='pull-right'><a class='btn btn-default' href="<?php echo U("/Admin/Auser/add");?>">添加管理员</a></small></h1>
  <hr/>
<div class="rows">
<table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>用户名</th>
          <th>管理</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($data['users'] as $user): ?>
        <tr>
          <td><?php echo $user['aid']; ?></td>
          <td><?php echo $user['auser']; ?></td>
          <td>
           <a href="<?php echo U("/Admin/Auser/add");?>?aid=<?php echo $user['aid'];?>">修改</a>
           <a href="<?php echo U("/Admin/Auser/delete");?>?aid=<?php echo $user['aid'];?>">删除</a>
          </td>
       </tr>
     <?php endforeach; ?>
       </tbody>
    </table>

</div>
  </div>
 </body>
</html>