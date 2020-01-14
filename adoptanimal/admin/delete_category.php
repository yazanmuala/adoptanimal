<?php

include('../includes/connection.php');

$query="DELETE FROM category WHERE cat_id = {$_GET['cat_id']}";

mysqli_query($conn,$query);

echo '<script>window.top.location="category_admin.php"</script>';
exit;
?>