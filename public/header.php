<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<?php
	session_start();
	include('../public/conn.php');
	if(!isset($_SESSION['a_user'])){
        echo '<h1>对不起你没有登陆，没有访问权限，点击<a href="../a_denglu.html"><font color="#FF0004">返回</font></a>登陆</h1>';
        exit();
    }
?>
<title>管理员页面</title>
<link rel="stylesheet" href="../css/pintuer.css">
<script src="../js/jquery.js"></script>
<script src="../js/pintuer.js"></script>
<script src="../js/respond.js"></script>
<style>
	html,body{
		height: 92%;
	}	
</style>
</head>

<!--
//
//                       _oo0oo_
//                      o8888888o
//                      88" . "88
//                      (| -_- |)
//                      0\  =  /0
//                    ___/`---'\___
//                  .' \\|     |// '.
//                 / \\|||  :  |||// \
//                / _||||| -:- |||||- \
//               |   | \\\  -  /// |   |
//               | \_|  ''\---/''  |_/ |
//               \  .-\__  '-'  ___/-. /
//             ___'. .'  /--.--\  `. .'___
//          ."" '<  `.___\_<|>_/___.' >' "".
//         | | :  `- \`.;`\ _ /`;.`/ - ` : | |
//         \  \ `_.   \_ __\ /__ _/   .-` /  /
//     =====`-.____`.___ \_____/___.-`___.-'=====
//                       `=---='
//
//
//             ~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//               佛祖保佑         永无BUG
//               服务器稳         永不宕机
//             ~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//
-->
<body style="height: 100%"><div style="height: 100%">
	<div class="layout padding-large-left padding-large-right bg-yellow"><!--头部-->
		<div class="xm12"><div class="xm3"><h1>蹦叉叉宿舍管理系统</h1></div><div style="text-align: right" class="xm9 hidden-l"><a href="../public/out.php"><button class="button bg-sub radius-rounded">
	<span class="icon-sign-out"></span>退出</button></a></div></div>
	</div>