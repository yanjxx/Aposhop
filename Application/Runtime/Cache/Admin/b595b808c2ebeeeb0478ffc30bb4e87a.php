<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>渔沙坦影院后台管理系统<</title>
<link rel="stylesheet" href="/moshop/Public/Admin/styles/backstage.css">
</head>

<body>
    <div class="head">
            <div class="logo fl"><a href="#"></a></div>
            <h3 class="head_text fr">渔沙坦影院后台管理系统</h3>
    </div>
    <div class="operation_user clearfix">
       
        <div class="link fr">
            <b><?php echo (session('aname')); ?>欢迎您
        
            
            </b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/Index/index');?>" class="icon icon_i">首页</a><span></span><a href="<?php echo U('Index/logout');?>" class="icon icon_e">退出</a>
        </div>
    </div>
    <div class="content clearfix">
        <div class="main">
            <!--右侧内容-->
            <div class="cont">
                <div class="title">后台管理</div>      
                <iframe src="<?php echo U('main');?>"  frameborder="0" name="mainFrame" width="100%" height="522"></iframe>
     
            </div>
        </div>
        <!--左侧列表-->
        <div class="menu">
            <div class="cont">
                <div class="title">管理员</div>
                <ul class="mList">
                    <li>
                        <h3><span onClick="show('menu1','change1')" id="change1">+</span>商品管理</h3>
                        <dl id="menu1" style="display:none;">
                        	<dd><a href="<?php echo U('Goods/addGoods');?>" target="mainFrame">添加商品</a></dd>
                            <dd><a href="<?php echo U('Goods/listGoods');?>" target="mainFrame">商品列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onClick="show('menu2','change2')" id="change2">+</span>分类管理</h3>
                        <dl id="menu2" style="display:none;">
                        	<dd><a href="<?php echo U('Film/addFilm');?>" target="mainFrame">添加分类</a></dd>
                            <dd><a href="<?php echo U('Film/listFilm');?>" target="mainFrame">分类列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span  onclick="show('menu3','change3')" id="change3" >+</span>订单管理</h3>
                        <dl id="menu3" style="display:none;">
                          
                            <dd><a href="<?php echo U('Order/listOrder');?>">订单列表</a></dd>
                 
                        </dl>
                    </li>
                    <li>
                        <h3><span onClick="show('menu4','change4')" id="change4">+</span>用户管理</h3>
                        <dl id="menu4" style="display:none;">
                        	
                            <dd><a href="<?php echo U('User/user');?>" target="mainFrame">用户列表</a></dd>
                        </dl>
                    </li>
                    <li>
                        <h3><span onClick="show('menu5','change5')" id="change5">+</span>管理员管理</h3>
                        <dl id="menu5" style="display:none;">
                        	<dd><a href="<?php echo U('Admin/addAdmin');?>" target="mainFrame">添加管理员</a></dd>
                            <dd><a href="<?php echo U('Admin/listAdmin');?>" target="mainFrame">管理员列表</a></dd>
                            <dd><a href="<?php echo U('Admin/updatepsd');?>" target="mainFrame">修改密码</a></dd>
                        </dl>
                    </li>
                    
      
                        </dl>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <script type="text/javascript">
    	function show(num,change){
	    		var menu=document.getElementById(num);
	    		var change=document.getElementById(change);
	    		if(change.innerHTML=="+"){
	    				change.innerHTML="-";
	        	}else{
						change.innerHTML="+";
	            }
    		   if(menu.style.display=='none'){
    	             menu.style.display='';
    		    }else{
    		         menu.style.display='none';
    		    }
        }
    </script>
</body>
</html>