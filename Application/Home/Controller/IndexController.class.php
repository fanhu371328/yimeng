<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	//首页
    public function index(){
    	
        $data = 123;
        $this->assign('data',$data);
        $this->display('index/index');
    }
    
    
    
    
    
}
