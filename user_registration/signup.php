<?php 
session_start();
$showAlert = false; 
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  
  include "partials/_db_con.php";
  $username = $_POST["username"];
  $password = $_POST["password"];
  $email = $_POST["email"];
  $_SESSION["email"] = $email;
  $cpassword = $_POST["cpassword"];
 //$exsit = false;
  $existsql = "SELECT * from `user12` WHERE email = '$email'";
  $result = mysqli_query($conn, $existsql);
  $numExistRows = mysqli_num_rows($result);
  if ($numExistRows > 0) {
    //$exists = true;
    $showError = 'email name already exist';
  }else{
    
  }
  if (($password == $cpassword)){
    $sql = "INSERT INTO `user12` ( `username`, `password`, `email`, `dt`) VALUES ( '$username', '$password','$email', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
      $showAlert = true; 

    }
  }
    else{
      $showError = 'Password doesnot match';
  }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Sign Up!</title>
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
      body{font-family:'Poppins', sans-serif; }
    </style>
  </head>
  <body>
  <?php  require 'partials/_nav.php'; ?>
  <?php if($showAlert)echo'
  <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You can now to login into site and book room!
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>'?>
    <?php if($showError)echo'
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong> '.$showError.'
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    </div>'?>
<div class="container">
 <h1 class="text-center">Sign Up</h1>
 <form action="" method="POST">
<div class="form-group">
 <label for="username">Full Name</label>
 <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Username">
 
</div>
<div class="form-group">
 <label for="username">Email</label>
 <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required>
 <small class="form-text text-muted">correctly enter your email. Its importent to your booking services!</small>
</div>
<div class="form-group">
 <label for="password">Password</label>
 <input type="password" class="form-control" id="password" name="password" placeholder="Password">
</div>
<div class="form-group">
 <label for="cpassword">Confirm-Password</label>
 <input type="password" class="form-control" id="cpassword"  name="cpassword" placeholder="Confirm-Password">
 <small id="emailHelp" class="form-text text-muted">Make sure type the same password.</small>
</div>

<button type="submit" class="btn btn-primary">SignUp</button>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>