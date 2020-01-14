<?php
include('../includes/admin_header.php');






?>

<?php?>
<div class="content">
            <div class="animated fadeIn">
			<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<strong class="card-title">Contact Table</strong>
				</div>
				<div class="card-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Customer Email</th>
								<th>Customer Need</th>
								<th class="text-right">Delete</th>


							</tr>
						</thead>
						<tbody>
							<?php 
							$query="SELECT * FROM contact";
							$result=mysqli_query($conn,$query);
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr>";
								echo "<td>{$row['cont_id']}</td>";
								echo "<td>{$row['email']}</td>";
								echo "<td>{$row['cout_text']}</td>";
								echo "<td class='text-right'><a href='delete_admin.php?' class='btn btn-danger' >Delete</a></td>";
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