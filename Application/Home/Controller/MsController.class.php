<?php
namespace Home\Controller;
use Think\Controller;
class MsController extends Controller {

 function index(){
   $this->setting = D("Admin/Setting");
  $this->cfg = $this->setting->getAll();

    $ms=M("Ms");
    $count= $ms->count();
    $page= new \Think\Page($count,$this->cfg['msnum']);// 实例化分页类 传入总记录数和每页显示的记录数
                           //排序
        $Massages =$ms->order('mid desc')->limit($page->firstRow.','.$page->listRows)->select();


    $this->assign("msshow",$page->show());
    $this->assign("Massages",$Massages);
    $this->display();
    }

    public function add(){
      if(IS_POST){
        $name = I("post.name");
        $address=I("post.address");
        $content=I("post.content");
        $rules=array(
          array('name','require','用户名不能为空'),
          array('address','require','博客地址名不能为空'),
          array('content','require','留言内容不能为空'),
        );
        $ms=M("ms");
        if(!$ms->validate($rules)->create()){
          return $this->error($ms->getError(),"/Home/Ms/msadd");
        }else {
          $insert=array(
            'name'=>$name,
            'address'=>$address,
            'content'=>$content,
          );
          $ms->add($insert);
          return $this->success("提交成功","/Home/Ms");
        }

    }
}
  public function upload(){
      $result = array();
      $result['msg']='';
      $result['success']=false;
      $result['file_path']='';

      $upload = new \Think\Upload();// 实例化上传类
              $upload->maxSize   =     3145728 ;// 设置附件上传大小

              $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
              $upload->rootPath  =     './Uploads/Ms/'; // 设置附件上传根目录
              $upload->savePath  =      '';
               // 上传文件
              $info =$upload->uploadOne($_FILES['file1']);
                if(!$info) {// 上传错误提示错误信息
                      $result['msg'] = $upload->getError();
                }else{// 上传成功
                 $url = '/Uploads/Ms/'. $info['savepath'] . $info['savename'];
                 $result['file_path'] = $url;
                 $result['success'] = true;
         }

         echo  json_encode( $result );

  }

  public function uploadImg(){
  if (IS_POST) {
        $ms=M("Ms");
        $count= $ms->max('mid');
        $result = array();
        $id =$count+1;
        $msg = '';
        $path='Uploads'.'/avatar/';
   if (file_exists($path)) {
            rmDir($path);
        }
        $avatars = array("__avatar1");
        $avatar = $_FILES[$avatars['0']];
        if ($avatar['error'] > 0 ){
            $msg = $avatar['error'];
        }

        if(!file_exists($path)){
            mkDir($path);
        }
        $savePath = $path . $id . ".jpg";
        if(move_uploaded_file($avatar["tmp_name"], $savePath)){
            $result['msg'] = $savePath;
            $result['success'] = true;
            echo json_encode($result);
        }else{
            $result['success'] = false;
        }
    }
}

  }
