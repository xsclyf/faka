<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("public/header.php");
		$sql_shangping=mysqli_query($con,"select * from fenlei");
		$aiqiyi_jishu=mysqli_num_rows($sql_shangping);
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
					分类
				</blockquote>
				<?php
					for($i=0;$i<$aiqiyi_jishu;$i++){
						$shangping=mysqli_fetch_array($sql_shangping);
						$name=$shangping['name'];
						$image=$shangping['image'];
						$leixing=$shangping['leixing'];
						echo '<a href="daohang.php?leixing='.$leixing.'"><div class="xl6 xs3 xm2 xb2 padding">
							<div class="media clearfix">
									<img src="'.$image.'" class="radius img-responsive" alt="...">
								<div class="media-body">
									<strong><center><h2>'.$name.'</h2></center></strong>

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
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<?php include("public/footer.php"); ?>
	</body>

</html>