<?php 
namespace app\index\controller;
use app\index\controller\Base;

class index extends Base{
      public function index(){
           $store = db('storeman')->where('id',session('sid'))->find();
           $this->assign('store',$store); 
           return $this -> fetch();
      }
}