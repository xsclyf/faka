<?php
/**
 * ---------------------参数生成页-------------------------------
 * 在您自己的服务器上生成新订单，并把计算好的订单信息传给您的前端网页。
 * 注意：
 * 1.key一定要在服务端计算，不要在网页中计算。
 * 2.token只能存放在服务端，不可以以任何形式存放在网页代码中（可逆加密也不行），也不可以通过url参数方式传入网页。
 * 3.接口跑通后，如果发现收款二维码是我们官方的，请检查APP是否正在运行。为保障您收款功能正常，如果您的收款手机APP掉线超过一分钟，就会触发代收款机制，详情请看网站帮助。
 * --------------------------------------------------------------
 */
	include 'define.php';
	
    //从网页传入money:支付价格， pay_type:支付渠道：43-支付宝；44-微信支付
	$order_no = date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);  //订单号
	$subject = $_POST["names"]; //商品名
	$pay_type = $_POST["zhifu"]; //支付方式：43-支付宝；44 -微信支付
	$shuliang = $_POST['shuliang']; //商品数量
	$jiage = $_POST["jiage"]; //商品单价
    $moneys = $shuliang*$jiage; //付款价格计算
    $money = $moneys;//付款价格
    $extra = $_POST['leixing'].";".$_POST['shuliang'].";".$_POST['user']; //类型,数量，用户
    echo "调用中……还请耐心等待一下";
    echo $shuliang,$jiage,$money;
    $sign = md5("order_no=" . $order_no . "&subject=" . $subject . "&pay_type=" . $pay_type . "&money=" . $money . "&app_id=" . $app_id . "&extra=" . $extra . "&" . $app_secret);
    //经常遇到有研发问为啥sign值返回错误，大多数原因：1.参数的排列顺序不对；2.上面的参数少传了，但是这里的sign值又带进去计算了，导致服务端sign算出来和你的不一样。

    echo "<form style='display:none;' id='form1' name='form1' method='post' action='https://api.6688pay.com:8080'>
        <input name='order_no' id='order_no' type='text' value='$order_no'/>
        <input name='subject' id='subject' type='text' value='$subject' />
        <input name='pay_type' id='pay_type' type='text' value='$pay_type' />
        <input name='money' id='money' type='text' value='$money'/>
        <input name='app_id' id='app_id' type='text' value='$app_id'/>        
        <input name='extra' id='extra' type='text' value='$extra'/>
		<input name='sign' id='sign' type='text' value='$sign'/>
    </form>
    <script type='text/javascript'>function load_submit(){document.form1.submit()}load_submit();</script>";

?>