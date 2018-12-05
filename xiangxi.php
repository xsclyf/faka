<!DOCTYPE html>
<html lang="zh-cn">
		<?php
			include("public/header.php");
			$sid=$_GET['id'];
			$sql_xiangxi=mysqli_query($con,"select * from shangpin where goodid='$sid'");
			$xiangxi=mysqli_fetch_assoc($sql_xiangxi);
		?>
	<!--主体开始-->
		<div class="container bg-white" id="zhuti">
			<br>
			<div class="xl12 xs12 xm12 xb12 bg-white"><form method="POST" action="pay/pay.php">
				<div class="xl12 xs12 xm4 xb4">
					<img class="img-responsive" src="<?php echo $xiangxi['image']; ?>" width="100%" alt=""/>
				</div>
				<div class="xl12 xs12 xm8 xb8 padding-big">
					<h2><?php echo $xiangxi['name']; ?></h2>
					<input type="hidden" id="names" name="names" value="<?php echo $xiangxi['name']; ?>">
					<input type="hidden" id="leixing" name="leixing" value="<?php echo $sid; ?>">
				</div>
				<div class="xl12 xs12 xm8 xb8 padding-big">
					<h4>售价：￥<?php echo $xiangxi['jiage']; ?></h4><p>
					<input type="hidden" id="inputmoney" name="jiage" value="<?php echo $xiangxi['jiage']; ?>">
					<h4>库存：9999</h4><p>
					<h4>手机号：<input type="text" class="input" name="user"></h4>
					<h4><div class="x12"><div class="xl12 xs12 xm3 xm3">
						数量：
						<select class="input" id="shuliang" name="shuliang">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
						</div></div></h4>
					<p>支付方式
					<div class="x12">
						<div class="button-group radio">
							<label class="button active">
								<input name="zhifu" value="43" checked="checked" type="radio">支付宝
							</label>
							<label class="button">
								<input name="zhifu" value="44" type="radio">微信
							</label>
						</div>
					</div>
					<div class="xl12 xs12 xm3 xb3 padding"><input class="button" type="submit" value="购 买"></div>
				</div>
			</div></form>
			<div class="xl12 xs12 xm12 xb12 padding-big bg-back" >
				中间介绍
			</div>
		</div>
	<!--主体结束-->
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<?php include("public/footer.php"); ?>
	</body>
</html>