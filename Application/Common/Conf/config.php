<?php
return array(
	//'配置项'=>'配置值'
		'DB_TYPE'=>'mysql', // 使用的数据库是mysql  
		'DB_HOST'=>'localhost',//主机名称
		'DB_NAME'=>'db_moshop',// 数据库名  
		'DB_USER'=>'root', //数据库账号
		'DB_PWD'=>'',// 填写你连接数据库的密码  
		'DB_PORT'=>'3306',//数据库端口
		'DB_PREFIX'=>'tb_', // 数据表表名的前缀


	
	'TMPL_PARSE_STRING'     => array(

    	'__HOME__'    =>__ROOT__.'/Public/Home',// 增加新的前台资源目录
    	'__ADMIN__'    =>__ROOT__.'/Public/Admin',// 增加新的前台资源目录

    ),
	 'USER_CONFIG'           =>array(//分页设置
        'pagesize'      =>9,
        'pagesize1'      =>2,
    ),

);