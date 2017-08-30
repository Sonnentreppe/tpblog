<!DOCTYPE HTML>
<html>
 <head>
  <title><?php echo $cfg['title'];?></title>
  <link rel="stylesheet" href="__PUBLIC__/bootstrap/css/bootstrap.css"/>
  <script src="__PUBLIC__/js/jquery-3.2.0.min.js"></script>
  <script src="__PUBLIC__/bootstrap/js/bootstrap.js"></script>
  <link rel="icon" href="__ROOT__/Uploads/favicon.ico" mce_href="__ROOT__/Uploads/favicon.ico" type="image/x-icon">

  <link rel="shortcut icon" href="__ROOT__/Uploads/favicon.ico" mce_href="__ROOT__/Uploads/favicon.ico" type="image/x-icon">

</head>
<body>

  <div style="position:fixed; width:100%; height:100%; background-color: #22C3AA; z-index:0" >
  <img src="__ROOT__/Uploads/1.jpg" height="100%" width="100%">
  </div>

<div class="container-fluid">
        <div class="row">
          <div class="col-md-3"></div>
            <div class="col-md-3  navbar-fixed-top" style="margin-top:2%;">
          <div class="panel panel-default">
            <div class="panel-body">
              <div class="row">

            <div class="thumbnail">
              <img src="__ROOT__/Uploads/0.jpg" alt="..." width="100%" height="100%">
              <div class="caption">
                <h4>Sonnentreppen</h4>
                <p><?php echo $cfg['intro'];?></p>
                <p><a href="<?php echo U('/Home/Ms')?>" class="btn btn-primary" role="button">Massage</a> <a href="<?php echo U('/Admin/Login')?>" class="btn btn-default" role="button">Admin</a></p>
              </div>
            </div>

        </div>
            </div>
            <div class="panel-footer">版权归SONN所有</div>
          </div>
        </div>



<div class="col-md-9">

      <div  class="col-md-11" style="background-color:#F5F5F5;" >

           <?php foreach( $blogs as $blog):?>
            <div class="panel panel-default" style="margin-top:10px; overflow:auto">
               <div class="panel-heading">
        <h4><?php echo $blog['title'];?></h4>

               </div>
               <div class="panel-body">

            <?php echo html_entity_decode($blog['content']);?>

               </div>
               <div class="panel-heading">
                 <div class="btn-group" role="group" aria-label="...">

          <a class="zan" id="<?php echo $blog['pid']?>" href="javascript:void(0);">  <span class="btn btn-danger glyphicon glyphicon-heart" aria-hidden="true"><?php echo $blog['zan']?></span></a>



                      </div>

      <div class="text-right"> <?php echo date("y-m-d h:i",$blog['intime']);?>
          </div>


               </div>
             </div>
          <?php endforeach;?>
  <script type="text/javascript">

          $(".zan").on('click',function(){
                  var Oa=$(this);
                  var pid=Oa.attr('id');//获取id属性
                  var vl=Oa.find("span").text();
                      vl=parseInt(vl)+1;

                  $.post('__CONTROLLER__/zan',{pid:pid},function(data){
                      if(data.status==1){
                          alert('感谢您的支持！');//模拟异步数据加1
                          Oa.find("span").text(vl);//页面元素加1
                      }else{
                          alert('您已经点过赞了,不要重复哦！');
                      }
                  },'json');
              })
</script>
          <div class="container-fluid">

                  <nav aria-label="Page navigation">
                    <ul class="pagination">
                      <?php echo $show;?>
                  </ul>

                 </div>
            </div>
         </div>

  </div>
</div>

 </body>
</html>
