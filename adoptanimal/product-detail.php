<?php
include('includes/public_header.php');
$query="SELECT * FROM product where product_id={$_GET['product_id']}";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result)
?>
<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<?php
								echo "<div class='item-slick3' data-thumb='admin/uplode/{$row['product_image']}'>";
								echo '<div class="wrap-pic-w pos-relative">';
								echo "<img src='admin/uplode/{$row['product_image']}' alt='IMG-PRODUCT'>";
								echo "<a class='flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04' href='admin/uplode/{$row['product_image']}'>
											<i class='fa fa-expand'></i>
										</a>";
										echo "</div></div>";

								?>
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-25">
					<div class="p-r-50  p-lr-0-lg">
						<?php
						echo "<h4 class='mtext-105 cl2 js-name-detail '>
							Animal Name :<span class='text-uppercase'> {$row['product_name']}</span>
						</h4>";

						echo "<p class='stext-102 cl3 p-t-20'>
							<h5 class='mtext-105 cl2 p-b-2'>
								Decription
							</h5>
							{$row['product_desc']}
						</p>";
						
							echo "<p style='    margin-top: 20px;' class='stext-103  btn btn-success '>
							 {$row['mobile']}
						</p>";

						/*echo "<p class='stext-102 cl3'>
								<h5 class='mtext-105 cl2 '>
								date for bost
								</h4>
							 {$row['current_time']}
						</p>";*/

						?>	
						</div>
				</div>
		</div>
</section>
		
	<?php
	include('includes/public_footer.php');
	?>