<?php

include('../includes/admin_header.php');
//the action will start 
if (isset($_POST['submit'])) {
	//fetch data
	$cat_name    = $_POST['cat_name'];
	$cat_images  = $_FILES['cat_images']['name'];
	$temp_images = $_FILES['cat_images']['tmp_name'];
	$path 		 = "uplode/";

	move_uploaded_file($temp_images, $path.$cat_images);

	if ($_FILES['cat_images']['error']==0) {
		$query="UPDATE category SET cat_name  = '$cat_name',
								cat_image = '$cat_images'
							 WHERE cat_id = {$_GET['cat_id']}";
		
	}else{

		$query="UPDATE category SET cat_name  = '$cat_name'
							 WHERE cat_id = {$_GET['cat_id']}";

	}


	
//perform query
	mysqli_query($conn,$query);
	
	
	echo '<script>window.top.location="category_admin.php"</script>';
}

$query 	= "SELECT * FROM category WHERE cat_id = {$_GET['cat_id']}";
$result = mysqli_query($conn,$query);
$row 	= mysqli_fetch_assoc($result);
?>

<div class="main-content" >
	<div class="section__content section__content--p30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">Update Category</div>
						<div class="card-body">
							<div class="card-title">
								<h3 class="text-center title-2">Update Category</h3>
							</div>
							<hr>
							<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data" >
								<div class="form-group">
									<label for="cc-payment" class="control-label mb-1">Category name </label>
									<input id="cc-pament" name="cat_name" type="text" class="form-control" aria-required="true" aria-invalid="false"   value="<?php echo $row['cat_name']?>" >
								</div>
							

	<div class="custom-file " style="margin-bottom: 15px;">
									<input  name="cat_images" type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label " for="customFile">Category images</label>
								</div>
								<div>
									<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
									name="submit">

									<span id="payment-button-amount">Update</span>
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
</div>
<?php include('../includes/admin_footer.php')?>