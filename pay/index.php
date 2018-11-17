<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("../public/headers.php");
			/**
			 * ---------------------支付成功，用户会跳转到这里-------------------------------
			 * 
			 * 此页就是接口后台的return_url页的网址
			 * 支付成功，平台会把用户跳转回这里。
			 * 
			 * --------------------------------------------------------------
			 */
		include('define.php');

		//同步回调页面
		//接收参数
		$order_no = $_GET["order_no"];
		$subject = $_GET["subject"];
		$pay_type = $_GET["pay_type"];
		$money = $_GET["money"];
		$realmoney = $_GET["realmoney"];
		$result = $_GET["result"];
		$xddpay_order = $_GET["xddpay_order"];
		$app_id = $_GET["app_id"];
		$extra = $_GET["extra"];
		$sign = $_GET["sign"];

		//计算签名
		$mysign_forstr = "order_no=" . $order_no . "&subject=" . $subject . "&pay_type=" . $pay_type . "&money=" . $money . "&realmoney=" . $realmoney . "&result=" . $result . "&xddpay_order=" . $xddpay_order . "&app_id=" . $app_id . "&extra=" . $extra . "&" . $app_secret;
		$mysign = strtoupper(md5($mysign_forstr));
	?>

	<!--主体开始-->
		<div class="container"  id="zhuti">
			<div class="banner bg-blue hidden-l" style="height: 300px" data-style="border-white">
				<div class="carousel">
					<div class="item">1</div>
					<div class="item">2</div>
					<div class="item">3</div>
				</div>
			</div>
			<br>
		<!--主体内容开始-->
			<div style="height: 100%">
				<?php
				//验签
					if(($sign)==null){
						echo "1";
						exit();
					}
					if ($sign == $mysign){
						if ($result == "success"){
							//建议业务处理放在notify.asp页面，本页仅用于显示支付结果
							//此处在您数据库中查询：此笔订单号是否已经异步通知给您付款成功了。如成功了，就给他返回一个支付成功的展示。
							$arr=explode(";",$extra);
							$s_leixing=$arr['0'];
							$s_shuliang=$arr['1'];
							$s_user=$arr['2'];
							$sql_chaxun=mysqli_query($con,"select * from dingdan where users='$s_user' and d_hao='$order_no'");
							$kami=mysqli_fetch_assoc($sql_chaxun);
							$kami_arr=explode(";",$kami['k_hao']);
							echo '<div class="bg-mix x12">
									<div><center><span class="icon-check-circle text-large text-green"></span></center></div>
									<div><center><h2>付款成功</h2></center></div>
									<div class="xl12 xs10 xm6 xb6 xs1-move xm2-move xb2-move"><h2>订单号：'.$order_no.'<br>电话号码：'.$s_user.'<br>支付方式：'.$pay_type.'<br>应付金额：'.$money.'<br>实付金额：'.$realmoney.'<br>卡密：';
									foreach ($kami_arr as $kami_neirong) {
										echo $kami_neirong."<br>";
									}
							echo '</h2></div>
									<div class="xl12 xs10 xm6 xb6 xs1-move xm2-move xb2-move padding"><a href="../index.php" class="button bg-white">返回首页</a></div>
								  </div>';
						}
						else{
							echo "支付失败！请联系客服人员处理！";
						}
					}else{
						echo "mysign_forstr=" . $mysign_forstr;	//调试时开启
						echo "<br>sign=" . $sign;
						echo "<br>mysign=" . $mysign;
						echo "<br><br>认证失败请联系管理员！";
					}
				?>
			</div>
		<!--主体内容结束-->
		
		</div>
	<!--主体结束-->
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<!-- 底部开始 -->
		<div class="layout padding-big-top padding-big-bottom border-top bg">
			<!-- 电脑端底部开始 -->
			<div class="container x12 hidden-x hidden-l">
				我只在电脑上显示哦
			</div>
			<!-- 电脑端底部结束 -->
			<!--手机端显示开始-->
			<div class="fixed hidden-m hidden-b bg-mix x12" data-style="fixed-bottom" style="height:50px;">
				<div class="x3 padding"><center><h1><a href="../index.php" class="button border-main button-block">首页</a></h1></center></div>
				<div class="x3 padding"><center><h1><a href="../fenlei.php" class="button border-main button-block">分类</a></h1></span></center></div>
				<div class="x3 padding"><center><h1><a href="../sousuo.php" class="button border-main button-block">搜索</a></h1></center></div>
				<div class="x3 padding"><center><h1><a href="" class="button border-main button-block">订单</a></h1></center></div>
			</div>
			<!-- 手机端显示关闭 -->
		</div>
		<!--底部结束-->
	</body>

</html>