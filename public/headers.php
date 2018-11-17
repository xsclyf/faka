	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>喵酱发卡</title>
		<link rel="stylesheet" href="../css/pintuer.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/pintuer.js"></script>
		<script src="../js/respond.js"></script>
		<link type="image/x-icon" href="http://www.pintuer.com/favicon.ico" rel="shortcut icon" />
		<link href="http://www.pintuer.com/favicon.ico" rel="bookmark icon" />
		<?php
			include('../public/conn.php');
		?>
		<style>
			.demo-nav.fixed.fixed-top {
				z-index: 8;
				background: #EEFFEE;
				width: 100%;
				padding: 0;
				border-bottom: solid 3px #0a8;
				-webkit-box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
				box-shadow: 0 3px 6px rgba(0, 0, 0, .175);
			}
			html,body{
                height:100%;
                width: 100%;
                margin: 0;
                padding: 0;
            }
            #zhuti{
                height: 100%;
            }
		</style>
	</head>

	<body>
		<!--导航-->
		<div class="demo-nav padding-big-top padding-big-bottom fixed bg-back">
			<div class="container padding-top padding-bottom">
				<div class="line">
					<div class="xl12 xs3 xm3 xb2">
						<button class="button icon-navicon float-right" data-target="#header-demo"></button>
						<a target="_blank" href="../index.php"><img src="../logo.png" alt="前端CCS框架" /></a>
					</div>
					<div class=" xl12 xs9 xm9 xb10 nav-navicon" id="header-demo">
						<div class="xs8 xm6 xb8 padding-small">
						<ul class="nav nav-menu nav-inline nav-big">
								<li><a href="../index.php">首页</a></li>
								<li><a href="../daohang.php?leixing=1">爱奇艺</a></li>
								<li><a href="../daohang.php?leixing=3">腾讯</a></li>
								<li><a href="../daohang.php?leixing=2">优酷</a></li>
								<li><a href="../daohang.php?leixing=4">芒果</a></li>
								<li><a href="../daohang.php?leixing=5">其他</a></li>
							</ul>
						</div>
<!--						搜索-->
						<div class="xs4 xm3 xb4">
							<form>
								<div class="input-group padding-little-top">
									<form action='sousuo.php' method="GET">
										<input type="text" class="input border-main" name="sousuo" size="30" placeholder="搜索商品" />
										<span class="addbtn"><button type="submit" class="button bg-main icon-search"></button></span>
									</form>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

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
//				 客户稳定		  永不被黑
//             ~~~~~~~~~~~~~~~~~~~~~~~~~~~~
//
-->