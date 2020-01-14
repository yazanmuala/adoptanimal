<?php

include('../includes/admin_header.php');
//the action will start 

if (isset($_POST['submit'])) {
	//fetch data
	$product_name    = $_POST['pet_name'];
	$product_desc    = $_POST['pet_desc'];
	$cat_id          = $_POST['cat_id'];

	$pro_images  = $_FILES['pro_images']['name'];
	$temp_images = $_FILES['pro_images']['tmp_name'];
	$path 		 = "uplode/";

	move_uploaded_file($temp_images, $path.$pro_images);
	 //open connection
/*	$conn = mysqli_connect("localhost","root","","aquamall");
//chech the connection
	if (!$conn) {
		die("cannot connect to server"); 	
	}*/
//create query
	$query="INSERT INTO product(product_name,product_desc,cat_id,product_image)VALUES('$product_name','$product_desc','$cat_id','$pro_images')";
	
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
						<div class="card-header">
							<strong class="card-title">Admin Table</strong>
						</div>
						<div class="card-body">
							<table class="table table-striped">
								<thead>
									<tr>

										<th>Product Name</th>

										<th>Product Decreption</th>
										<th>Category Name</th>
										<th>Product image</th>
										<th>Edit</th>
										<th>Delete</th>


									</tr>
								</thead>
								<tbody>
									<?php 
									$query="SELECT * FROM product
									INNER JOIN category ON 
									category.cat_id=product.cat_id";
									$result=mysqli_query($conn,$query);
									while ($row = mysqli_fetch_assoc($result)) {
										echo "<tr>";

										echo "<td>{$row['product_name']}</td>";

										echo "<td>{$row['product_desc']}</td>";
										echo "<td>{$row['cat_name']}</td>";
										echo "<td><img style='height: 150px; width: 150px; max-width: none;' src='uplode/{$row['product_image']}'></td>";
										echo "<td><a href='edit_product.php?product_id={$row['product_id']}&cat_id={$row['cat_id']}' class='btn btn-warning'>Edit</a></td>";
										echo "<td><a href='delete_product.php?product_id={$row['product_id']}' class='btn btn-danger'>Delete</a></td>";
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