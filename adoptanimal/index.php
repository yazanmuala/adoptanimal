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


<!-- Banner -->
<div class="sec-banner bg0 p-t-80 p-b-50">
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5 p-t-23 p-b-40">
				Animals CATEGORIES
			</h3>
		</div>
		<div class="row">

			<?php
			$query="SELECT * FROM category";
			$result=mysqli_query($conn,$query);
			while ($row=mysqli_fetch_assoc($result)) {
				echo '<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">';

				echo '<div class="block1 wrap-pic-w">';
				echo "<img style='height: 230px; width: 368px;' src='admin/uplode/{$row['cat_image']}' alt='IMG-BANNER'>";
				echo "<a href='product.php?cat_id={$row['cat_id']}&cat_name={$row['cat_name']}' class='block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3'>";
				echo "<div class='block1-txt-child1 flex-col-l'>
				<span  class='block1-name ltext-102 trans-04 p-b-8'>
				{$row['cat_name']}
				</span>
				</div>";
				echo "<div class='block1-txt-child2 p-b-4 trans-05'>
				<div class='block1-link stext-101 cl0 trans-09'>
				See {$row['cat_name']}
				</div>
				</div>";
				echo "</a></div></div>";
			}
			?>
			
		</div>
	</div>
</div>


<!-- Product -->
<section class="bg0 p-t-23 p-b-140">	
	<div class="container">
		<div class="p-b-10">
			<h3 class="ltext-103 cl5">
				Animals Overview
			</h3>
		</div>

		<div class="flex-w flex-sb-m p-b-52">
			<div class="flex-w flex-l-m filter-tope-group m-tb-10">
				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
					All Products
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".3">
					Cat
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".2">
					Dog
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".4">
					Birds
				</button>

				<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".5">
					Other Animals
				</button>

			</div>

			<div class="flex-w flex-c-m m-tb-10">

				<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
					<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
					<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
					Search
				</div>
			</div>

			<!-- Search product -->
			<div class="dis-none panel-search w-full p-t-10 p-b-15">
				<div class="bor8 dis-flex p-l-15">
					<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>

					<input id="input_name" class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
				</div>	
			</div>
		</div>

		<div id="display_search" class="row isotope-grid">

			<?php

			$query="SELECT * FROM product";
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

