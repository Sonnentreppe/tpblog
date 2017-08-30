<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

    public function index(){
      $do = I("get.do");
      if($do=='chk'){
        $auser = I('post.auser');
        $apass = I('post.apass');
        $admin = D('admin');

        $where = array(
           'auser' => $auser,
           'apass' => $apass,
        );
          
        $user = $admin->where($where)->find();
        if(!$user){
          return $this->error("账号或密码错误",__MODULE__.'/Login');
        }
        session("aid",$user['aid']);
        return $this->success("登录成功",__MODULE__.'/Index/index');
      }
      $this->display();
    }

    function logout(){
      session('aid',null);
      return $this->success("退出成功","/Admin/Login/index");
    }
}
