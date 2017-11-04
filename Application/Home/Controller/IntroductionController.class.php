<?php
namespace Home\Controller;
use Think\Controller;

class IntroductionController extends Controller {
	//个人中心
    public function introduction(){
    		
    		$productId = I('get.productid');
    		
        $data = 123;
		echo $productId;
        $this->assign('data',$data);
        $this->display('introduction/introduction');
    }
    
    
    
    
    
}
