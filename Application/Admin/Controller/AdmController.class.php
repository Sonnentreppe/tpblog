<?php
namespace Admin\Controller;
use Think\Controller;
class AdmController extends Controller {
   function __construct(){
     parent::__construct();

     $this->aid = session('aid');
     if( $this->aid<1){
       return $this->error("账号或密码错误","/Admin/Login/index");
     }
     $this->user = D("admin")->where( array('aid'=>$this->aid))->find();
     if(!$this->user){
       return $this->error("无效的账号","/Admin/Login/index");
     }

   }
}
