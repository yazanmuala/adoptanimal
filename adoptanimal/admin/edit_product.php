<?php

session_start();
include('../includes/admin_header.php');
if (!isset($_SESSION['customer_id'])) {
	
	echo '<script>window.top.location="login.php"</script>';
}
//the action will start 

if (isset($_POST['submit'])) {
	//fetch data
	$product_name    = $_POST['pet_name'];
	$product_desc    = $_POST['pet_desc'];
	$cat_id          = $_POST['cat_id'];
	$customer_id	 = $_SESSION['customer_id'];

	$pro_images  = $_FILES['pro_images']['name'];
	$temp_images = $_FILES['pro_images']['tmp_name'];
	$path 		 = "admin/uplode/";

	move_uploaded_file($temp_images, $path.$pro_images);
	 //open connection
/*	$conn = mysqli_connect("localhost","root","","aquamall");
//chech the connection
	if (!$conn) {
		die("cannot connect to server"); 	
	}*/
//create query
	if ($_FILES['pro_images']['error']==0) {
		$query="UPDATE product SET product_name  = '$product_name',
		product_desc = '$product_desc',
		cat_id = '$cat_id',
		product_image = '$pro_images'
		WHERE product_id = {$_GET['product_id']}";
		
	}else{

		$query="UPDATE product SET product_name  = '$product_name',
		
		product_desc = '$product_desc',
		cat_id = '$cat_id'
		WHERE product_id = {$_GET['product_id']}";
	}
	
//perform query
	mysqli_query($conn,$query);

	
	echo '<script>window.top.location="product_admin.php"</script>';

}
?>





<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Add Pat</div>
					<div class="card-body">
						<div class="card-title">
							<h3 class="text-center title-2">New Pat</h3>
						</div>
						<hr>
						<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data" >
							<?php
							$query2  = "SELECT * FROM product where product_id = {$_GET['product_id']}";
							$result2 = mysqli_query($conn,$query2);
							$row2	 = mysqli_fetch_assoc($result2);
							?>
							<div class="form-group">
								<label for="cc-payment" class="control-label mb-1">Pet Name</label>
								<input id="cc-pament" name="pet_name" type="email" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['product_name']?>">
							</div>
							<div class="form-group">
								<label for="cc-payment" class="control-label mb-1">Pat Decription</label>
								<input id="cc-pament" name="pet_desc" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $row2['product_desc']?>">
							</div>
							<div class="row form-group">
								<div class="col col-md-12">
									<label for="select" class=" form-control-label">Select Category Of Pat</label>
								</div>
								<div class="col-12 col-md-12">
									<select  id="select" class="form-control" name="cat_id" required >
										<?php
										$query="SELECT * FROM category";
										$result=mysqli_query($conn,$query);
										while ($row =mysqli_fetch_assoc($result)) {
											if($_GET['cat_id']==$row['cat_id']){
												echo "<option selected value='{$row['cat_id']}'>
												{$row['cat_name']}</option>";

											}else{
												echo "<option value='{$row['cat_id']}'>
												{$row['cat_name']}</option>";
											}}
											?>
										</select>
									</div>
								</div>
								
								<div class="custom-file " style="margin-bottom: 15px;">
									<input name="pro_images" type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label " for="customFile">Pet Images</label>
								</div>
								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
									name="submit">

									<span id="payment-button-amount">Update Pet</span>
									<span id="payment-button-sending" style="display:none;">Sending…</span>
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> 
	</div>
</div>



<?php include('../includes/admin_footer.php')?>