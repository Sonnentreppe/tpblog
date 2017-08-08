<?php
namespace Admin\Controller;

class AuserController extends AdmController {
    public function index(){

       $admin = D("admin");
       $users = $admin->select();

       $data = array();
       $data['users']=$users;
        $this->assign("data",$data);

        $this->display();
    }

    public function add(){

      $aid = I("get.aid");
      $admin = D("admin");
      $user = array(
               'aid' => 0,
               'auser' =>'',
               'apass' =>''
      );
      if( $aid>0 ){
          $user = $admin->where( array('aid'=>$aid) )->find();
      }

      $this->assign( "user",$user );//将数组传递给模板
      $this->display();
    }

    public function delete(){
      $aid = I("get.aid");
     D("admin")->where( array('aid'=>$aid))->delete();
      return $this->redirect("/Admin/Auser");
    }
     public function _edit( $aid ){
       $admin = D("admin");
       if(IS_POST){
         $auser = I("post.auser");
         $apass = I("post.apass");

         $rule= array(
                   array('auser','require','用户名不能为空'), //默认情况下用正则进行验证
                   array('apass','require','密码不能为空'),
                );
             if( !$admin->validate($rule)->create() ){
                 return $this->error( $admin->getError(),"/Admin/Auser/add");
             }
           $where = array();
           $where['auser'] = $auser;
           $where['aid'] = array('NEQ',$aid);
           $isArr = $admin->where( $where)->find();
           if( $isArr){
               return $this->error('用户名已存在',"/Admin/Auser/add");
           }

           $insert = array(
                'auser' => $auser,
                'apass' => $apass,
           );
           $is = $admin->where( array('aid'=>$aid) )->save( $insert );
            return $this->success("成功修改{$is}条数据","/Admin/Auser/index");


      }

     }


    public function save(){

      $aid = I("get.aid");
      if( $aid>0){
        return $this->_edit( $aid );
      }
      $admin = D("admin");

      if(IS_POST){
        $auser = I("post.auser");
        $apass = I("post.apass");

        $rule= array(
                  array('auser','require','用户名不能为空'), //默认情况下用正则进行验证
                  array('apass','require','密码不能为空'),
               );
            if( !$admin->validate($rule)->create() ){
                return $this->error( $admin->getError(),"/Admin/Auser/add");
            }
          $where = array();
          $where['auser'] = $auser;
          $isArr = $admin->where( $where)->find();
          if( $isArr){
              return $this->error('用户名已存在',"/Admin/Auser/add");
          }

          $insert = array(
               'auser' => $auser,
               'apass' => $apass,
          );
          $aid = $admin->add( $insert );
          if( $aid){
             return $this->success('操作成功',"/Admin/Auser/index");
           }else{
             return $this->error('操作失败',"/Admin/Auser/add");
           }
     }
    }
  }
