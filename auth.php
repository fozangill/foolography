<?php
session_start();
include('dbConfig.php');

?>
<!DOCTYPE html>
    <html>
        <head>
            
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>

        <body>

        </body>

        <?php
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login_button = $_POST['login']; 

        if(isset($login_button)){
        	$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        	
        	$query = @mysqli_query($conn,$sql);
        	if(mysqli_fetch_assoc($query)){
        		$_SESSION['email'] = $email;
                // $_SESSION['user_table_id'] = $id;
        		header("location:overview.php"); 
        	}
        	else{
        		header("location:login.php?Invalid= Please enter correct email or password");
        	}
        }



        ?>