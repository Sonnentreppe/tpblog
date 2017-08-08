<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
 <head>
  <title>博客管理</title>
  <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
  <script src="/Public/js/jquery-3.2.0.min.js"></script>
  <script src="/Public/bootstrap/js/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="/Public/simditor/styles/simditor.css" />

  <link rel="icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">

  <link rel="shortcut icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">


  <script type="text/javascript" src="/Public/simditor/scripts/module.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/hotkeys.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/uploader.js"></script>
  <script type="text/javascript" src="/Public/simditor/scripts/simditor.js"></script>

  <script type="text/javascript" src="/Public/photo/swfobject.js"></script>
  <script type="text/javascript" src="/Public/photo/fullAvatarEditor.js"></script>

</head>
<body>
<div class="container" >

<div class="rows">
  <div class="col-md-1"></div>
  <div class="col-md-10">

  <form class="panel panel-default" action="<?php echo U('Home/Ms/add')?>" method="post">
    <div class="panel-heading">
      <ol class="breadcrumb">
        <li><a href="<?php echo U('/Home/Index');?>">首页</a></li>
        <li><a href="<?php echo U('/Home/Ms');?>">留言模板</a></li>
        <li>留言添加</li>
      </ol>
    </div>
    <div class="panel-body">
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
    <textarea id='content' style="height:400px" class="form-control" name="content"></textarea>
    <script>
        var editor = new Simditor({
          textarea: $('#content'),
            upload:{
              url:'<?php echo U('/Home/Ms/upload');?>',
              fileKey:'file1',
            }
        });

  </script>

</div>
</div>

<div style="width:632px;margin: 0 auto;text-align:center">
			<h1 style="text-align:center">头像上传</h1>
			<div>
				<p id="swfContainer">
                    本组件需要安装Flash Player后才可使用，请从<a href="http://www.adobe.com/go/getflashplayer">这里</a>下载安装。
				</p>
			</div>
        </div>
		<script>
            swfobject.addDomLoadEvent(function () {

				var swf = new fullAvatarEditor("/Public/photo/fullAvatarEditor.swf", "/Public/photo/expressInstall.swf", "swfContainer", {
					    id : 'swf',
						upload_url : "<?php echo U('Home/Ms/uploadImg',array('id'=>'1'));?>",	//上传接口
						method : 'get',	//传递到上传接口中的查询参数的提交方式。更改该值时，请注意更改上传接口中的查询参数的接收方式
						src_upload : 2,		//是否上传原图片的选项，有以下值：0-不上传；1-上传；2-显示复选框由用户选择
						avatar_box_border_width : 0,
						avatar_sizes : '64*64',
						avatar_sizes_desc : '232*299',
						avatar_tools_visible : false,
						checkbox_visible : false
					}, function (msg) {
						switch(msg.code)
						{
							case 1 :
								//alert("页面成功加载了组件！");
								break;
							case 2 :
								//alert("已成功加载图片到编辑面板。");
								document.getElementById("upload").style.display = "inline";
								break;
							case 3 :
								if(msg.type == 0)
								{
									alert("摄像头已准备就绪且用户已允许使用。");
								}
								else if(msg.type == 1)
								{
									alert("摄像头已准备就绪但用户未允许使用！");
								}
								else
								{
									alert("摄像头被占用！");
								}
							break;
						}
					}
				);
            });
        </script>
        <div class="form-group">
          <div class="col-sm-12">

           <input type="submit" value="提交"class="btn btn-info btn-lg btn-block"/ >
      </div>
      </div>

</form>
</div>
</div>
</div>
</div>

 </body>
</html>