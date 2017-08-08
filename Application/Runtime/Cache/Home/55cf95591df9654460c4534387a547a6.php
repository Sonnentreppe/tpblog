<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Simple demo</title>
        <link rel="stylesheet" href="/Public/bootstrap/css/bootstrap.css"/>
        <script src="/Public/js/jquery-3.2.0.min.js"></script>
        <script src="/Public/bootstrap/js/bootstrap.js"></script>
        <link rel="icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">

        <link rel="shortcut icon" href="/Uploads/favicon.ico" mce_href="/Uploads/favicon.ico" type="image/x-icon">


        <script src="/Public/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="/Public/uploadify/uploadify.css">
  <script type="text/javascript">
    $(function() {
        $('#file_upload').uploadify({
            'swf'      : '/Public/uploadify/uploadify.swf',
            'uploader' : '/Test/uploadify',
            'buttonText' : '上传头像',
            'onUploadSuccess' : function(file, data, response) {
                $('#image').attr('src','/Uploads/acatar/130_'+data);
                $('#pic').val(data);
            },
        });
    });
    </script>
    </head>
    <body>
      <div class="avatar_box"> <img id="image" src="/Public/images/130_<?php echo ($u["photo"]); ?>" width="130" height="130" border="0" />
      <div class="upload_avatar"><input id="file_upload" name="file_upload" type="file" multiple="true" value="" /></div>
  </div>
    </body>
</html>