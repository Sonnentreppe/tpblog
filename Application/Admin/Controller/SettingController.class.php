<?php
namespace Admin\Controller;

class SettingController extends AdmController{
    public function index(){

       $setting = D("Setting");

       $this->assign('setting',$setting->getAll());
       $this->display();

    }

    public function save(){
       $post = I("post.");

       $setting = D("Setting");


 foreach( $post as $key=>$val ){
   $setting->where(array('key'=>$key))->save( array('val'=>$val));
 }


$this->redirect("/Admin/Setting/index");
    }
  }
?>
