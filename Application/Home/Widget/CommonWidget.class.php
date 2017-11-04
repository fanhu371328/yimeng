<?php 
namespace Home\Widget;
use Think\Controller;

class CommonWidget extends Controller {
	function header() {
		
		$this->display('Widget/header');
	}
	
	function footer() {
		$this->display('Widget/footer');
	}
	
	function rightNav() {
		$this->display('Widget/rightNav');
	}
	
}