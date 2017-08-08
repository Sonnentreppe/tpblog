<!DOCTYPE HTML>
<html>
 <head>
  <title>博客管理</title>
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
  <script src="__PUBLIC__/js/jquery-3.2.0.min.js"></script>
  <script src="__PUBLIC__/bootstrap/js/bootstrap.js"></script>
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
          <th>pid</th>
          <th>标题</th>
          <th>作者</th>
          <th>添加时间</th>
          <th>修改时间</th>
          <th>管理</th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($blogs as $blog): ?>
        <tr>
          <td><?php echo $blog['pid']; ?></td>
          <td><?php echo $blog['title']; ?></td>
          <td><?php echo $blog['author']; ?></td>
          <td><?php echo date("Y-m-d h:i:s",$blog['intime']); ?></td>
          <td><?php echo date("Y-m-d h:i:s",$blog['uptime']); ?></td>
          <td>
           <a href="<?php echo U("/Admin/Blog/add");?>?pid=<?php echo $blog['pid'];?>">修改</a>
           <a href="<?php echo U("/Admin/Blog/delete");?>?pid=<?php echo $blog['pid'];?>">删除</a>
          </td>
       </tr>
     <?php endforeach; ?>
       </tbody>
    </table>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <?php echo $show;?>
  </ul>




</div>
  </div>
 </body>
</html>
