<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends CommonController{
	public function user(){
		$userdata=D('User')->getUser();
		$this ->assign('page',$userdata['show']);
		$this->assign('user_info',$userdata['data']);
		$this->display();
	}
	public function deluser(){
		$id=I('id');
		$where=array(
			'id'=>$id,
		);
		$deluser=D('User')->where($where)->delete();
		if($deluser === false){
			$this->error('删除失败');
			return;
		}else if($deluser ===0){
			$this->error('没有删除任何数据');
			return;
		}
		$this->redirect('user');	
	}

}