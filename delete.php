
<?php
session_start();
require('dbConfig.php');
$id = @$_REQUEST['id'];
$user_id = $_SESSION['user_id'];
$query = "DELETE FROM short_urls WHERE id=$id AND user_id = $user_id"; 
$result = @mysqli_query($conn,$query);
header("Location: overview.php"); 
?>