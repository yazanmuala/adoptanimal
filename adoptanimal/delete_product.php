<?php

include('includes/connection.php');

$query="DELETE FROM product WHERE product_id = {$_GET['product_id']}";

mysqli_query($conn,$query);

header("location:show_pet.php");
exit;
?>