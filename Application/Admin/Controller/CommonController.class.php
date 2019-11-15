<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
	public function _initialize(){
		if(!session('?aname')){
			$this->error('非法操作，请登录',U('Index/login'));
			return;
		}
	}
	
    
}