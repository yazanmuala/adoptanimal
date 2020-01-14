<?php
include('includes/connection.php');

if(isset($_GET['val'])){
	$val = $_GET['val'];
	if($val != ''){
		$sql = "SELECT * FROM product WHERE product_name like '%$val%'";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {$row['cat_id']}'>";
				echo '<div class="block2">';
				echo '<div class="block2-pic hov-img0">';
				echo "<img style='height: 260px;' src='admin/uplode/{$row['product_image']}' alt='IMG-PRODUCT'>";
				echo "<a href='product-detail.php?product_id={$row['product_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ''>
				Quick View";
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
		}
	}else{
		$sql = "SELECT * FROM product";
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				echo "<div class='col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {$row['cat_id']}'>";
				echo '<div class="block2">';
				echo '<div class="block2-pic hov-img0">';
				echo "<img style='height: 260px;' src='admin/uplode/{$row['product_image']}' alt='IMG-PRODUCT'>";
				echo "<a href='product-detail.php?product_id={$row['product_id']}' class='block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 ''>
				Quick View";
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
		}
	}
}



exit();


/*<?php if(basename($_SERVER['PHP_SELF'],'.php') == 'contact') echo '<title>منصة أساس التعليمية | اتصل بنا</title>';?>*/