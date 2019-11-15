<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function  index(){
       if(!session('?aname')){
			$this->error('非法操作，请登录',U('Index/login'));
			return;
		}
	   	$this -> display();
    }

    public function login(){
        if (IS_POST) {
            $adminModel=M('Admin');
            $adminInfo=$adminModel->create();//创建和查询数据对象
            $where=array('aname'=>$adminInfo['aname']);
            if($realPwd=$adminModel->where($where)->getField('apassword')){//从数据库获取密码
                if($realPwd==($adminInfo['apassword'])){//判断密码是否正确
                    session('aname',$adminInfo['aname']);
                    $this->success('登录中',U('index'));
                    return;
                }
                
            }
            $this->error('用户名或者密码不正确');
            return;
        }else{
            $this -> display();
        }
    }

    public function logout(){
        session(null);//清空session
        $this ->redirect('Index/login');//redirect重定向到login页面
    }
}