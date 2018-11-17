
<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("public/header.php");
		if(!empty($_GET['sousuo'])){
			$sousuo=$_GET['sousuo'];
			$sql_shangping=mysqli_query($con,"select * from shangpin where name like '%$sousuo%'");
			$aiqiyi_jishu=mysqli_num_rows($sql_shangping);
		}
	?>

		<!--主体-->
		<div class="container" id="zhuti">
			<!-- 搜索栏，手机端显示开始 -->
			<div class="xl12 hidden-m hidden-b">
				<form action="sousuo.php" method="GET">
					<div class="input-group padding-little-top">
						<input type="text" class="input border-main" name="sousuo" size="30" placeholder="搜索商品" />
						<span class="addbtn"><button type="submit" class="button bg-main icon-search"></button></span>
					</div>
				</form>
			</div>
			<!-- 搜索栏，手机端显示结束 -->
			<br>
			<!--爱奇艺开始-->
			<div class="x12">
				<br>
				<blockquote class="border-main">
					结果
				</blockquote>
				<?php
					if(!empty($_GET['sousuo'])){
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