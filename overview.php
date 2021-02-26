<?php 
session_start();
include('dbConfig.php');



if(isset($_SESSION['email']))
{
	$email = $_SESSION['email'];
	$sql = "SELECT id FROM users where email = '$email'";
$query = @mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
$user_id = $row['id'];
// print_r($row['id']);exit();

	if(@$_POST['update']){
		
		// $user_id = $_SESSION['user_id'];
	// echo $user_id;exit();
	$id = $_REQUEST['id'];
	$long_url = @$_POST['long_url'];
	$short_url = @$_POST['short_url'];
	$counter = @$_POST['counter'];


	$sql = "UPDATE short_urls SET long_url='$long_url', short_code = '$short_url', hits = '$counter' WHERE id=$id AND user_id = $user_id";

	mysqli_query($conn, $sql);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Overview</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body  style="background-color: #17a2b8;">
	<div class="row">
		<div class="col-md-12">
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
				  <a class="nav-link" href="index.php" style="color: rgba(255,255,255,.5);">Home</a>
				  <ul class="navbar-nav">
				    <li class="nav-item">
				      <a class="navbar-brand" href="overview.php">Overview</a>
				    </li>
				    <!-- <li class="nav-item">
				       <a class="nav-link" href="register.php">Register</a>
				    </li> -->
				    <li class="nav-item">
		              <a class="nav-link" href="logout.php?logout">Logout</a>
		            </li>

		            <li class="nav-item" >
		              <a class="nav-link" href="">Welcome <?php echo $email;?></a>
		            </li>
				  </ul>
				</nav>
			</div>
		</div>

	<div class="container" style="margin-top: 10%;">

		<h1 align="center">Overview</h1><br>
	<h3 align="right"><a href="old_delete.php" style="color: black;">Click to delete older records</a></h3>
	</div>
	<div class="container" style="background-color: #EAEAEA;">

<table class="table table-striped">
	 <thead>
      <tr>
        <th>Long URL</th>
        <th>Short URL</th>
        <th>Visit Counter</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr> -->

<?php

// $user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM short_urls where user_id = $user_id";
// print_r($sql);exit();
$query = @mysqli_query($conn,$sql);

            echo "<tr>";
          
 while ($row = @mysqli_fetch_array($query)){

    echo "<td>" .$row['long_url'] . "</td>";
    echo "<td>" .'https://localhost/foolography/redirect.php?c='.$row['short_code'] . "</td>";
    echo "<td>" .$row['hits'] . "</td>";
    ?>
    
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

<?php
    echo "</tr>";
  }


?>
<!-- </tr> -->
 </tbody>
  </table>
</div>

</body>
</html>

<?php
}

?>