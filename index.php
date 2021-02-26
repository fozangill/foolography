<?php 
session_start();
include('dbConfig.php');

// if(isset($_SESSION['email']))
// {


?>
<!DOCTYPE html>
	<html>
		<head>
			<title>Home</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		</head>

		<body  style="background-color: #17a2b8;">
			<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

				  <a class="navbar-brand" href="index.php">Home</a>

				  
				  <ul class="navbar-nav">
				  	<?php if(isset($_SESSION['email'])){ ?>
				    <li class="nav-item">
				      <a class="nav-link" href="overview.php">Overview</a>
				    </li>
				<?php }?>

				    <?php if(!isset($_SESSION['email'])){ ?>
				    <li class="nav-item">
				       <a class="nav-link" href="register.php">Register</a>
				    </li>

				    
				    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php } else{ ?>

                	 
				    <li class="nav-item">
		              <a class="nav-link" href="logout.php?logout">Logout</a>
		            </li>
		              <li class="nav-item" >
		              <a class="nav-link" href="">Welcome <?php echo $_SESSION['email'];?></a>
		            </li>
		       <?php } ?>
		           

		            
				  </ul>
				</nav>
			</div>
		</div>
			<div class="row" style="margin-top: 10%;">
				<div class="col-md-12">
					<h1><center>URL SHORTENER</center></h1>
				</div>
			</div>

			
<form method="POST" action="short.php">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" id="long_url" placeholder="Enter URL" name="long_url" required>
    </div>
    <div class="col">
      <input type="submit" name="submit" class="btn btn-success">
    </div>
  </div>
</form>

		</body>
	</html>

<?php 
// }
?>