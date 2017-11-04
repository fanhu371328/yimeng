<?php
namespace Home\Controller;
use Think\Controller;

class PersonController extends Controller {
	//个人中心
    public function index(){
    		
    		$userId = I('get.id');
    		
        $data = 123;

        $this->assign('data',$data);
        $this->display('person/index');
    }
    
    
    
    
    
}
