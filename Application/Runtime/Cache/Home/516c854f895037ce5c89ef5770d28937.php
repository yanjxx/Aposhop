<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<link type="text/css" rel="stylesheet" href="/moshop/Public/Home/style/reset.css">
<link type="text/css" rel="stylesheet" href="/moshop/Public/Home/style/main.css">
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script type="text/javascript" src="js/ie6Fixpng.js"></script>
<![endif]-->
</head>

<body>
<div class="headerBar">
	<div class="logoBar red_logo">
		<div class="comWidth">
			<div class="logo fl">
				<a href="#"><img src="/moshop/Public/Home/images/logo.jpg" alt="慕课网"></a>
			</div>
			<h3 class="welcome_title">欢迎注册</h3>
		</div>
	</div>
</div>

<div class="regBox">
	<div class="login_cont">
		<ul class="login">
		<form method="post">
			<li><span class="reg_item"><i>*</i>账户名：</span><div class="input_item"><input type="text" class="login_input user_icon" name="username"></div></li>
			<li><span class="reg_item"><i>*</i>密码：</span><div class="input_item"><input type="password" class="login_input user_icon" name="password"></div></li>
			<li><span class="reg_item"><i>*</i>确认密码：</span><div class="input_item"><input type="password" class="login_input user_icon" name="repassword"></div></li>
			<li><span class="reg_item"><i>*</i>邮箱：</span><div class="input_item"><input type="text" class="login_input user_icon" name="email"></div></li>
			<li><span class="reg_item"><i>*</i>注册时间：</span><div class="input_item"><input type="text" name="time" class="login_input user_icon"required="required" value="<?php echo date('Y-m-d H:i:s');?>" readonly="readonly"></div></li>
			<li class="autoLogin"><span class="reg_item">&nbsp;</span><input type="checkbox" id="t1" class="checked"><label for="t1">我同意《商城》条款</label></li>
			<li><span class="reg_item">&nbsp;</span><input name="ok" type="submit" style="background:#DA6969; border:1px; width:220px ; height:35px;  margin-left:20px; color: #fff;border-radius: 15px;" value="注册" /></li>
		</ul>
		</form>
	</div>
</div>

<div class="hr_25"></div>
<div class="footer">
	<p><a href="#">慕课简介</a><i>|</i><a href="#">慕课公告</a><i>|</i> <a href="#">招纳贤士</a><i>|</i><a href="#">联系我们</a><i>|</i>客服热线：400-675-1234</p>
	<p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
	<p class="web"><a href="#"><img src="images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a><a href="#"><img src="/moshop/Public/Home/images/webLogo.jpg" alt="logo"></a></p>
</div>
</body>
</html>