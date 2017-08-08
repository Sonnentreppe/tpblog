<?php
namespace Admin\Controller;

class MsController extends AdmController{
    public function index(){

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
      $pid = I("get.pid");
      $pageModel = D("page");
      $blog = array(
               'pid' => 0,
               'title' =>'',
               'author' =>'',
               'content' =>'',
      );
      if( $pid>0 ){
          $blog = $pageModel->where(array('pid'=>$pid))->find();
      }

      $this->assign( "blog",$blog);//将数组传递给模板
      $this->display();


    }

    public function delete(){
      $mid = I("get.mid");
      M("ms")->where( array('mid'=>$mid))->delete();
      return $this->redirect("/Admin/Ms");
    }

    public function save(){

      $pid = I("get.pid");
      $pageModel=D("page");
      if( IS_POST){
        $title = I("post.title");
        $author = I("post.author");
        $content = I("post.content");
        $rule =array(
          array("title","require","标题不能为空"),
          array("author","require","作者不能为空"),
          array("content","require","正文不能为空"),
        );
        if( !$pageModel->validate($rule)->create()){
          return $this->error( $pageModel->getError(),"/Admin/Blog/add");
        }

        $insert = array(
             'title'  =>$title,
             'author'  =>$author,
             'content' =>$content,

        );
        if( $pid >0){
          $insert['uptime'] = time();
          $pageModel->where( array('pid'=>$pid) )->save( $insert );
        }else{
            $insert['intime'] = time();
            $pageModel->add( $insert);
        }

        return $this->success("操作成功","/Admin/Blog/index");
      }

    }

    public function upload(){
         $result = array();
         $result['msg'] = '';
         $result['success'] = false;
         $result['file_path'] = '';



         $upload = new \Think\Upload();// 实例化上传类
         $upload->maxSize   =     3145728 ;// 设置附件上传大小

         $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
         $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
         $upload->savePath  =      '';
          // 上传文件
         $info =$upload->uploadOne($_FILES['file1']);
           if(!$info) {// 上传错误提示错误信息
                 $result['msg'] = $upload->getError();
           }else{// 上传成功
            $url = '/Uploads/'. $info['savepath'] . $info['savename'];
            $result['file_path'] = $url;
            $result['success'] = true;
    }

    echo  json_encode( $result );
  }
}
