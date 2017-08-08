<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    function __construct(){
      parent::__construct();
       $this->setting = D("Admin/Setting");
       $this->cfg = $this->setting->getAll();

    }

    public function index(){

      $pageModel = M("page");
      $count= $pageModel->count();// 查询满足要求的总记录数
      $page= new \Think\Page($count,$this->cfg['readnum']);// 实例化分页类 传入总记录数和每页显示的记录数
                         //排序
      $blogs =$pageModel->order('pid desc')->limit($page->firstRow.','.$page->listRows)->select();

      $this->assign("show",$page->show());
      $this->assign("blogs",$blogs);


     $this->assign('cfg',$this->cfg);


     $this->display();
    }


    public function read(){
     $pid = I("get.pid");

      $pageModel = D("page");
      $this->assign("blog",$pageModel->where( array('pid'=>$pid))->find());

       $this->assign('cfg',$this->cfg);
         $this->display();
    }
    public function login(){
      $mid = session('mid');

        $this->display();

      }
      public function zan(){
             $data['pid']=isset($_POST['pid'])?intval(trim($_POST['pid'])):0;
             $obj = M("page");

             if(!isset($_COOKIE[$_POST['pid']+10000])&&$obj->where($data)->setInc('zan')){
                 $cookiename = $_POST['pid']+10000;
                 setcookie($cookiename,40,time()+60,'/');
                 $data['info'] = "ok";
                 $data['status'] = 1;
                 $this->ajaxReturn($data);

                 exit();
             }else{
                 $data['info'] = "fail";
                 $data['status'] = 0;
                 $this->ajaxReturn($data);
                 exit();
             }

             }






}
