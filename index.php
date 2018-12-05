<!DOCTYPE html>
<html lang="zh-cn">
	<?php
		include("public/header.php");
		$sql_shangping=mysqli_query($con,"select * from shangpin");
		$sql_index_tj=mysqli_query($con,"select * from www");
		$aiqiyi_jishu=mysqli_num_rows($sql_shangping);
		$index_tj_jishu=mysqli_num_rows($sql_index_tj);
	?>
	<!--主体开始-->
		<div class="container">
		<!-- 滚动条开始 -->
			<div class="banner bg-blue hidden-l" style="height: 300px" data-style="border-white">
				<div class="carousel">
					<div class="item">1</div>
					<div class="item">2</div>
					<div class="item">3</div>
				</div>
			</div>
		<!-- 滚动条结束 -->
			<br>
		<?php
			for ($s=0; $s < $index_tj_jishu; $s++) {
				$index_tj=mysqli_fetch_array($sql_index_tj);
				$leixin_id=$index_tj['leixin_id'];
				$tj_name=$index_tj['name'];
				echo '<!--'.$tj_name.'开始-->';
					echo '<div class="x12"><blockquote>'.$tj_name.'</blockquote>';
							mysqli_data_seek($sql_shangping,0);
							for($i=0;$i<$aiqiyi_jishu;$i++){
								$shangping=mysqli_fetch_array($sql_shangping);
								$id=$shangping['goodid'];
								$name=$shangping['name'];
								$jiage=$shangping['jiage'];
								$sjiage=$shangping['s_jiage'];
								$image=$shangping['image'];
								$leixing=$shangping['leixing'];
								if(($leixing)==($leixin_id)){
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
					echo '</div>';
				echo '<!--'.$tj_name.'结束-->';
			}
		?>	
		</div>
	<!-- 主体结束 -->
		<br />
		<br />
		<br />
		<br />
		<?php include("public/footer.php"); ?>
	</body>

</html>