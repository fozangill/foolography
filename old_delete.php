
<?php
session_start();
require('dbConfig.php');
$id = @$_REQUEST['id'];
$user_id = $_SESSION['user_id'];
$query = "DELETE FROM short_urls WHERE  user_id = 0 AND created < now() - interval 30 DAY"; 
$result = @mysqli_query($conn,$query);
header("Location: overview.php"); 
?>