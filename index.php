<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("public/header.php");
		$sql_shangping_aiqiyi=mysqli_query($con,"select * from shangpin where leixing='1'");
		$aiqiyi_jishu=mysqli_num_rows($sql_shangping_aiqiyi);
	?>

		<!--主体-->
		<div class="container">
			<div class="banner bg-blue hidden-l" style="height: 300px" data-style="border-white">
				<div class="carousel">
					<div class="item">1</div>
					<div class="item">2</div>
					<div class="item">3</div>
				</div>
			</div>
			<br>
		<!--爱奇艺开始-->
			<div class="x12">
				<blockquote>
					爱奇艺
				</blockquote>
				<?php
					for($i=0;$i<$aiqiyi_jishu;$i++){
						$aiqiyi=mysqli_fetch_array($sql_shangping_aiqiyi);
						$aiqiyi_name=$aiqiyi['name'];
						$aiqiyi_jiage=$aiqiyi['jiage'];
						$aiqiyi_sjiage=$aiqiyi['s_jiage'];
						echo '<div class="xl6 xs3 xm2 xb2 padding">
								<div class="media clearfix">
									<a href="#">
										<img src="1.jpg" class="radius img-responsive" alt="...">
									</a>
									<div class="media-body">
										<strong>'.$aiqiyi_name.'</strong>
										<div class="x6">￥'.$aiqiyi_jiage.'</div><div class="x6"><s>￥'.$aiqiyi_sjiage.' </s></div>
									</div>
								</div>
							</div>';
					}
				?>
<!--
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
-->
			</div>
		<!--爱奇艺结束-->
		<!--优酷开始-->
			<div class="x12">
				<blockquote>
					优酷
				</blockquote>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
			</div>
		<!--优酷结束-->
		<!--腾讯开始-->
			<div class="x12">
				<blockquote>
					腾讯
				</blockquote>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
			</div>
		<!--腾讯结束-->
		<!--芒果TV开始-->
			<div class="x12">
				<blockquote>
					芒果TV
				</blockquote>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
				<div class="xl6 xs3 xm2 xb2 padding">
					<div class="media clearfix">
						<a href="#">
							<img src="1.jpg" class="radius img-responsive" alt="...">
						</a>
						<div class="media-body">
							<strong>爱奇艺会员</strong>
							<div class="x6">￥10.00</div><div class="x6"><s>￥20.00 </s></div>
						</div>
					</div>
				</div>
			</div>
		<!--芒果TV结束-->

			
		</div>
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<div class="layout padding-big-top padding-big-bottom border-top bg">
			<div class="container padding">
				底部
			</div>
		</div>
		<!--最底部-->
		<div class="layout bg-black bg-inverse">
			<div class="container">
				<div class="navbar">
					<div class="navbar-head">
						<button class="button bg-gray icon-navicon" data-target="#navbar-footer"></button>
						<a href="http://www.pintuer.com" target="_blank"><img class="logo" src="images/24-white.png" alt="拼图前端CSS框架" /></a>
					</div>
					<div class="navbar-body nav-navicon" id="navbar-footer">
						<div class="navbar-text navbar-left hidden-s hidden-l">版权所有 &copy; <a href="http://www.pintuer.com" target="_blank">Pintuer.com</a> All Rights Reserved，图ICP备：380959609</div>
					</div>
				</div>
			</div>
		</div>
	</body>

</html>