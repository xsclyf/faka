<?php
/**
 * ---------------------异步通知页面-------------------------------
 * 
 * 此页就是接口后台的notify_url页的网址
 * 支付成功，平台会通知这里。
 * 
 * --------------------------------------------------------------
 */
	include('define.php');

	//同步回调页面
	//接收参数
	$order_no = $_POST["order_no"];//订单号
	$subject = $_POST["subject"];//商品名
	$pay_type = $_POST["pay_type"];//付款方式
	$money = $_POST["money"];//付款价格
	$realmoney = $_POST["realmoney"];//实际付款
	$result = $_POST["result"];//支付是否成功
	$xddpay_order = $_POST["xddpay_order"];//支付平台订单号
	$app_id = $_POST["app_id"];
	$extra = $_POST["extra"];//自定义数据
	$sign = $_POST["sign"];//签名验证
    
	//计算签名
	$mysign_forstr = "order_no=" . $order_no . "&subject=" . $subject . "&pay_type=" . $pay_type . "&money=" . $money . "&realmoney=" . $realmoney . "&result=" . $result . "&xddpay_order=" . $xddpay_order . "&app_id=" . $app_id . "&extra=" . $extra . "&" . $app_secret;
	$mysign = strtoupper(md5($mysign_forstr));
	
	if ($sign == $mysign) //验签
	{
		if ($result == "success"){//付款成功处理逻辑
			$arr=explode(";",$extra);
			$s_leixing=$arr['0'];
			$s_shuliang=$arr['1'];
			$s_user=$arr['2'];
			include('../public/conn.php');
			$sql_chaxun=mysqli_query($con,"select * from kami where goodid='$s_leixing' and zt='1' limit $s_shuliang");
			$sql_xiugai=mysqli_query($con,"update kami set zt='0' where  goodid='$s_leixing' and zt='1' limit $s_shuliang");
			$kami_arr=array();
			for ($i=0; $i < $s_shuliang; $i++) { 
				$kami=mysqli_fetch_array($sql_chaxun);
				$kami_jieguo=$kami['neirong'];
				array_push($kami_arr,"$kami_jieguo");
			}
			$kami_neirong = implode(";",$kami_arr);
			$sql_dingdan_tianjia=mysqli_query($con,"insert into dingdan (d_hao,goodid,users,k_hao,jine,y_jine) values('$order_no','$s_leixing','$s_user','$kami_neirong','$realmoney','$money')");
			echo "success";
		}
		else{
			echo "支付失败";
		}
	}
	else
	{
		echo "mysign_forstr=" . $mysign_forstr;	//调试时开启
		echo "<br>sign=" . $sign;
		echo "<br>mysign=" . $mysign;
		echo "<br><br>认证签名失败";
	}

?>
