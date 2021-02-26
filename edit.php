<?php 
session_start();
include('dbConfig.php');

$email = $_SESSION['email'];
	$sql = "SELECT id FROM users where email = '$email'";
$query = @mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);
$user_id = $row['id'];

// $user_id = $_SESSION['user_id'];
$id = $_REQUEST['id'];
$sql = "SELECT * FROM short_urls where id = $id AND user_id = $user_id";

$query = @mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
    <html>
        <head>
            <title>Edit</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>

<body>
        

    <div id="login">
        <!-- <h3 class="text-center text-white pt-5">Login form</h3> -->
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form  class="form" action="overview.php" method="POST">
                            <h3 class="text-center text-info">Edit</h3>
                            <div class="form-group">
                                <label for="long_url" class="text-info">Long URL:</label><br>
                                <input type="long_url" name="long_url" id="long_url" value="<?php echo $row['long_url']; ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="short_url" class="text-info">Short URL:</label><br>
                                <input type="short_url" name="short_url" id="short_url" value="<?php echo $row['short_code']; ?>"  class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="counter" class="text-info">Visit Counter:</label><br>
                                <input type="counter" name="counter" id="counter" value="<?php echo $row['hits']; ?>" class="form-control" required>
                            </div>
                            <div>
                                <br>
                               <input type="hidden" name="id" class="btn btn-info btn-md" value="<?php echo $id;?>">
                                <input type="submit" name="update" class="btn btn-info btn-md" value="Update">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<style>
    body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  max-width: 600px;
  height: 430px;
  border: 1px solid #9C9C9C;
  background-color: #EAEAEA;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
</style>