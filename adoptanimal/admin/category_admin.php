<?php
include('../includes/admin_header.php');

//the action will start 

if (isset($_POST['submit'])) {
	//fetch data
	$cat_name   = $_POST['cat_name'];
	$cat_images  = $_FILES['cat_images']['name'];
	$temp_images = $_FILES['cat_images']['tmp_name'];
	$path 		 = "uplode/";

	 //open connection
/*	$conn = mysqli_connect("localhost","root","","aquamall");
//chech the connection
	if (!$conn) {
		die("cannot connect to server"); 	
	}*/
//create query
	move_uploaded_file($temp_images, $path.$cat_images);
	
	 //open connection
/*	$conn = mysqli_connect("localhost","root","","aquamall");
//chech the connection
	if (!$conn) {
		die("cannot connect to server"); 	
	}*/
//create query
	$query="INSERT INTO category(cat_name , cat_image)VALUES('$cat_name' , '$cat_images')";
//perform query
	mysqli_query($conn,$query);
	echo '<script>window.top.location="category_admin.php"</script>';
	
	
	
}






?>

<?php?>
<div class="content">
	<div class="animated fadeIn">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">Create Category</div>
					<div class="card-body">
						<div class="card-title">
							<h3 class="text-center title-2">New Category</h3>
						</div>
						<hr>
						<form action="" method="post" novalidate="novalidate" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="cc-payment" class="control-label mb-1">Category Name</label>
								<input id="cc-pament" name="cat_name"  type="email" class="form-control" aria-required="true" aria-invalid="false" >
							</div>
							
							<div class="custom-file " style="margin-bottom: 15px;">
								<input name="cat_images" type="file" class="custom-file-input" id="customFile">
								<label class="custom-file-label " for="customFile">Category Images</label>
							</div>
							<div >
								<button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
								name="submit">
								<span id="payment-button-amount">Add Category</span>
								<span id="payment-button-sending" style="display:none;">Sending…</span>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		


		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Category Table</strong>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>CAT NAME</th>
								<th>IMAGES</th>
								
								<th>EDIT</th>
								<th>DELETE</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							$query="SELECT * FROM category";
							$result=mysqli_query($conn,$query);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>{$row['cat_id']}</td>";
								echo "<td>{$row['cat_name']}</td>";
								echo "<td><img style='height: 150px; width: 150px;' src='uplode/{$row['cat_image']}'></td>";
								echo "<td><a href='edit_category.php?cat_id={$row['cat_id']}' class='btn btn-warning'>Edit</a></td>";
								echo "<td><a href='delete_category.php?cat_id={$row['cat_id']}' class='btn btn-danger'>Delete</a></td>";
								echo "</tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<?php include('../includes/admin_footer.php')?>