﻿<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("public/header.php");
		$s_leixing=$_GET['leixing'];
		$sql_shangping=mysqli_query($con,"select * from shangpin where leixing='$s_leixing'");
		$aiqiyi_jishu=mysqli_num_rows($sql_shangping);
		function spname($s_name){
			switch ($s_name) {
				case 1:
					echo "爱奇艺";
					break;
				case 2:
					echo "优酷";
					break;
				case 3:
					echo "腾讯";
					break;
				case 4:
					echo "芒果";
					break;
			}
		}
	?>

		<!--主体-->
		<div class="container" id="zhuti">
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
					<?php spname($s_leixing); ?>
				</blockquote>
				<?php
					for($i=0;$i<$aiqiyi_jishu;$i++){
						$shangping=mysqli_fetch_array($sql_shangping);
						$id=$shangping['goodid'];
						$name=$shangping['name'];
						$jiage=$shangping['jiage'];
						$sjiage=$shangping['s_jiage'];
						$image=$shangping['image'];
						$leixing=$shangping['leixing'];
						echo '<a href="xiangxi.php?id='.$id.'"><div class="xl6 xs3 xm2 xb2 padding">
							<div class="media clearfix">
									<img src="'.$image.'" class="radius img-responsive" alt="...">
								<div class="media-body">
									<strong>'.$name.'</strong>
									<div class="x6">￥'.$jiage.'</div><div class="x6"><s>￥'.$sjiage.' </s></div>
								</div>
							</div>
							</div></a>';
					}
				?>
			</div>
			<!--爱奇艺结束-->

		</div>
		<br />
		<br />
		<!--底部-->
		<br />
		<br />
		<?php include("public/footer.php"); ?>
	</body>

</html>