<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){//首页
       $this->display();
    }

    public function login(){//登录页

         if(IS_POST){//判断是否是POST方式提交
        
            $data=M('User')->create();//创建和查询数据对象
            $where=array(
                'username'=>$data['username'],
            );//getField方法：读取字段值，where方法：查询字符串条件
            if($realPwd=M('User')->where($where)->getField('password')){
                if($realPwd==$data['password']){
                    session('username',$data['username']);//保存到session中
                    $this->success('用户登录操作成功，正在跳转，请稍候.....',U('index'));
                    return;
                }
            }
            $this->error('密码错误，正在返回，请稍候....');
            return;

        }else{
            $this -> display();
        }
    }

    public function reg(){//注册页
    	if(IS_POST){
    		$username=$_POST['username'];
    		$password=$_POST['password'];
    		$email=$_POST['email'];
            $time= $_POST['time'];
    		$data = array(
    			'username' =>$username,
    			'password' =>$password,
    			'email' =>$email,
                'time' => $time,
    			);
    		if(!D('User')->create()){
    			$this ->error('注册失败'.D('User')->getError());
    		}
    		if(!D('User')->data($data)->add()){
    			$this ->error('数据添加失败');
    		}

    		$this ->success('用户注册成功',U('login'));//注册成功
    		return;
    	}
    	$this->display();
    }

    public function logout(){
        session(null);
        $this->redirect('Index/index');//重定向到首页
    }
}