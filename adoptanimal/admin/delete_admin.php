<?php

include('../includes/connection.php');

$query="DELETE FROM admin WHERE admin_id = {$_GET['admin_id']}";

mysqli_query($conn,$query);

echo '<script>window.top.location="manage_admin.php"</script>';
exit;
?>