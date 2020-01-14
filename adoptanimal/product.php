<?php
include('includes/public_header.php');


?>

		

	<!-- Slider -->
<section class="section-slide">
	<div class="wrap-slick1">
		<div class="slick1">
			<div class="item-slick1" style="background-image: url(admin/uplode/banner-bg.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								Cat
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
							<h2 style="color: white !important; font-family: cursive !important;" class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5; font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item-slick1" style="background-image: url(admin/uplode/call-bg.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								OYTHERS ANIMALS
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2 style="color: white !important; font-family: cursive !important;" class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div  class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5 ; font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="item-slick1" style="background-image: url(admin/uplode/slider-2.jpg);">
				<div class="container h-full">
					<div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
						<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
							<span style="color: white !important; font-family: cursive !important;" class="ltext-101 cl2 respon2">
								DOG
							</span>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
							<h2  style="color: white !important; font-family: cursive !important;"class="ltext-201 cl2 p-t-19 p-b-43 respon1">
								NEW PAT
							</h2>
						</div>

						<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
							<a style="background-color:#2bd5c5;font-family: cursive !important;" href="add_pet.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
								ِAdd Pet
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">	
		<div class="container">
			<div class="p-b-10">
				<?php
				echo "<h3 class='ltext-103 cl5 p-t-23 p-b-40'>
					{$_GET['cat_name']}
				</h3>";


				?>
				
			</div>

	

			<div class="row isotope-grid">

				<?php

				$query="SELECT * FROM product where cat_id={$_GET['cat_id']}";
				$result=mysqli_query($conn,$query);
				while ($row=mysqli_fetch_assoc($result)) {
					echo "<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {$row['cat_id']}'>";
					echo '<div class="block2">';
					echo '<div class="block2-pic hov-img0">';
					echo "<img style='height: 334px;' src='admin/uplode/{$row['product_image']}' alt='IMG-PRODUCT'>";
					echo "<a href='product-detail.php?product_id={$row['product_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ''>
								Show";
					echo "</a></div>";
					echo '<div class="block2-txt flex-w flex-t p-t-14">';
					echo '<div class="block2-txt-child1 flex-col-l ">';
					echo "<a href='product-detail.php?product_id={$row['product_id']}' class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
									{$row['product_name']}
								</a>";
					echo "</div>";
					echo '<div class="block2-txt-child2 flex-r p-t-3">';
				
								echo "</div></div></div></div>";

				}


				?>


							
								
						
			</div>

			
		</div>
	</section>
<?php
include('includes/public_footer.php');
?>

	