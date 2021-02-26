<?php
include('dbConfig.php');

$first_name = @$_POST['first_name'];
$last_name = @$_POST['last_name'];
$email = @$_POST['email'];
$pass = @$_POST['pass'];
if(!empty($first_name) && !empty($last_name) && !empty($email) && !empty($pass)){
$sql = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$pass')";

@mysqli_query($conn, $sql);

}

else{
?>

<!DOCTYPE html>
  <html>
    <head>
       <title>User Registeration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>

    <body style="background-color: #17a2b8;">
   <div class="row">
    <div class="col-md-12">
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
          <a class="nav-link" href="index.php" style="color: rgba(255,255,255,.5);">Home</a>
          <ul class="navbar-nav">
            <!-- <li class="nav-item">
              <a class="nav-link" href="overview.php">Overview</a>
            </li> -->
            <li class="nav-item">
              <a class="navbar-brand" href="register.php">Register</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
<section id="register-form" style="margin-top: 10%; margin-left: 35%;">

      
        
          <!--Grid row-->
          <div class="row">
        
            <!--Grid column-->
            <div class="col-md-6 mb-4">
        
            
        
              <!--Section: Live preview-->
              <section style="background-color: #EAEAEA;">
        
                <!-- Default form register -->
                <form class="text-center border border-light p-5" method="POST" action="register.php">
        
                  <p class="h4 mb-4">Sign up</p>
        
                  <div class="form-row mb-4">
                    <div class="col">
                      <!-- First name -->
                      <input type="text" class="form-control" placeholder="First name" name="first_name" required>
                    </div>
                    <div class="col">
                      <!-- Last name -->
                      <input type="text" class="form-control" placeholder="Last name" name="last_name" required>
                    </div>
                  </div>
        
                  <!-- E-mail -->
                  <input type="email" class="form-control mb-4" placeholder="E-mail" name="email" required>
        
                  <!-- Password -->
                  <input type="password" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="pass" required>
                 
                  <!-- Sign up button -->
                <button class="btn btn-success my-4 btn-block waves-effect waves-light" name="submit" type="submit">Register</button>
        
               </form>
        
              </section>
        
            </div>

          </div>

      </section>



    </body>
    <?php
  }
  ?>