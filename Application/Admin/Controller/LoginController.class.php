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
           var_dump( $where);
        $user = $admin->where($where)->find();
        var_dump($user);
        if(!$user){
          return $this->error("账号或密码错误","/Admin/Login");
        }
        session("aid",$user['aid']);
        return $this->success("登录成功","/Admin/Index/index");
      }
      $this->display();
    }

    function logout(){
      session('aid',null);
      return $this->success("退出成功","/Admin/Login/index");
    }
}
